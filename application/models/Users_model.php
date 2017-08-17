<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function get_data($key){
		$this->db->where('username',$key);
		$users=$this->db->get('users');
		return $users;

	}

	public function update_users($key,$data){
		$this->db->where('username',$key);
		$this->db->set($data);
		$this->db->update($this->db->dbprefix .'users');
	}

	public function getinsert($data){
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix .'users');
	}

	public function delete($key){
		$this->db->where('username',$key);
		$this->db->delete('users');
	}
}