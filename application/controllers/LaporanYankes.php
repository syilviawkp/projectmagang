<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanYankes extends CI_Controller {

	public function __construct()
	{
	    
		parent::__construct();
		ob_start();
		$this->load->model('PuskesmasModel');
		$this->load->model('YankesModel');
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
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'YANKES' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
      	$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->YankesModel->getListPuskesmas();
		$data['kategori']= $this->YankesModel->getKategoriYankes();
		$data['laporan']= $this->YankesModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);
	}

	public function filter(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
		$data['puskesmas']= $this->YankesModel->getFilterPuskesmas();
		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);

	}
	public function addYankes()
	{

		
		if(!empty($this->input->post('namaField'))){
		//$this->load->model('YankesModel');
		$this->YankesModel->addLaporan();}
	}

	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$this->YankesModel->cekLaporanKosong();

		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();

		$this->load->view('header');
		$this->load->view('editYankes',$data);
	}

	public function saveEditLaporan(){
	
		if($this->input->post('status')=="submit"){
		$this->YankesModel->editLap();
		$nama = $this->input->post('puskesmas');
	    $bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');
		redirect('LaporanYankes','refresh');
		
		}else{
		$this->YankesModel->ceksms();
		$this->YankesModel->editLap();
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

		redirect('LaporanYankes','refresh');
		}
	}

	

	 public function editFieldLaporan()
    {

    $sess_array = array(
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun')
					);
	$this->session->set_userdata('editFormat', $sess_array);

$this->YankesModel->cekLaporanKosong();

   $this->load->view('header');
       $this->load->view('editYankesGrid');
  }
    public function updateYankes(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->YankesModel->update($id,$idfield);
    }
    public function deleteYankes(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->YankesModel->delete($id,$idfield);
    }

    public function getGridYankes()
    {
        $result = $this->YankesModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

	
}