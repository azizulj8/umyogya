<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security_model extends CI_model {

    public function __construct()
    {
         parent::__construct();
    }

	public function getsecurity(){
		$username=$this->session->userdata('username');
		if(empty($username)){
			$this->session->sess_destroy();
			redirect('login');
		}
	}

	public function is_admin(){
		$admin=$this->session->userdata('admin');
		if(empty($admin)){
			// $this->session->sess_destroy();
			redirect('guest');
		}
	}
}