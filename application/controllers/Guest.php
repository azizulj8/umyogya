<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
    }

	public function index()
	{
		// $this->Security_model->getsecurity();
		$data['content']='Guest/search';
		$data['head_bread']='Home';		
		$data['breadcrum']='Dashboard';
		$data['link']='guest';
		if(!empty($this->session->userdata('username'))){
			$data['add_head']='h_essay';
			$data['add_js']='js_essay';
		}else{
			$data['add_head']='h_guest';
			$data['add_js']='js_guest';
		}
		$data['dt_essay']=$this->db->get('essay');
		$this->load->view('Guest/dashboard',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}


	public function submit_essay()
	{
		$this->Security_model->getsecurity();
		$data['content']='Guest/essay';
		$data['head_bread']='Home';
		$data['breadcrum']='Submit Essay';
		$data['link']='submit_essay';
		$data['add_head']='h_essay';
		$data['add_js']='js_essay';
		// $data['dt_essay']=$this->db->get('essay');
		$this->load->view('Guest/dashboard',$data);
	}

	// public function user_admin(){
	// 	$this->Security_model->getsecurity();
	// 	$data['content']='Admin/users';
	// 	$data['head_bread']='Home';
	// 	$data['breadcrum']='User List';
	// 	$data['link']='users';
	// 	$data['add_head']='h_scholar';
	// 	$data['add_js']='js_scholar';
	// 	$data['dt_user']=$this->db->get('users');
	// 	$this->load->view('Admin/dashboard',$data);
	// }

	// public function add_user(){
	// 	$this->Security_model->getsecurity();
	// 	$data['content']='Admin/add_users';
	// 	$data['head_bread']='Home';
	// 	$data['breadcrum']='Add New User';
	// 	$data['link']='users';
	// 	$data['add_head']='ha_scholar';
	// 	$data['add_js']='jsa_scholar';
	// 	$this->load->view('Admin/dashboard',$data);
	// }

	// public function save_add(){
	// 	$this->Security_model->getsecurity();
	// 	$key=$this->input->post('username');
	// 	$data=array(
	// 		'username' => $this->input->post('username'),
	// 		'passwd' => md5($this->input->post('password')),
	// 		'admin' => '1',
	// 		'status' => $this->input->post('status')
	// 		);
	// 	$query = $this->Users_model->get_data($key);
	// 	// $query = $this->db->get('mhs');
	// 	if ($query->num_rows()>0) {
	// 		$this->Users_model->update_users($key,$data);
	// 	}else{
	// 		$this->Users_model->getinsert($data);
	// 	}
	// 	redirect('users');
	// }
}
