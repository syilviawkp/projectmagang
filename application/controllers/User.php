<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
		
	}

	public function index()
	{
		$this->load->view('headeruser');
		$this->load->view('indexUser');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */