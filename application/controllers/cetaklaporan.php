<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetaklaporan extends CI_Controller {

	public function __construct(){
	    ob_start();
		parent::__construct();
		$this->load->model('CetakModel');
		$this->load->library('Dompdf_gen');
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


		$data['detailLaporan']=$this->CetakModel->view_row();
		$this->load->view('header');
		$this->load->view('previewcetak', $data);
	}

	public function editFieldCetakyankes()
    {

		$this->load->model('YankesModel');
		$data['kategori']=$this->YankesModel->getFilterKategori();
		$data['laporan']=$this->YankesModel->getFilterLaporan();
		$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->YankesModel->getListPuskesmas();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetakyankes', $data);
  }

		public function cetakPdfyankes(){

		$this->load->model('YankesModel');
		$data['kategori']=$this->YankesModel->getFilterKategori();
		$data['laporan']=$this->YankesModel->getFilterLaporan();
		$data['detailLaporan']=$this->CetakModel->view_row();
		$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->YankesModel->getListPuskesmas();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
	    $html = $this->load->view('Printyankes.html',$data,true);

	
		$dompdf = new DOMPDF();

	    $this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanPSDK.pdf");
		unset($html);
		unset($dompdf);
	}



	// =================================== CONTROLLER CETAK P2PL=============================================

 	 public function editFieldCetakp2pl()
    {

		$this->load->model('P2plModel');
		$data['kategori']=$this->P2plModel->getFilterKategori();
		$data['laporan']=$this->P2plModel->getFilterLaporan();
		$data['puskesaktif']=$this->P2plModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->P2plModel->getListPuskesmas();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetakp2pl', $data);
  }

		public function cetakPdfP2pl(){

		$this->load->model('P2plModel');
		$data['kategori']=$this->P2plModel->getFilterKategori();
		$data['laporan']=$this->P2plModel->getFilterLaporan();
		$data['puskesaktif']=$this->P2plModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->P2plModel->getListPuskesmas();
		$data['detailLaporan']=$this->CetakModel->view_row();
		
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

 

		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->load->view('Printp2pl.html',$data,true);

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanP2P.pdf");
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
		$data['puskesaktif']=$this->KesgaModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->KesgaModel->getListPuskesmas();
		        
 
       $this->load->view('previewcetak', $data);
  }

	public function cetakPdf(){

		$this->load->model('KesgaModel');
		$data['kategori']=$this->KesgaModel->getFilterKategori();
		$data['laporan']=$this->KesgaModel->getFilterLaporan();
		$data['detailLaporan']=$this->CetakModel->view_row();
		$data['puskesaktif']=$this->KesgaModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->KesgaModel->getListPuskesmas();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
 


		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
	$html = $this->load->view('print.html',$data,true);
		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanKESMAS.pdf");
		unset($html);
		unset($dompdf);
	}

	// =================================== CONTROLLER CETAK SEMUA=============================================

 	 public function editFieldCetakSemua()
    {

		$this->load->model('P2plModel');
		$this->load->model('KesgaModel');
		$this->load->model('YankesModel');

		$data['puskesaktifKesga']=$this->KesgaModel->getPuskesmasAktif();
      	$data['puskesmasKesga']= $this->KesgaModel->getListPuskesmas();
      	$data['puskesaktifYankes']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmasYankes']= $this->YankesModel->getListPuskesmas();
      	$data['puskesaktifP2pl']=$this->P2plModel->getPuskesmasAktif();
      	$data['puskesmasP2pl']= $this->P2plModel->getListPuskesmas();

		$data['kategoriP2pl']=$this->P2plModel->getFilterKategori();
		$data['laporanP2pl']=$this->P2plModel->getFilterLaporan();
		$data['kategoriYankes']=$this->YankesModel->getFilterKategori();
		$data['laporanYankes']=$this->YankesModel->getFilterLaporan();
		$data['kategoriKesga']=$this->KesgaModel->getFilterKategori();
		$data['laporanKesga']=$this->KesgaModel->getFilterLaporan();
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		        
 
       $this->load->view('previewcetaksemua', $data);
  }

		public function cetakPdfSemua(){

		$this->load->model('P2plModel');
		$this->load->model('KesgaModel');
		$this->load->model('YankesModel');

		$data['puskesaktifKesga']=$this->KesgaModel->getPuskesmasAktif();
      	$data['puskesmasKesga']= $this->KesgaModel->getListPuskesmas();
      	$data['puskesaktifYankes']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmasYankes']= $this->YankesModel->getListPuskesmas();
      	$data['puskesaktifP2pl']=$this->P2plModel->getPuskesmasAktif();
      	$data['puskesmasP2pl']= $this->P2plModel->getListPuskesmas();

		$data['kategoriP2pl']=$this->P2plModel->getFilterKategori();
		$data['laporanP2pl']=$this->P2plModel->getFilterLaporan();
		$data['kategoriYankes']=$this->YankesModel->getFilterKategori();
		$data['laporanYankes']=$this->YankesModel->getFilterLaporan();
		$data['kategoriKesga']=$this->KesgaModel->getFilterKategori();
		$data['laporanKesga']=$this->KesgaModel->getFilterLaporan();
		
		$data['detailLaporan']=$this->CetakModel->view_row();
 
		$data['bulan'] = $this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');

    

		$paper_size='A4'; //paper size
		$orientation = 'landscape'; //tipe format kertas
		$html = $this->load->view('printsemua.html',$data,true);

		//$this->dompdf->set_paper($paper_size, $orientation); //convert to pdf
		$dompdf = new DOMPDF();
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporanBulananPuskesmas.pdf");
		unset($html);
		unset($dompdf);
	}


	




}

/* End of file cetaklaporan.php */
/* Location: ./application/controllers/cetaklaporan.php */