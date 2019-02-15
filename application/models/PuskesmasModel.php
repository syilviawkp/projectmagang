<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PuskesmasModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic heres
    }

    public function getAllPuskesmas()
    {
       
        $query = $this->db->get('puskesmas');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function getDataPuskesmas()
    {
        $query=$this->db->query('Select * from puskesmas');
        return $query->result();
    }


    public function delete($idPuskesmas){
       // $this->db->where('idPuskesmas', $idPuskesmas);
        //$this->db->delete('puskesmas');
        $today = date('Y-m-01');
      
    $object = array(
       
        'status'=> "NONAKTIF",
        'tgl_nonaktif' =>$today
     ); 
    $this->db->where('idPuskesmas', $idPuskesmas);
    $this->db->update('puskesmas',$object); 
    }

    public function insertPuskesmas(){
    $name =  $this->input->post('namaPuskes');
        $today = date('Y-m-01');
      
    $object = array(
        'namaPuskes'=>$this->input->post('namaPuskes'),
        'alamatPuskes'=>$this->input->post('alamatPuskes'),
        'status'=>"AKTIF",
        'tgl_aktif' =>$today
     ); 
        $this->db->insert('puskesmas',$object); 
         $this->db->query("ALTER TABLE detailLaporan ADD COLUMN $name varchar(100)");
    }

    public function UpdateById(){
        $idPuskesmas = $this->input->post('idPuskesmas');
        $nama2 = $this->input->post('namaPuskes');
        $this->db->select('namaPuskes');
        $this->db->where('idPuskesmas', $idPuskesmas);
        $this->db->from('puskesmas');
        $query= $this->db->get();
        if($query->num_rows()>0){
            foreach ($query->result() as $key) {
             $nama = $key->namaPuskes;
           }
       }
        $this->db->query("ALTER TABLE detailLaporan CHANGE $nama $nama2 varchar(100)");
        $data = array(
            'idPuskesmas' => $this->input->post('idPuskesmas'),
            'namaPuskes' => $this->input->post('namaPuskes'),
            'alamatPuskes' => $this->input->post('alamatPuskes')
        );

        
        $this->db->where('idPuskesmas', $idPuskesmas);
        $this->db->update('puskesmas', $data);
    }
    
    

  }