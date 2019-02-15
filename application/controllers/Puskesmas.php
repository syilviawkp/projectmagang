<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Puskesmas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PuskesmasModel');
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

		$this->load->model('PuskesmasModel');
		$data['object']= $this->PuskesmasModel->getDataPuskesmas();

		$this->load->view('header');
		$this->load->view('Listpuskesmas',$data);
	}

		public function data()
	{ 
		$data['object']= $this->PuskesmasModel->getDataPuskesmas();
		$this->load->view('header');
		 $this->load->view('Listpuskesmas', $data);
	}

		public function Delete($idPuskesmas){
		
		$this->PuskesmasModel->delete($idPuskesmas);
		//echo '<script>alert("Sukses menghapus puskesmas")</script>';
	$this->session->set_flashdata('hapusPuskesmas','<div class="alert alert-danger" role="alert">SUKSES HAPUS DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Puskesmas', 'refresh');
		/*$this->load->view('hapus_user_sukses');*/
	}

	public function tambahPuskesmas(){
		$this->load->view('tambahPuskesmas');
	}

	public function Create()
		{
			$this->load->helper('url', 'form');
			$this->load->library('form_validation');
			// $this->load->model('UserModel');
			$this->form_validation->set_rules('namaPuskes', 'namaPuskes', 'trim|required');
			$this->form_validation->set_rules('alamatPuskes', 'alamatPuskes', 'trim|required');
			//$this->form_validation->set_rules('status', 'status', 'trim|required');


		if ($this->form_validation->run()==FALSE) 
			{
				//echo '<script>alert("Gagal menambahkan")</script>';
				$this->session->set_flashdata('tambahPuskesmas','<div class="alert alert-danger" role="alert">GAGAL MENAMBAH DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Puskesmas/data', 'refresh');
		}else
			{
				$this->load->model('PuskesmasModel');
				$this->PuskesmasModel->insertPuskesmas();
				//echo '<script>alert("Sukses mendaftar")</script>';
				$this->session->set_flashdata('tambahPuskesmas','<div class="alert alert-success" role="alert">SUKSES MENAMBAH DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Puskesmas/data', 'refresh');
			}
	}

	public function Update()
	{
		$this->load->helper('url', 'form');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('namaPuskes', 'namaPuskes', 'trim|required');
			$this->form_validation->set_rules('alamatPuskes', 'alamatPuskes', 'trim|required');
			//$this->form_validation->set_rules('status', 'status', 'trim|required');


		if ($this->form_validation->run()==FALSE) 
			{
				
				$this->session->set_flashdata('editPuskesmas','<div class="alert alert-danger" role="alert">GAGAL UPDATE DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Puskesmas/data', 'refresh');
		}else
			{
				$this->PuskesmasModel->UpdateById();
				$this->session->set_flashdata('editPuskesmas','<div class="alert alert-success" role="alert">SUKSES UPDATE DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Puskesmas/data', 'refresh');
	}
}
	
}
