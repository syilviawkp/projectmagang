<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanKesga extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PuskesmasModel');
		$this->load->model('KesgaModel');
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
		$query = $this->db->query("select tahun,bulan from laporan where jenisLaporan= 'KESGA' order by kodeLaporan DESC LIMIT 1");
  foreach ($query->result() as $key) {
        $data['bulan']= $key->bulan;
        $data['tahun']= $key->tahun;
      }
		$data['kategori']= $this->KesgaModel->getLastKategori();
		$data['laporan']= $this->KesgaModel->getLastLaporan();
		$this->load->view('header');
		$this->load->view('laporanKesga',$data);
	}

	public function filter(){
		$data['daftarBulan'] = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober", "Desember");
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('laporanKesga',$data);

	}
	public function addLaporan()
	{
		$this->load->model('KesgaModel');
		$data['kategori']=$this->KesgaModel->getKategoriKesga();
		$data['field']=$this->KesgaModel->getFieldKesga();
		$this->load->view('header');
		$this->load->view('form_component',$data);
	}

	public function editLaporan(){
		$data['bulan']=$this->input->post('bulan');
		$data['tahun']=$this->input->post('tahun');
		$data['puskesmas']=$this->input->post('puskesmas');
		$data['kategori']= $this->KesgaModel->getFilterKategori();
		$data['laporan']= $this->KesgaModel->getFilterLaporan();
		$this->load->view('header');
		$this->load->view('editKesga',$data);
	}

	public function saveEditLaporan(){
		$this->KesgaModel->editLap();
		redirect('LaporanKesga','refresh');
	}

	 public function editFieldLaporan()
    {
    $sess_array = array(
					'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun')
					);
				$this->session->set_userdata('editFormat', $sess_array);	
   $this->load->view('header');
       $this->load->view('editKesgaGrid');
  }
    public function updateLaporan(){

        $id = $this->input->post('idStudio'); 
        $this->KesgaModel->update($id);
    }

    public function getGridLaporan()
    {
        $result = $this->KesgaModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function addBioskop(){
        $this->load->model('BioskopModel');
        $this->BioskopModel->save();
    }

    public function deleteBioskop()
    {
        $this->load->model('BioskopModel');
        $id = $this->input->post('idBioskop'); 
        $this->BioskopModel->delete($id);
    }

	
}