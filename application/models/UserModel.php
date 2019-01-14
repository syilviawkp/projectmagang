<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        // $this->load->database();
    }

    public function login($username, $password)
    {
        $this->db->select('idUser, username, password');
        $this->db->from('user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if($query->num_rows() == 1)
        {
            return $query->result();
        }

        else
        {
            return false;
        }
    }

    public function readUser(){
        $query=$this->db->get('user');
        return $query->result();
    }

    public function getUserQueryObject(){
        $query=$this->db->query('SELECT * FROM user');
        return $query->result();
    }

    public function getUser(){
        //fungsi ini untuk menampilkan data sesuai data yang kita pilih dengan
        //code di atas sama seperti SELECT*FROM user WHERE No='$id'

            $a=$this->session->userdata('logged_in');
            $this->db->where('idUser', $a['idUser']);
            $query = $this->db->get('user');
            return $query->result();
            //return $query->row();
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
    
  }
?>
