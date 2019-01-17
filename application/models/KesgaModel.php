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
        $this->db->select('*');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.')',false);
        $query= $this->db->get();
          if($query->num_rows()>0){
            return $query->result();
        }else{
         
          $this->db->select('*');
        $this->db->from('formatfield');
        $this->db->join('formatkategori', 'formatkategori.idKategori = formatfield.idKategori');
        $this->db->where('formatkategori.jenisLaporan', 'KESGA');
        $query2= $this->db->get();
          return $query2->result();
        }

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
    $this->db->distinct();
   $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
     $this->db->select('namaKategori');
     $this->db->distinct();
        $this->db->from('laporan');
        $this->db->join('detaillaporan', 'detaillaporan.idDetailLaporan = laporan.kodeLaporan');
        $this->db->where('laporan.bulan', $bulan);
          $this->db->where('laporan.jenisLaporan', "KESGA");
         $this->db->where('laporan.tahun', $tahun);
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