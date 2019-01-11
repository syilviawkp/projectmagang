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

    

  }