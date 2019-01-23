<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanYankes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PuskesmasModel');
		$this->load->model('YankesModel');
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
		$data['bulan']= "Januari";
        $data['tahun']= "2019";
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'YANKES' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
      	$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
      	$data['puskesmas']= $this->YankesModel->getListPuskesmas();
		$data['kategori']= $this->YankesModel->getKategoriYankes();
		$data['laporan']= $this->YankesModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);
	}

	public function filter(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesaktif']=$this->YankesModel->getPuskesmasAktif();
		$data['puskesmas']= $this->YankesModel->getFilterPuskesmas();
		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanYankes',$data);

	}
	public function addYankes()
	{
		//$this->load->model('YankesModel');
		$this->YankesModel->addLaporan();
	}

	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$this->YankesModel->cekLaporanKosong();

		$data['kategori']= $this->YankesModel->getFilterKategori();
		$data['laporan']= $this->YankesModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('editYankes',$data);
	}

	public function saveEditLaporan(){
		$this->YankesModel->editLap();
		redirect('LaporanYankes','refresh');
	}

	 public function editFieldLaporan()
    {

    $sess_array = array(
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun')
					);
	$this->session->set_userdata('editFormat', $sess_array);

$this->YankesModel->cekLaporanKosong();

	    // $bulan = $this->session->userdata('editFormat')['bulan'];
     //    $tahun = $this->session->userdata('editFormat')['tahun'];
     //    $this->db->select('*');
     //    $this->db->from('detaillaporan');
     //    $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
     //    $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.')',false);
     //    $query= $this->db->get();
     //      if($query->num_rows()>0){
     //            foreach ($query->result() as $key) {
     //                $field = $key->idLaporan;
     //              }
           
     //            $sess_array = array('idLaporan'=>$field,'bulan'=>$this->input->post('bulan'),
					// 'tahun'=>$this->input->post('tahun'));
     //            $this->session->set_userdata('editFormat', $sess_array);  
           
     //    }else{
     //    $object = array('jenisLaporan'=>"Yankes", 'bulan'=>$bulan, 'tahun'=>$tahun);
     //    $this->db->insert('laporan', $object);

 
     //   $kode =  $this->db->query('SELECT  kodeLaporan FROM laporan where bulan= "'. $bulan .'" and tahun='. $tahun);
     //    foreach ($kode->result() as $key) {
     //       $kodeLaporan= $key->kodeLaporan;
     //     }

     //    $query2= $this->db->query("SELECT * from formatfield join formatkategori on formatkategori.idKategori = formatfield.idKategori where formatkategori.jenisLaporan = 'Yankes'");
     //      foreach ($query2->result() as $key ) {
     //       $object =  array('idLaporan' => $kodeLaporan, 'namaField'=> $key->namaField, 'namaKategori'=> $key->namaKategori );
     //        $this->db->insert('detaillaporan', $object);
     //     }
     //    }	
   $this->load->view('header');
       $this->load->view('editYankesGrid');
  }
    public function updateYankes(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->YankesModel->update($id,$idfield);
    }
    public function deleteYankes(){

        $id = $this->input->post('idDetailLaporan'); 
        $idfield = $this->input->post('idField');
        $this->YankesModel->delete($id,$idfield);
    }

    public function getGridYankes()
    {
        $result = $this->YankesModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

	
}