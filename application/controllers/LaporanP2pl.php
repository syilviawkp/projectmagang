<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanP2pl extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PuskesmasModel');
		$this->load->model('P2plModel');
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
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'P2PL' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
      	$data['puskesaktif']=$this->P2plModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->P2plModel->getListPuskesmas();
		$data['kategori']= $this->P2plModel->getKategoriP2pl();
		$data['laporan']= $this->P2plModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanP2pl',$data);
	}

	public function filter(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesaktif']=$this->P2plModel->getPuskesmasAktif();
		$data['puskesmas']= $this->P2plModel->getFilterPuskesmas();
		$data['kategori']= $this->P2plModel->getFilterKategori();
		$data['laporan']= $this->P2plModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanP2pl',$data);

	}
	public function addP2pl()
	{
		//$this->load->model('P2plModel');
		$this->P2plModel->addLaporan();
	}

	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$this->P2plModel->cekLaporanKosong();

		$data['kategori']= $this->P2plModel->getFilterKategori();
		$data['laporan']= $this->P2plModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('editP2pl',$data);
	}

	public function saveEditLaporan(){
	if($this->input->post('status')=="submit"){
	$this->P2plModel->editLap();
	$nama = $this->input->post('puskesmas');
	$bulan=$this->input->post('bulan');
	$tahun=$this->input->post('tahun');
	redirect('LaporanP2pl','refresh');
		
		}else{
		$this->P2plModel->ceksms();
		$this->P2plModel->editLap();
		$nama = $this->input->post('puskesmas');
		$bulan=$this->input->post('bulan');
		$tahun=$this->input->post('tahun');
		 
		 	$nomer =  $this->db->query('SELECT user.noHp FROM user join puskesmas on user.idPuskesmas=puskesmas.idPuskesmas where puskesmas.namaPuskes= "'.$nama.'"');

            foreach ($nomer->result() as $key ) {
            $noHp = $key->noHp;}

	$email_api = urlencode("sylviaputri0@gmail.com ");
	$passkey_api = urlencode("Hm123123");
	$no_hp_tujuan = urlencode($noHp);
	$isi_pesan = urlencode("Kepala Puskesmas $nama yang terhormat, Terimakasih telah mengirimkan laporan bulan ".$bulan." ".$tahun);

	$url = "https://reguler.medansms.co.id/sms_api.php?action=kirim_sms&email=".$email_api."&passkey=".$passkey_api."&no_tujuan=".$no_hp_tujuan."&pesan=".$isi_pesan;
	$result = file_get_contents($url);
	$data = explode("~~~", $result);
		
		redirect('LaporanP2pl','refresh');
		}
	}

	 public function editFieldLaporan()
    {

    $sess_array = array(
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun')
					);
	$this->session->set_userdata('editFormat', $sess_array);

$this->P2plModel->cekLaporanKosong();

	    // $bulan = $this->session->userdata('editFormat')['bulan'];
     //    $tahun = $this->session->userdata('editFormat')['tahun'];
     //    $this->db->select('*');
     //    $this->db->from('detaillaporan');
     //    $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
     //    $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.')',false);
     //    $query= $this->db->get();
     //      if($query->num_rows()>0){
     //            foreach ($query->result() as $key) {
     //                $field = $key->idLaporan;
     //              }
           
     //            $sess_array = array('idLaporan'=>$field,'bulan'=>$this->input->post('bulan'),
					// 'tahun'=>$this->input->post('tahun'));
     //            $this->session->set_userdata('editFormat', $sess_array);  
           
     //    }else{
     //    $object = array('jenisLaporan'=>"P2pl", 'bulan'=>$bulan, 'tahun'=>$tahun);
     //    $this->db->insert('laporan', $object);

 
     //   $kode =  $this->db->query('SELECT  kodeLaporan FROM laporan where bulan= "'. $bulan .'" and tahun='. $tahun);
     //    foreach ($kode->result() as $key) {
     //       $kodeLaporan= $key->kodeLaporan;
     //     }

     //    $query2= $this->db->query("SELECT * from formatfield join formatkategori on formatkategori.idKategori = formatfield.idKategori where formatkategori.jenisLaporan = 'P2pl'");
     //      foreach ($query2->result() as $key ) {
     //       $object =  array('idLaporan' => $kodeLaporan, 'namaField'=> $key->namaField, 'namaKategori'=> $key->namaKategori );
     //        $this->db->insert('detaillaporan', $object);
     //     }
     //    }	
   $this->load->view('header');
       $this->load->view('editP2plGrid');
  }
    public function updateP2pl(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->P2plModel->update($id,$idfield);
    }
    public function deleteP2pl(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->P2plModel->delete($id,$idfield);
    }

    public function getGridP2pl()
    {
        $result = $this->P2plModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

	
}