<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('headeruser');
		$this->load->view('index');
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */