<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		$this->load->model('KesgaModel');
		
	}

	public function index()
	{
		$this->load->view('headeruser');
		$this->load->view('indexUser');
	}

	public function laporanKesgaUser()
	
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'KESGA' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->KesgaModel->getLastKategori();
		$data['laporan']= $this->KesgaModel->getLastLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		

		$this->load->view('headeruser');
		$this->load->view('laporanKesgaUser',$data);
	}

	public function filterKesgaBatu(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		// $data['puskesmas']= $this->UserModel->getFilterPuskesmas();
		$this->load->view('headeruser');
		$this->load->view('laporanKesgaUser',$data);

	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */