<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholar_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function get_data($key){
		$this->db->where('nim',$key);
		$scholar=$this->db->get('mhs');
		return $scholar;

	}

	public function update_scholar($key,$data){
		$this->db->where('nim',$key);
		$this->db->set($data);
		$this->db->update($this->db->dbprefix .'mhs');
	}

	public function getinsert($data){
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix .'mhs');
	}
}