<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanKesga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PuskesmasModel');
		$this->load->model('KesgaModel');
		ob_start();
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$data['bulan']= "Januari";
        $data['tahun']= "2019";
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'KESGA' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
      	$data['puskesaktif']=$this->KesgaModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->KesgaModel->getListPuskesmas();
		$data['kategori']= $this->KesgaModel->getKategoriKesga();
		$data['laporan']= $this->KesgaModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanKesga',$data);
	}

	public function filter(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesaktif']=$this->KesgaModel->getPuskesmasAktif();
		$data['puskesmas']= $this->KesgaModel->getFilterPuskesmas();
		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanKesga',$data);

	}
	public function addLaporan()
	{
		if(trim($this->input->post('namaField'))!=""){

		
		//$this->load->model('KesgaModel');
		$this->KesgaModel->addLaporan();
	}
	}

	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$this->KesgaModel->cekLaporanKosong();

		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('editKesga',$data);
	}

	public function saveEditLaporan(){
	if($this->input->post('status')=="submit"){
	$this->KesgaModel->editLap();
	$nama = $this->input->post('puskesmas');
	$bulan=$this->input->post('bulan');
	$tahun=$this->input->post('tahun');
	redirect('LaporanKesga','refresh');

	}else{
		$this->KesgaModel->ceksms();
		$this->KesgaModel->editLap();
		$nama = $this->input->post('puskesmas');
		$bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');

			$nomer =  $this->db->query('SELECT user.noHp FROM user join puskesmas on user.idPuskesmas=puskesmas.idPuskesmas where puskesmas.namaPuskes= "'.$nama.'"');

            foreach ($nomer->result() as $key ) {
            $noHp = $key->noHp;}

	$email_api = urlencode("sylviaputri0@gmail.com ");
	$passkey_api = urlencode("Hm123123");
	$no_hp_tujuan = urlencode($noHp);
	$isi_pesan = urlencode("Kepala Puskesmas $nama,Terimakasih telah mengirim laporan bln ".$bulan." ".$tahun." klik bit.ly/2CSITK6 untuk lengkapnya *Dinkes");


	$url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
	$result = file_get_contents($url);
	$data = explode("~~~", $result);

		redirect('LaporanKesga','refresh');
	}
}

	 public function editFieldLaporan()
    {

    $sess_array = array(
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun'),
					);
	$this->session->set_userdata('editFormat', $sess_array);

$this->KesgaModel->cekLaporanKosong();

		
   $this->load->view('header');
       $this->load->view('editKesgaGrid');
  }
    public function updateLaporan(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->KesgaModel->update($id,$idfield);
    }
    public function deleteLaporan(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->KesgaModel->delete($id,$idfield);
    }

    public function getGridLaporan()
    {
        $result = $this->KesgaModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

	
}