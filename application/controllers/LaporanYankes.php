<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanYankes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
		$data['bulan']="-";
		$data['tahun']="-";
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'YANKES' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->YankesModel->getLastLaporan();
		$data['laporan']= $this->YankesModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);
	}

	public function filter(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->YankesModel->getFilterLaporan();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);

	}
	public function addLaporan()
	{
		$this->load->model('YankesModel');
		$data['kategori']=$this->YankesModel->getKategoriYankes();
		$data['field']=$this->YankesModel->getFieldYankes();
		$this->load->view('header');
		$this->load->view('form_component',$data);
	}
	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('editYankes',$data);
	}

	public function saveEditLaporan(){
		$this->YankesModel->editLap();
		redirect('LaporanYankes','refresh');
	}

	
}
