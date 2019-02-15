<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		ob_start();
		$this->load->library('form_validation');
		$this->load->model('UserModel');
		$this->load->model('PuskesmasModel');
		$this->load->model('BerandaModel');
	}

public function dashboard()
	{
		$data['jumlahuser']=$this->BerandaModel->jumlahuser();
		$data['jumlahpuskesmas']=$this->BerandaModel->jumlahpuskesmas();
		$data['jumlahsms']=$this->BerandaModel->jumlahsms();
		
		$data['puskesmas']=$this->BerandaModel->listPuskesmas();

		$data['jumlahyankes']= $this->BerandaModel->jumlahYankes();
		$data['lastYankes']=$this->BerandaModel->lastLaporanYankes();
		$data['dataYankes']=$this->BerandaModel->ceksudahYankes();

		$data['jumlahkesga']= $this->BerandaModel->jumlahKesga();
		$data['lastKesga']=$this->BerandaModel->lastLaporanKesga();
		$data['dataKesga']=$this->BerandaModel->ceksudahKesga();

		$data['jumlahp2pl']= $this->BerandaModel->jumlahP2pl();
		$data['lastP2pl']=$this->BerandaModel->lastLaporanP2pl();
		$data['dataP2pl']=$this->BerandaModel->ceksudahP2pl();
		$this->load->view('header');
		// $this->load->view('headeruser');
		$this->load->view('beranda',$data);
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
		

		$this->load->view('login');
		
	}

	

	public function cekLogin(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username',"username", 'trim|required');
		$this->form_validation->set_rules('password',"password", 'trim|required|callback_cekDb');

		if($this->form_validation->run()== false){
			$this->load->view('login');
		}
		else{
			$session_data=$this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$data['password']=$session_data['password'];
			$data['level']=$session_data['level'];
			
			if($data['level']=='Admin'){
				
					redirect('login/dashboard','refresh');
			}else{
				$data['idPuskesmas']=$session_data['idPuskesmas'];
			
				redirect('User','refresh');
			}
		}
	}

	public function cekDb($password)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('UserModel');
		$username = $this->input->post('username');
		$result = $this->UserModel->login($username, $password);

		if($result){
			$sess_array = array();
			foreach ($result as $key) {
				$level = $key->level;
			} 
			if($level == "User"){
			foreach ($result as $row){
				$sess_array = array(
				'idUser'=>$row->idUser,
				'username'=>$row->username,
				'password'=>$row->password,
				'nama'=>$row->nama,
				'noHp'=>$row->noHp,
				'idPuskesmas'=>$row->idPuskesmas,
				'level'=>$row->level,
				'jabatan'=>$row->jabatan,
				'namaPuskes' => $row->namaPuskes,
				'alamatPuskes' => $row->alamatPuskes
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
		}else{
			foreach ($result as $row){
			$sess_array = array(
				'idUser'=>$row->idUser,
				'username'=>$row->username,
				'password'=>$row->password,
				'nama'=>$row->nama,
				'noHp'=>$row->noHp,
				'level'=>$row->level,
				'jabatan'=>$row->jabatan,
				
				);
				$this->session->set_userdata('logged_in',$sess_array);
		}
	}

			return true;
		}else
		{
			$this->session->set_flashdata('gglLogin','<div class="alert alert-danger" role="alert">LOGIN GAGAL <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			//$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		 $this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function Create()
		{
			$this->load->helper('url', 'form');
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('noHp', 'noHp', 'trim|required');
			
			$this->form_validation->set_rules('level', 'level', 'trim|required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
			

		if ($this->form_validation->run()==FALSE) 
			{
			
				//echo '<script>alert("Gagal menambahkan")</script>';
				$this->session->set_flashdata('tambahUser','<div class="alert alert-danger" role="alert"><b>GAGAL TAMBAH DATA</b> Pastikan seluruh data terisi<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Login/data', 'refresh');
		}else
			{
				if(!is_numeric($this->input->post('noHp'))){
					$this->session->set_flashdata('tambahUser','<div class="alert alert-danger" role="alert"><b>GAGAL TAMBAH DATA</b> Pastikan nomor hp harus berupa angka<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Login/data', 'refresh');
				}else{
				$this->load->model('UserModel');
				$this->UserModel->insertUser();
						$this->session->set_flashdata('tambahUser','<div class="alert alert-success" role="alert">SUKSES TAMBAH DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				//echo '<script>alert("Sukses mendaftar")</script>';
				redirect('Login/data', 'refresh');
			}
			}
	}

	public function tambahUser(){
		$data['puskesmas_object']=$this->PuskesmasModel->getDataPuskesmas();
		$this->load->view('tambahUser',$data);
	}

	public function data()
	{ 
		$data['user_object']=$this->UserModel->getUserQueryObject();
		$data['puskesmas_object']=$this->PuskesmasModel->getDataPuskesmas();
		$this->load->view('header');
		 $this->load->view('user_list', $data);
	}

	public function read(){
		$this->load->helper('url');
		$this->load->model('UserModel');
		$data['user_object']=$this->UserModel->readUser();
		$this->load->view('user_list', $data);
	}


	public function Delete($idUser){
		$this->UserModel->delete($idUser);
		//echo '<script>alert("Sukses menghapus user")</script>';
		$this->session->set_flashdata('hapusUser','<div class="alert alert-danger" role="alert">SUKSES HAPUS DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Login/data', 'refresh');
		/*$this->load->view('hapus_user_sukses');*/
	}

	public function Update()
	{
		$this->load->helper('url', 'form');
			$this->load->library('form_validation');
		
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('noHp', 'noHp', 'trim|required');
			
			$this->form_validation->set_rules('level', 'level', 'trim|required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
			

		if ($this->form_validation->run()==FALSE) 
			{
			
				//echo '<script>alert("Gagal menambahkan")</script>';
				$this->session->set_flashdata('editUser','<div class="alert alert-danger" role="alert"><b>GAGAL EDIT DATA</b> Pastikan seluruh data terisi<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Login/data', 'refresh');
		}else
			{
				if(!is_numeric($this->input->post('noHp'))){
					$this->session->set_flashdata('editUser','<div class="alert alert-danger" role="alert"><b>GAGAL EDIT DATA</b> Pastikan nomor hp harus berupa angka<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('Login/data', 'refresh');
				}else{
				$this->UserModel->UpdateById();
			
				$this->session->set_flashdata('editUser','<div class="alert alert-success" role="alert">SUKSES EDIT DATA <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('Login/data', 'refresh');		
			}
		}
	}

	public function editprofil()
	{
		$data['user']=$this->UserModel->getCurrentUser();
		$this->load->view('editUser', $data);
	}

	public function updateprofil()
	{		$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama','nama','trim|required');
			$this->form_validation->set_rules('noHp','noHp','trim|required');

			$data['user']=$this->UserModel->getCurrentUser();

			if($this->form_validation->run()==FALSE){
				$this->load->view('editUser', $data);

			}else{
				$this->UserModel->EditById();
				echo '<script>alert("Sukses mengedit")</script>';
				redirect('User', 'refresh');}
				
	}

	}



