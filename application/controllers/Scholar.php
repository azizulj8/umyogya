<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholar extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
    }

	public function index()
	{
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']='class="active"';
		$data['setting']="";
		$data['content']='Admin/scholars';
		$data['head_bread']='Master';
		$data['breadcrum']='Scholars';
		$data['link']='scholar';
		$data['add_head']='h_scholar';
		$data['add_js']='js_scholar';
		$data['dt_scholar']=$this->db->get('mhs');
		$this->load->view('Admin/dashboard',$data);
	}

	public function add_new_scholar(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']='class="active"';
		$data['setting']="";
		$data['content']='Admin/add_scholar';
		$data['head_bread']='Master';
		$data['breadcrum']='Scholars';
		$data['link']='scholars';
		$data['add_head']='ha_scholar';
		$data['add_js']='jsa_scholar';
		$this->load->view('Admin/dashboard',$data);
	}

	public function save_add(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$key=$this->input->post('nim');
		$data=array(
			'nim' => $this->input->post('nim'),
			'fullname' => $this->input->post('name'),
			'sex' => $this->input->post('sex'),
			'birthdate' => $this->input->post('birthdate'),
			'address' => $this->input->post('address'),
			'program' => $this->input->post('program'),
			'komp' => $this->input->post('comp')
			);
		$query = $this->Scholar_model->get_data($key);
		// $query = $this->db->get('mhs');
		if ($query->num_rows()>0) {
			$this->Scholar_model->update_scholar($key,$data);
		}else{
			$this->Scholar_model->getinsert($data);
			$data_user=array(
				'username' => $this->input->post('nim'),
				'passwd' => md5($this->input->post('birthdate')),
				'status' => 1
				);
			$this->Users_model->getinsert($data_user);
			// $query = $this->Scholar_model->get_data($key);
		}
		redirect('scholars');
	}
}
