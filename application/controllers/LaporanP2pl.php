<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanP2PL extends CI_Controller {

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
		$data['bulan']="-";
		$data['tahun']="-";
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'P2PL' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->P2plModel->getLastLaporan();
		$data['laporan']= $this->P2plModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanP2pl',$data);
	}

	public function filter(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->P2plModel->getFilterLaporan();
		$data['laporan']= $this->P2plModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanP2pl',$data);

	}
	public function addLaporan()
	{
		$this->load->model('P2plModel');
		$data['kategori']=$this->P2plModel->getKategoriKesga();
		$data['field']=$this->P2plModel->getFieldKesga();
		$this->load->view('header');
		$this->load->view('form_component',$data);
	}

	
}
