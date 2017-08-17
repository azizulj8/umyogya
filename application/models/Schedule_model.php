<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function get_data($key){
		$this->db->where('id',$key);
		$scholar=$this->db->get('schedules');
		return $scholar;

	}

	public function update_schedules($key,$data){
		$this->db->where('id',$key);
		$this->db->set($data);
		$this->db->update($this->db->dbprefix .'schedules');
	}

	public function getinsert($data){
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix .'schedules');
	}

	public function delete($key){
		$this->db->where('id',$key);
		$this->db->delete('schedules');
	}
}