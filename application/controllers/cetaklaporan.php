<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetaklaporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('CetakModel');
		$this->load->library('dompdf_gen');
		$this->load->helper('file');
		$this->load->model('KesgaModel');
		$this->load->model('P2plModel');
		$this->load->model('YankesModel');
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

	// =================================== CONTROLLER CETAK YANKES=============================================

	public function editFieldCetakyankes()
    {

		$this->load->model('YankesModel');
		$data['kategori']=$this->YankesModel->getFilterKategori();
		$data['laporan']=$this->YankesModel->getFilterLaporan();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetakyankes', $data);
  }

		public function cetakPdfyankes(){

		$this->load->model('YankesModel');
		$data['kategori']=$this->YankesModel->getFilterKategori();
		$data['laporan']=$this->YankesModel->getFilterLaporan();
		$data['detailLaporan']=$this->CetakModel->view_row();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

       $this->load->view('Printyankes', $data);


		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanYankes.pdf");
		unset($html);
		unset($dompdf);
	}



	// =================================== CONTROLLER CETAK P2PL=============================================

 	 public function editFieldCetakp2pl()
    {

		$this->load->model('P2plModel');
		$data['kategori']=$this->P2plModel->getFilterKategori();
		$data['laporan']=$this->P2plModel->getFilterLaporan();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetakP2pl', $data);
  }

		public function cetakPdfP2pl(){

		$this->load->model('P2plModel');
		$data['kategori']=$this->P2plModel->getFilterKategori();
		$data['laporan']=$this->P2plModel->getFilterLaporan();
		$data['detailLaporan']=$this->CetakModel->view_row();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

       $this->load->view('Printp2pl', $data);


		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanP2pl.pdf");
		unset($html);
		unset($dompdf);
	}

	// =================================== CONTROLLER CETAK KESGA=============================================

		public function editFieldCetakKesga()
    {

		$this->load->model('KesgaModel');
		$data['kategori']=$this->KesgaModel->getFilterKategori();
		$data['laporan']=$this->KesgaModel->getFilterLaporan();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetak', $data);
  }

	public function cetakPdf(){

		$this->load->model('KesgaModel');
		$data['kategori']=$this->KesgaModel->getFilterKategori();
		$data['laporan']=$this->KesgaModel->getFilterLaporan();
		$data['detailLaporan']=$this->CetakModel->view_row();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

       $this->load->view('print', $data);


		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanKesga.pdf");
		unset($html);
		unset($dompdf);
	}

	// =================================== CONTROLLER CETAK SEMUA=============================================

 	 public function editFieldCetakSemua()
    {

		$this->load->model('P2plModel');
		$this->load->model('KesgaModel');
		$this->load->model('YankesModel');
		$data['kategoriP2pl']=$this->P2plModel->getFilterKategori();
		$data['laporanP2pl']=$this->P2plModel->getFilterLaporan();
		$data['kategoriYankes']=$this->YankesModel->getFilterKategori();
		$data['laporanYankes']=$this->YankesModel->getFilterLaporan();
		$data['kategoriKesga']=$this->KesgaModel->getFilterKategori();
		$data['laporanKesga']=$this->KesgaModel->getFilterLaporan();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetakSemua', $data);
  }

		public function cetakPdfSemua(){

		$this->load->model('P2plModel');
		$this->load->model('KesgaModel');
		$this->load->model('YankesModel');

		$data['kategoriP2pl']=$this->P2plModel->getFilterKategori();
		$data['laporanP2pl']=$this->P2plModel->getFilterLaporan();
		$data['kategoriYankes']=$this->YankesModel->getFilterKategori();
		$data['laporanYankes']=$this->YankesModel->getFilterLaporan();
		$data['kategoriKesga']=$this->KesgaModel->getFilterKategori();
		$data['laporanKesga']=$this->KesgaModel->getFilterLaporan();
		
		$data['detailLaporan']=$this->CetakModel->view_row();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

       $this->load->view('PrintSemua', $data);

		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->output->get_output();

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanBulananPuskesmas.pdf");
		unset($html);
		unset($dompdf);
	}


	

	// public function getwaktulaporan(){

	// 	$this->load->model('KesgaModel');
	// 	$data['kategori']=$this->KesgaModel->getFilterKategori();
	// 	$data['laporan']=$this->KesgaModel->getFilterLaporan();
	// 	// $data['detailLaporan']=$this->CetakModel->view_row();
 // }





}

/* End of file cetaklaporan.php */
/* Location: ./application/controllers/cetaklaporan.php */