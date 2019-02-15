<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('KesgaModel');
		$this->load->model('P2plModel');
		$this->load->model('YankesModel');
	}

	public function index()
	{
		$this->load->view('headeruser');
		$this->load->view('IndexUser');
	}


	public function laporanKesgaUser()
	
	{
		$this->load->helper('url');
		$this->load->helper('form');
		 $data['bulan']= "Januari";
        $data['tahun']= 2019;
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'KESGA' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->KesgaModel->getKategoriKesga();
		$data['laporan']= $this->KesgaModel->getLastLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		

		$this->load->view('headeruser');
		$this->load->view('laporanKesgaUser',$data);
	}

	public function laporanP2plUser()
	
	{
		$this->load->helper('url');
		$this->load->helper('form');
		 $data['bulan']= "Januari";
        $data['tahun']= 2019;
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'P2PL' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->P2plModel->getKategoriP2pl();
		$data['laporan']= $this->P2plModel->getLastLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		
		$this->load->view('headeruser');
		$this->load->view('laporanP2plUser',$data);
	}

	public function laporanYankesUser()
	
	{
		$this->load->helper('url');
		$this->load->helper('form');
		 $data['bulan']= "Januari";
        $data['tahun']= 2019;
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'YANKES' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->YankesModel->getKategoriYankes();
		$data['laporan']= $this->YankesModel->getLastLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		

		$this->load->view('headeruser');
		$this->load->view('laporanYankesUser',$data);
	}



	public function filterKesga(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		$this->load->view('headeruser');
		$this->load->view('laporanKesgaUser',$data);

	}

	public function filterP2pl(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->P2plModel->getFilterKategori();
		$data['laporan']= $this->P2plModel->getFilterLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		$this->load->view('headeruser');
		$this->load->view('laporanP2plUser',$data);

	}

	public function filterYankes(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		$this->load->view('headeruser');
		$this->load->view('laporanYankesUser',$data);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */