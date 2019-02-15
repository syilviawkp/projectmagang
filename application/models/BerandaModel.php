<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaModel extends CI_Model {
   
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function jumlahuser(){
    	$this->db->select('count(*) as jumlahuser');
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    function jumlahpuskesmas(){
    	$this->db->select('count(*) as jumlahpuskesmas');
        $query = $this->db->get('puskesmas');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    function jumlahsms(){
    	$today = date('Y-m-d');
    	$this->db->where('tanggal', $today);

    	$query=$this->db->get('hitungsms');
    		if($query->num_rows()==0){
      		$jumlah = 10;
    		}else{
      			foreach ($query->result() as $key) {
             $jumlahsms = $key->jumlahsms;
           		}
           		$jumlah= 10-$jumlahsms;
    		}
    		return $jumlah;
	}

	function lastLaporanYankes(){
		
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('jenisLaporan', "YANKES");
		$this->db->order_by('kodeLaporan', 'desc');
		$this->db->limit(1);
		$query=$this->db->get();
            return $query->result();

	}
	function lastLaporanKesga(){
		
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('jenisLaporan', "KESGA");
		$this->db->order_by('kodeLaporan', 'desc');
		$this->db->limit(1);
		$query=$this->db->get();
            return $query->result();

	}
	function lastLaporanP2pl(){
		
		$this->db->select('*');
		$this->db->from('laporan');
		$this->db->where('jenisLaporan', "P2PL");
		$this->db->order_by('kodeLaporan', 'desc');
		$this->db->limit(1);
		$query=$this->db->get();
            return $query->result();

	}
	function listPuskesmas(){
		$query=$this->db->get('puskesmas');
		return $query->result();
	}

	function ceksudahYankes(){
		$query= $this->db->get('puskesmas');
		$object = [];
		$jumlah=0;
		foreach ($query->result() as $key) {
			$nama= $key->namaPuskes;
			$query2=$this->db->query('SELECT COUNT(*) as '.$nama.' FROM detaillaporan JOIN laporan on detaillaporan.idLaporan = laporan.kodeLaporan WHERE '.$nama.'="SUDAH" AND detaillaporan.idLaporan = (SELECT kodeLaporan FROM laporan where jenisLaporan="YANKES" ORDER by kodeLaporan DESC LIMIT 1 )');
				
				foreach ($query2->result() as $row) {
					$jumlah = $row->$nama;
				}

             $object += ["$nama" => $jumlah] ;

	}

	return $object;
	}

	function ceksudahP2pl(){
		$query= $this->db->get('puskesmas');
		$object = [];
		$jumlah=0;
		foreach ($query->result() as $key) {
			$nama= $key->namaPuskes;
			$query2=$this->db->query('SELECT COUNT(*) as '.$nama.' FROM detaillaporan JOIN laporan on detaillaporan.idLaporan = laporan.kodeLaporan WHERE '.$nama.'="SUDAH" AND detaillaporan.idLaporan = (SELECT kodeLaporan FROM laporan where jenisLaporan="P2PL" ORDER by kodeLaporan DESC LIMIT 1 )');
				
				foreach ($query2->result() as $row) {
					$jumlah = $row->$nama;
				}

             $object += ["$nama" => $jumlah] ;

	}

	return $object;
	}

	function ceksudahKesga(){
		$query= $this->db->get('puskesmas');
		$object = [];
		$jumlah=0;
		foreach ($query->result() as $key) {
			$nama= $key->namaPuskes;
			$query2=$this->db->query('SELECT COUNT(*) as '.$nama.' FROM detaillaporan JOIN laporan on detaillaporan.idLaporan = laporan.kodeLaporan WHERE '.$nama.'="SUDAH" AND detaillaporan.idLaporan = (SELECT kodeLaporan FROM laporan where jenisLaporan="KESGA" ORDER by kodeLaporan DESC LIMIT 1 )');
				
				foreach ($query2->result() as $row) {
					$jumlah = $row->$nama;
				}

             $object += ["$nama" => $jumlah] ;

	}

	return $object;
	}

	function jumlahYankes(){
		$this->db->select('COUNT(*) as jumlah');
		$this->db->from('detaillaporan');
	 $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan WHERE jenisLaporan = "YANKES" ORDER by kodeLaporan DESC LIMIT 1)',false);
		$query= $this->db->get('');
		$jumlah=0;
		foreach ($query->result() as $row) {
					$jumlah = $row->jumlah;
				}
		return $jumlah;
	}

	function jumlahKesga(){
		$this->db->select('COUNT(*) as jumlah');
		$this->db->from('detaillaporan');
	 $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan WHERE jenisLaporan = "KESGA" ORDER by kodeLaporan DESC LIMIT 1)',false);
		$query= $this->db->get('');
		$jumlah=0;
		foreach ($query->result() as $row) {
					$jumlah = $row->jumlah;
				}
		return $jumlah;
	}

	function jumlahP2pl(){
		$this->db->select('COUNT(*) as jumlah');
		$this->db->from('detaillaporan');
	 $this->db->where('detaillaporan.idLaporan', '(SELECT kodeLaporan from laporan WHERE jenisLaporan = "P2PL" ORDER by kodeLaporan DESC LIMIT 1)',false);
		$query= $this->db->get('');
		$jumlah=0;
		foreach ($query->result() as $row) {
					$jumlah = $row->jumlah;
				}
		return $jumlah;
	}

}
