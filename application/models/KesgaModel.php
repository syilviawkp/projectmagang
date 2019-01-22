<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class KesgaModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   
  
    public function getKategoriKesga()
    {
        $this->db->where('jenisLaporan', "KESGA");
        $query = $this->db->get('formatkategori');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getLastLaporan(){
         $this->db->distinct();
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');

        $this->db->where('laporan.jenisLaporan', "KESGA");
        $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan ORDER by kodeLaporan DESC LIMIT 1)',false);
         $query = $this->db->get();
            return $query->result();
    }

    public function getGridLaporan(){
        $bulan = $this->session->userdata('editFormat')['bulan'];
        $tahun = $this->session->userdata('editFormat')['tahun'];
        $this->db->select('idDetailLaporan,idLaporan, detaillaporan.namaField, detaillaporan.namaKategori, jenisLaporan, idField');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');

        $this->db->join('formatfield', 'formatfield.namaField = detaillaporan.namaField');
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.')',false);
        $query= $this->db->get();
          if($query->num_rows()>0){
              
            return $query->result();
        }

    }
   

    public function addLaporan(){
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
       $data = array('idLaporan' => $field, 'namaField'=> $this->input->post('namaField'),'namaKategori' => $this->input->post('namaKategori') );
        $this->db->insert('detaillaporan', $data);

        }
        $this->db->where('namaKategori', $this->input->post('namaKategori'));
        $this->db->where('jenisLaporan', "KESGA");
        $kategori = $this->db->get('formatkategori');
        foreach ($kategori->result() as $key) {
            $idKategori = $key->idKategori;          
        }

        $data2 = array('idKategori' => $idKategori, 'namaField' => $this->input->post('namaField'));
        $this->db->insert('formatfield', $data2);
    }

    public function update($id, $idField){
        $this->db->where('idDetailLaporan', $id);
          $object = array('namaField' => $this->input->post('namaField'),'namaKategori'=>$this->input->post('namaKategori') );
        $this->db->update('detaillaporan', $object);


           $query = $this->db->query('SELECT * FROM formatkategori WHERE jenisLaporan= "KESGA" ');
            foreach ($query->result() as $key) {
              if($key->namaKategori == $this->input->post('namaKategori')){
                $idkat = $key->idKategori;
              }
            }

           $this->db->where('idField', $idField);
          $object2 = array('namaField' => $this->input->post('namaField'),'idKategori'=>$idkat );
        $this->db->update('formatfield', $object2);

    }
    public function delete($id, $idfield){
      $this->db->where('idDetailLaporan', $id);
      $this->db->delete('detaillaporan');

    $this->db->where('idField', $idfield);
    $this->db->delete('formatfield');
    }
public function getLastKategori(){
    $this->db->distinct();
    $this->db->select('namaKategori');
    $this->db->distinct();
    $this->db->from('detaillaporan');
     $query = $this->db->get();
    return $query->result();
}
public function getFilterKategori(){
   
   $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
    
   
      $this->db->select('namaKategori');
        $this->db->distinct();
        $this->db->from('detaillaporan');

        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.' AND jenisLaporan = "KESGA")',false);
       
       
     $query = $this->db->get();
            return $query->result();
}
    public function getFieldKesga(){
          $this->db->distinct();
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('formatfield');
        $this->db->join('formatkategori', 'formatfield.idKategori = formatkategori.idKategori', 'left');
        $this->db->where('formatkategori.jenisLaporan', "KESGA");
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getFilterLaporan(){
      
        $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
     $this->db->select('*');
     $this->db->distinct();
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('laporan.jenisLaporan', "KESGA");
        $this->db->where('laporan.bulan', $bulan);
         $this->db->where('laporan.tahun', $tahun);
         $query = $this->db->get();
            return $query->result();
 
    }
    public function editLap(){
      $bulan = $this->input->post('bulan');
      $tahun = $this->input->post('tahun');
      $idLaporan = $this->input->post('idLaporan');
      $puskesmas = $this->input->post('puskesmas');
      $query = $this->db->query("select distinct namaField from detaillaporan join laporan on laporan.kodeLaporan = detaillaporan.idLaporan where laporan.bulan = '$bulan' AND laporan.tahun= $tahun ");
      

      foreach ($query->result() as $key) {
        $field = $key->namaField;
        $field2= str_replace(' ', '', $field);
        $field2=str_replace('.', '',$field2);
        $isi= $this->input->post($field2);
        $this->db->set($puskesmas, $isi);
        $this->db->where('namaField', $field );
        $this->db->where('idLaporan', $idLaporan);
        $this->db->update('detaillaporan');
      }
  }
}