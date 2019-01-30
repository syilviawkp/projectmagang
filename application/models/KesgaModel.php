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
        
        $this->db->select('*');
        $this->db->distinct();
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');

  
        $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan WHERE jenisLaporan = "KESGA" ORDER by kodeLaporan DESC LIMIT 1)',false);
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
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.' and jenisLaporan="KESGA")',false);
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
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.' and jenisLaporan="KESGA")',false);
        $query= $this->db->get();
          if($query->num_rows()>0){
            foreach ($query->result() as $key) {
             $field = $key->idLaporan;
           }
         }
        //$field = $this->input->post('idLaporan');
       $data = array('idLaporan' => $field, 'namaField'=> $this->input->post('namaField'),'namaKategori' => $this->input->post('namaKategori') );
        $this->db->insert('detaillaporan', $data);

        
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
    public function getListPuskesmas(){
    $query2 = $this->db->query("SELECT * from laporan WHERE jenisLaporan ='KESGA' ORDER by kodeLaporan  DESC LIMIT 1
"); $bulan = "Januari";
   $tahun = "2019";
       foreach ($query2->result() as $key) {
        $bulan = $key->bulan;
        $tahun = $key->tahun;
      }
 

      if($bulan=="Januari"){
        $bln= "01";
      }else if($bulan=="Februari"){
        $bln= "02";
      }else if($bulan=="Maret"){
        $bln= "03";
      }else if($bulan=="April"){
        $bln= "04";
      }else if($bulan=="Mei"){
        $bln= "05";
      }else if($bulan=="Juni"){
        $bln= "06";
      }else if($bulan=="Juli"){
        $bln= "07";
      }else if($bulan=="Agustus"){
        $bln= "08";
      }else if($bulan=="September"){
        $bln= "09";
      }else if($bulan=="Oktober"){
        $bln= 10;
      }else if($bulan=="November"){
        $bln= 11;
      }else{
        $bln= 12;
      }

      $date = $tahun."-".$bln."-01";
      $query= $this->db->query('SELECT * FROM puskesmas WHERE (tgl_aktif <= "'.$date.'" and tgl_nonaktif = "0000-00-00") or (tgl_aktif <= "'.$date.'" and tgl_nonaktif >= "'.$date.'")');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getFilterPuskesmas(){
      $bulan= $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
if($bulan=="Januari"){
        $bln= "01";
      }else if($bulan=="Februari"){
        $bln= "02";
      }else if($bulan=="Maret"){
        $bln= "03";
      }else if($bulan=="April"){
        $bln= "04";
      }else if($bulan=="Mei"){
        $bln= "05";
      }else if($bulan=="Juni"){
        $bln= "06";
      }else if($bulan=="Juli"){
        $bln= "07";
      }else if($bulan=="Agustus"){
        $bln= "08";
      }else if($bulan=="September"){
        $bln= "09";
      }else if($bulan=="Oktober"){
        $bln= 10;
      }else if($bulan=="November"){
        $bln= 11;
      }else{
        $bln= 12;
      }
      
       $date = $tahun."-".$bln."-01";
      $query= $this->db->query('SELECT * FROM puskesmas WHERE (tgl_aktif <= "'.$date.'" and tgl_nonaktif = "0000-00-00") or (tgl_aktif <= "'.$date.'" and tgl_nonaktif >= "'.$date.'")');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getPuskesmasAktif(){
      $this->db->select('*');
      $this->db->from('puskesmas');
      $this->db->where('status', "AKTIF");
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
      $query = $this->db->query("select distinct namaField, terima, susulan from detaillaporan join laporan on laporan.kodeLaporan = detaillaporan.idLaporan where laporan.bulan = '$bulan' AND laporan.tahun= $tahun ");
      
      foreach ($query->result() as $key) {
        $field = $key->namaField;
      
        $field2= str_replace(' ', '', $field);
        $field2=str_replace('.', '',$field2);

        $terima = $key->terima;
        $susulan = $key->susulan;
        $msk = "msk".$field2;
        $ssln = "ssl".$field2;
     $susulan9=$susulan;
        $terima9=$terima;
    
        $stt=false;
        if($this->input->post($msk) != ""){


          $terima0=explode("[", $terima);
           if(empty($terima0[1])){
                   $terima9 = "[$puskesmas:".$this->input->post($msk)."]";
                }else{
                  foreach($terima0 as $terima2){
                      $terima3= explode(":", $terima2);
                      if($terima3[0]==$puskesmas){
                        $terima9=str_replace("[$puskesmas:".$terima3[1],"[$puskesmas:".$this->input->post($msk)."]" ,$terima);
                        $stt=true;
                      }
                  }
                  if($stt==false){
                    $terima9=$terima."[$puskesmas:".$this->input->post($msk)."]";
                  }
                }
        
      }else{
         $terima0=explode("[", $terima);
           if(empty($terima0[1])){
                   $terima9 = "";
                }else{
                  foreach($terima0 as $terima2){
                      $terima3= explode(":", $terima2);
                      if($terima3[0]==$puskesmas){
                        $terima9=str_replace("[$puskesmas:".$terima3[1],"" ,$terima);
                        $status=true;
                      }
                  }
                  if($status==false){
                    $terima9=$terima."[$puskesmas:".$this->input->post($ssln)."]";
                  }
                }
      }
      $status=false;
        if($this->input->post($ssln) != ""){

           $susulan0=explode("[", $susulan);
           if(empty($susulan0[1])){
                   $susulan9 = "[$puskesmas:".$this->input->post($ssln)."]";
                }else{
                  foreach($susulan0 as $susulan2){
                      $susulan3= explode(":", $susulan2);
                      if($susulan3[0]==$puskesmas){
                        $susulan9=str_replace("[$puskesmas:".$susulan3[1],"[$puskesmas:".$this->input->post($ssln)."]" ,$susulan);
                        $status=true;
                      }
                  }
                  if($status==false){
                    $susulan9=$susulan."[$puskesmas:".$this->input->post($ssln)."]";
                  }
                }
                  
       
        
      }else{
         $susulan0=explode("[", $susulan);
           if(empty($susulan0[1])){
                   $susulan9 = "";
                }else{
                  foreach($susulan0 as $susulan2){
                      $susulan3= explode(":", $susulan2);
                      if($susulan3[0]==$puskesmas){
                        $susulan9=str_replace("[$puskesmas:".$susulan3[1],"" ,$susulan);
                        $status=true;
                      }
                  }
                  if($status==false){
                    $susulan9=$susulan."[$puskesmas:".$this->input->post($ssln)."]";
                  }
                }
      }


        $isi= $this->input->post($field2);
        $this->db->set($puskesmas, $isi);
        $this->db->set('terima', $terima9);
        $this->db->set('susulan', $susulan9);
        $this->db->where('namaField', $field );
        $this->db->where('idLaporan', $idLaporan);
        $this->db->update('detaillaporan');
      }
     //die();
  }
 public function cekLaporanKosong(){
    $bulan=$this->input->post('bulan');
    $tahun=$this->input->post('tahun');
    $this->db->select('*');
        $this->db->from('detaillaporan');
        $this->db->join('laporan', 'laporan.kodeLaporan = detaillaporan.idLaporan');
        $this->db->where('idLaporan', '(select kodeLaporan from laporan where bulan = "'. $bulan.'" and tahun = '.$tahun.' and jenisLaporan= "KESGA")',false);
        $query= $this->db->get();
          if($query->num_rows()==0){
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

  }
 public function ceksms(){
    $today = date('Y-m-d');
    $this->db->where('tanggal', $today);
    $query=$this->db->get('hitungsms');
    if($query->num_rows()==0){
      $data = array('tanggal' => $today, 'jumlahsms'=> "1");
        $this->db->insert('hitungsms', $data);
        echo '<script>alert("sisa sms yang Anda miliki sebanyak 9")</script>';
    }else{
      foreach ($query->result() as $key) {
             $jumlahsms = $key->jumlahsms;
           }
           if($jumlahsms<10){
            $jumlahsms2 = $jumlahsms+1;
           $this->db->set('jumlahsms', $jumlahsms2);
           $this->db->where('tanggal', $today);
      
          $this->db->update('hitungsms');

          $jumlahsms3=9-$jumlahsms;
           echo '<script>alert("sisa sms yang Anda miliki sebanyak '.$jumlahsms3.'")</script>'; 
         }
         else{
           echo '<script>alert("Data anda telah tersimpan namun sisa sms yang Anda miliki telah habis, silahkan mencoba mengirim kembali di hari selanjutnya")</script>'; 
         }
    }
  }
  
}