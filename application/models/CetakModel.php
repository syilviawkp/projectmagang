<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakModel extends CI_Model {

public function view(){
		$this->db->select("namaField, namaKategori, Batu, Junrejo, Beji, Sisir, Bumiaji, terima, susulan");
		$query=$this->db->get('detaillaporan');
		return $query->result();
	}

	public function view_row(){
		$this->db->select("namaField, namaKategori, Batu, Junrejo, Beji, Sisir, Bumiaji, terima, susulan");
		$query = $this->db->get('detaillaporan');
		return $query->result();
	}
	

}

/* End of file cetakModel.php */
/* Location: ./application/models/cetakModel.php */