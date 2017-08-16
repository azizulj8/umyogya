<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
    }

	public function index()
	{
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']="";
		$data['setting']='class="active"';
		$data['content']='Admin/schedule';
		$data['head_bread']='Setting';
		$data['breadcrum']='Schedules List';
		$data['link']='schedules';
		$data['add_head']='h_scholar';
		$data['add_js']='js_scholar';
		$data['dt_schedule']=$this->db->get('schedules');
		$this->load->view('Admin/dashboard',$data);
	}

	public function add_new_schedule(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']="";
		$data['setting']='class="active"';
		$data['content']='Admin/add_schedule';
		$data['head_bread']='Setting';
		$data['breadcrum']='Add New Schedule';
		$data['link']='schedule';
		$data['add_head']='h_schedule';
		$data['add_js']='js_schedule';
		$this->load->view('Admin/dashboard',$data);
	}

    public function save() {
        $data=array(
            'title' => $this->input->post('title'),
            'status' => $this->input->post('status'),
        	'from' => date('Y-m-d',strtotime($this->input->post('from'))),
        	'to' => date('Y-m-d',strtotime($this->input->post('to')))
        	);
        $essay_id = $this->Schedule_model->getinsert($data);
		redirect(base_url());
		// $status="berhasil";
    }
}
