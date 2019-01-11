<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class YankesModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

   
  
    public function getKategoriYANKES()
    {
        $this->db->where('jenisLaporan', "YANKES");
        $query = $this->db->get('formatkategori');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getLastLaporan(){
       
        $this->db->select('*');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('laporan.jenisLaporan', "YANKES");
        $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan ORDER by kodeLaporan DESC LIMIT 1)',false);
         $query = $this->db->get();
            return $query->result();
    }

public function getFilterKategori(){
    $this->db->distinct();
   $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
     $this->db->select('namaKategori');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('laporan.jenisLaporan', "YANKES");
        $this->db->where('laporan.bulan', $bulan);
         $this->db->where('laporan.tahun', $tahun);
     $query = $this->db->get();
            return $query->result();
}
    public function getFieldYankes(){
        $this->db->select('*');
        $this->db->from('formatfield');
        $this->db->join('formatkategori', 'formatfield.idKategori = formatkategori.idKategori', 'left');
        $this->db->where('formatkategori.jenisLaporan', "YANKES");
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getFilterLaporan(){
        $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
     $this->db->select('*');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('laporan.jenisLaporan', "YANKES");
        $this->db->where('laporan.bulan', $bulan);
         $this->db->where('laporan.tahun', $tahun);
         $query = $this->db->get();
            return $query->result();
 
    }

  }