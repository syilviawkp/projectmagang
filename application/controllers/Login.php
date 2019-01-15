<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('UserModel');
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
		

		$this->load->model('UserModel');
		$data['user_object']= $this->UserModel->getUserQueryObject();

		$this->load->view('header');
		$this->load->view('user_list', $data);
	}

	

	public function cekLogin(){
		// $this->load->library('form_validation');
		// $this->form_validation->set_rules('username',"username", 'trim|required|callback_cekDb');
		// $this->form_validation->set_rules('password',"password", 'trim|required|callback_cekDb');

		// if($this->form_validation->run()==FALSE){
		// 	$this->load->view('login');
		// }
		// else{
		// 	if($this->input->post('level')=='superadmin')
		// }
	}

	public function cekDb($password)
	{
		$this->load->model('UserModel');
		$username = $this->input->post('username');
		$result = $this->UserModel->login($username, $password);

		if($result)
		{
			$sess_array = array();
			foreach ($result as $row)
			{
				$sess_array = array(
				'idUser'=>$row->idUser,
				'username'=>$row->username
				);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}

		else
		{
			$this->form_validation->set_message('cekDb',"Login Gagal Username dan Password tidak valid");
			return false;
		}
	}

	public function logout()
	{
		// $this->session->unset_userdata('logged_in');
		// $this->session->sess_destroy();
		$this->load->view('login');
	}

	public function Create()
		{
			$this->load->helper('url', 'form');
			$this->load->library('form_validation');
			// $this->load->model('UserModel');
			$this->form_validation->set_rules('username', 'username', 'trim|required');
			$this->form_validation->set_rules('password', 'password', 'trim|required');
			$this->form_validation->set_rules('nama', 'nama', 'trim|required');
			$this->form_validation->set_rules('noHp', 'noHp', 'trim|required');
			$this->form_validation->set_rules('idPuskesmas', 'idPuskesmas', 'trim|required');
			$this->form_validation->set_rules('level', 'level', 'trim|required');
			$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
			

		if ($this->form_validation->run()==FALSE) 
			{
				echo '<script>alert("Gagal menambahkan")</script>';
				$this->load->view('tambahUser');
		}else
			{
				$this->load->model('UserModel');
				$this->UserModel->insertUser();
				echo '<script>alert("Sukses mendaftar")</script>';
				redirect('Login/data', 'refresh');
			}
	}

	public function tambahUser(){
		$this->load->view('tambahUser');
	}

	public function data()
	{ 
		$data['user_object']=$this->UserModel->getUserQueryObject();
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
		echo '<script>alert("Sukses menghapus user")</script>';
		redirect('Login/data', 'refresh');
		/*$this->load->view('hapus_user_sukses');*/
	}

	public function Update()
	{
			// $this->form_validation->set_rules('username', 'username', 'trim|required');
			// $this->form_validation->set_rules('password', 'password', 'trim|required');
			// $this->form_validation->set_rules('nama', 'nama', 'trim|required');
			// $this->form_validation->set_rules('noHp', 'noHp', 'trim|required');
			// $this->form_validation->set_rules('idPuskesmas', 'idPuskesmas', 'trim|required');
			// $this->form_validation->set_rules('level', 'level', 'trim|required');
			// $this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
			
			

			// if($this->form_validation->run()==FALSE){
			// 	$this->load->view('editUser', $data);
			// }else{
			// 	$data['idUser']=$idUser;
				$this->UserModel->UpdateById();
				echo '<script>alert("Sukses mengedit")</script>';
			redirect('Login/data', 'refresh');		
			// }



	}

	}



