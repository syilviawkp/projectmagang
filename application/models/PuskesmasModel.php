<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PuskesmasModel extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
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
        $this->db->where('idPuskesmas', $idPuskesmas);
        $this->db->delete('puskesmas');
    }

    

  }