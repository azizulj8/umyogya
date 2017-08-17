<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essay_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function get_data($key){
		$this->db->where('id',$key);
		$scholar=$this->db->get('essay');
		return $scholar;

	}

	public function get_by_nim($key){
		$this->db->where('nim',$key);
		$scholar=$this->db->get('essay');
		return $scholar;
	}


	public function get_today(){
		$date=date('Y-m-d');
		// $this->db->where('created');
		// $scholar=$this->db->get('essay');
		$sql="SELECT * FROM essay WHERE date(create_date)='$date'";
        return $this->db->query($sql);
		// return $query;
	}

	public function get_total(){
		$scholar=$this->db->get('essay');
		return $scholar;
	}

	public function get_period(){
		$this->db->where('nim');
		$scholar=$this->db->get('essay');
		return $scholar;
	}

	public function update_essay($key,$data){
		$this->db->where('id',$key);
		$this->db->set($data);
		$this->db->update($this->db->dbprefix .'essay');
	}

	public function getinsert($data){
		$this->db->set($data);
		$this->db->insert($this->db->dbprefix .'essay');
	}

	public function delete($key){
		$this->db->where('id',$key);
		$this->db->delete('essay');
	}
}