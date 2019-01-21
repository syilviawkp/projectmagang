<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetaklaporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CetakModel');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');

	}


	public function index()
	{
		$data['detailLaporan']=$this->CetakModel->view_row();
		$this->load->view('previewcetak', $data);
	}

	public function cetakPdf(){
		$data['detailLaporan']=$this->CetakModel->view_row();
		$this->load->view('print', $data);
		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan.pdf");
		unset($html);
		unset($dompdf);
	}

}

/* End of file cetaklaporan.php */
/* Location: ./application/controllers/cetaklaporan.php */