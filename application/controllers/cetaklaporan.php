<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetaklaporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CetakModel');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		$this->load->model('KesgaModel');
		$this->load->model('CetakModel');

	}


	public function index()
	{
		
		$this->load->helper('url');
		$this->load->helper('form');
		// $query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'KESGA' order by kodeLaporan DESC LIMIT 1");
  // 	foreach ($query->result() as $key) {
  //       $data['bulan']= $key->bulan;
  //       $data['tahun']= $key->tahun;
  //     }
		// $data['kategori']= $this->KesgaModel->getLastKategori();
		// $data['laporan']= $this->KesgaModel->getLastLaporan();

		$data['detailLaporan']=$this->CetakModel->view_row();
		$this->load->view('header');
		$this->load->view('previewcetak', $data);
	}

	public function cetakPdf(){

		$this->load->model('KesgaModel');
		$data['kategori']=$this->KesgaModel->getFilterKategori();
		$data['laporan']=$this->KesgaModel->getFilterLaporan();
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



	public function editFieldCetakKesga()
    {

$this->load->model('KesgaModel');
$data['kategori']=$this->KesgaModel->getFilterKategori();
$data['laporan']=$this->KesgaModel->getFilterLaporan();
$data['bulan'] = $this->input->post('bulan');
$data['tahun']=$this->input->post('tahun');
        
 
       $this->load->view('previewcetak', $data);
  }

}

/* End of file cetaklaporan.php */
/* Location: ./application/controllers/cetaklaporan.php */