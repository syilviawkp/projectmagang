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
		$this->KesgaModel->addLaporan();
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


	    $bulan = $this->session->userdata('editFormat')['bulan'];
        $tahun = $this->session->userdata('editFormat')['tahun'];
        $this->db->select('*');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.')',false);
        $query= $this->db->get();
          if($query->num_rows()>0){
                foreach ($query->result() as $key) {
                    $field = $key->idLaporan;
                  }
           
                $sess_array = array('idLaporan'=>$field,'bulan'=>$this->input->post('bulan'),
					'tahun'=>$this->input->post('tahun'));
                $this->session->set_userdata('editFormat', $sess_array);  
           
        }else{
        $object = array('jenisLaporan'=>"KESGA", 'bulan'=>$bulan, 'tahun'=>$tahun);
        $this->db->insert('laporan', $object);

 
       $kode =  $this->db->query('SELECT  kodeLaporan FROM laporan where bulan= "'. $bulan .'" and tahun='. $tahun);
        foreach ($kode->result() as $key) {
           $kodeLaporan= $key->kodeLaporan;
         }

        $query2= $this->db->query("SELECT * from formatfield join formatkategori on formatkategori.idKategori = formatfield.idKategori where formatkategori.jenisLaporan = 'KESGA'");
          foreach ($query2->result() as $key ) {
           $object =  array('idLaporan' => $kodeLaporan, 'namaField'=> $key->namaField, 'namaKategori'=> $key->namaKategori );
            $this->db->insert('detaillaporan', $object);
         }
        }	
   $this->load->view('header');
       $this->load->view('editKesgaGrid');
  }
    public function updateLaporan(){

        $id = $this->input->post('idDetailLaporan'); 
        $this->KesgaModel->update($id);
    }
    public function deleteLaporan(){

        $id = $this->input->post('idDetailLaporan'); 
        $this->KesgaModel->delete($id);
    }

    public function getGridLaporan()
    {
        $result = $this->KesgaModel->getGridLaporan(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }

	
}