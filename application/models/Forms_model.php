<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function get_data($key){
		$this->db->where('id',$key);
		$scholar=$this->db->get('bujsform');
		return $scholar;

	}

	public function update_bujsform($key,$data){
		$this->db->where('id',$key);
		$this->db->set($data);
		$this->db->update($this->db->dbprefix .'bujsform');
	}

	public function getinsert($data){
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix .'bujsform');
	}
}