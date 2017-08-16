<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_model {

	public function get_login($user,$passwd){
		$uname=$user;
		$pass=md5($passwd);
		$this->db->where('username',$uname);
		$this->db->where('passwd',$pass);
		$query = $this->db->get('users');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) {
				$sess = array('username' => $row->username, 
							  'avatar' => $row->avatar,
							  'status' => $row->status,
							  'passwd' => $row->passwd,
							  'admin' => $row->admin);
				$this->session->set_userdata($sess);
				if($row->admin == 1){
					redirect('admin');
				}else{
					$this->get_realname($row->username);
					redirect('guest');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('error','username or password is wrong');
			redirect(base_url());
		}
	}
	private function get_realname($id){
		$this->db->where('nim',$id);
		$q_name = $this->db->get('mhs');
		foreach ($q_name->result() as $rows) {
			$sess_realname = array('nim' => $rows->nim, 
						  'fullname' => $rows->fullname,
						  'program' => $rows->program,
						  'address' => $rows->address,
						  'telp' => $rows->telp,
						  'email' => $rows->email,
						  'komp' => $rows->komp);
			$this->session->set_userdata($sess_realname);
		}
	}
}