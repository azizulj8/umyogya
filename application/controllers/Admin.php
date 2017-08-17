<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
    }

	public function index()
	{
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		
		$data['dashboard']="active";
		$data['masters']="";
		$data['setting']="";
		$data['content']='Admin/content';
		$data['head_bread']='Home';		
		$data['breadcrum']='Dashboard';
		$data['link']='admin';
		$data['add_head']='h_dash';
		$data['add_js']='js_dash';
		$this->load->view('Admin/dashboard',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	public function user_admin(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']="";
		$data['setting']='class="active"';
		$data['content']='Admin/users';
		$data['head_bread']='Setting';
		$data['breadcrum']='User List';
		$data['link']='users';
		$data['add_head']='h_scholar';
		$data['add_js']='js_scholar';
		$data['dt_user']=$this->db->get('users');
		$this->load->view('Admin/dashboard',$data);
	}

	public function add_user(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']="";
		$data['setting']='class="active"';
		$data['content']='Admin/add_users';
		$data['head_bread']='Setting';
		$data['breadcrum']='Add New User';
		$data['link']='users';
		$data['add_head']='ha_scholar';
		$data['add_js']='jsa_scholar';
		$this->load->view('Admin/dashboard',$data);
	}

	public function edit_user(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']="";
		$data['setting']='class="active"';
		$data['content']='Admin/edit_users';
		$data['head_bread']='Setting';
		$data['breadcrum']='Edit User';
		$data['link']='users';
		$data['add_head']='ha_scholar';
		$data['add_js']='jsa_scholar';
		$key =$this->uri->segment(2);
		// echo $key;
		$this->db->where('username',$key);
		$query=$this->db->get('users');
		if($query->num_rows()>0){	
			// echo $key;
			foreach ($query->result() as $row) {
				$data['username'] = $row->username;
				$data['status'] = $row->status;
				$data['admin'] = $row->admin;
			}
		}
		$this->load->view('Admin/dashboard',$data);
	}

	public function save_add(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$key=$this->input->post('username');
		$data=array(
			'username' => $this->input->post('username'),
			'passwd' => md5($this->input->post('passwd')),
			'admin' => $this->input->post('admin'),
			'status' => $this->input->post('status')
			);
		$query = $this->Users_model->get_data($key);
		// $query = $this->db->get('mhs');
		if ($query->num_rows()>0) {
			if(empty($this->input->post('passwd'))){
				$data=array(
				'username' => $this->input->post('username'),
				'admin' => $this->input->post('admin'),
				'status' => $this->input->post('status')
				);
			}
			$this->Users_model->update_users($key,$data);
		}else{
			$this->Users_model->getinsert($data);
		}
		redirect('users');
	}

	public function del(){
		$this->Security_model->getsecurity();
		$key=$this->uri->segment(2);
		$this->db->where('username',$key);
		$query=$this->db->get('users');
		if ($query->num_rows()>0) {
			$this->Users_model->delete($key);
		}
		redirect('users');
	}
}
