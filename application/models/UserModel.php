<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
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

    public function insertUser(){ 
    $object = array(
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
        'nama'=>$this->input->post('nama'), 
        'noHp'=>$this->input->post('noHp'),
        'idPuskesmas'=>$this->input->post('idPuskesmas'),
        'level'=>$this->input->post('level'),
        'jabatan'=>$this->input->post('jabatan')
     ); 
        $this->db->insert('user',$object); 
    }

    public function readUser(){
        $query=$this->db->get('user');
        return $query->result();
    }

    public function getUserQueryObject(){
        $query=$this->db->query('SELECT * FROM user');
        return $query->result();
    }

    public function getUser($idUser){
        //fungsi ini untuk menampilkan data sesuai data yang kita pilih dengan
        //code di atas sama seperti SELECT*FROM user WHERE No='$id'
            $this->db->where('idUser', $idUser);
            $query = $this->db->get('user');
            return $query->result();
    }

    public function UpdateById(){
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'nama' => $this->input->post('nama'),
            'noHp' => $this->input->post('noHp'),
            'idPuskesmas' => $this->input->post('idPuskesmas'), 
            'level' => $this->input->post('level'),
            'jabatan' => $this->input->post('jabatan')
        );

        $idUser = $this->input->post('idUser');
        $this->db->where('idUser', $idUser);
        $this->db->update('user', $data);
    }

    public function delete($idUser){
        $this->db->where('idUser', $idUser);
        $this->db->delete('user');
    }

    public function getCurrentUser(){
        $a=$this->session->userdata('logged_in');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id', $a['id']);
        $query=$this->db->get();
        return $query->result();
    }


  }
?>
