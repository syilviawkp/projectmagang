<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
		$this->$this->load->helper('url','form');
		$this->$this->load->library('form_validation');
		$this->$this->load->model('UserModel');
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
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function data()
	{ 
		$data['user_object']=$this->UserModel->getUserQueryObject();
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
			
			// $this->form_validation->set_rules('nama', 'nama', 'trim|required');
			// $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
			// $this->form_validation->set_rules('email','email','trim|required');
			// $this->form_validation->set_rules('username','Username','trim|required');
			// $this->form_validation->set_rules('password','Password','trim|required');
			

			// $data['user']=$this->user_model->getCurrentUser();

			// if($this->form_validation->run()==FALSE){
			// 	$this->load->view('edituser', $data);

			// }else{

			// 	$this->user_model->UpdateById();
			// 	$this->load->view('edit_user_sukses');}

	}


}
