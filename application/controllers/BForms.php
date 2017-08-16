<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BForms extends CI_Controller {

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
		$data['content']='Admin/forms';
		$data['head_bread']='Master';
		$data['breadcrum']='BUJS Forms List';
		$data['link']='bujsforms';
		$data['add_head']='h_scholar';
		$data['add_js']='js_scholar';
		$data['dt_bujs']=$this->db->get('bujsform');
		$this->load->view('Admin/dashboard',$data);
	}

	public function add_new_form(){
		$this->Security_model->getsecurity();
		$this->Security_model->is_admin();
		$data['dashboard']="";
		$data['masters']='class="active"';
		$data['setting']="";
		$data['content']='Admin/add_form';
		$data['head_bread']='Master';
		$data['breadcrum']='Add New BUJS Form';
		$data['link']='bujsforms';
		$data['add_head']='h_essay';
		$data['add_js']='js_essay';
		$this->load->view('Admin/dashboard',$data);
	}

    public function save() {
        $config['upload_path']          = './uploads/forms/';
        $config['allowed_types']        = 'pdf|docx|xls|doc|xlsx|xl';
        $config['max_size']             = 2000;

        $this->load->library('upload', $config);
		$this->upload->initialize($config);
        // $view_data['nim'] = $this->input->post('nim');

	  	if (!$this->upload->do_upload('file')){
	  		 $error = array('error' => $this->upload->display_errors());
	  		echo 'Upload Gagal :'.print_r($error).' path :'.$config['upload_path'];
			// $status="gagal";
		}else{
		  	$Fname=$this->upload->data();
	        $data=array(
	        	// 'nim' => $this->input->post('nim'),
	            'title' => $this->input->post('title'),
	            'status' => $this->input->post('status'),
	        	'filename' => $Fname['file_name'],
	        	'created_date' => date('Y-m-d H:i:s'),
	        	);
	        $essay_id = $this->Forms_model->getinsert($data);
	        $view_data['succes']=true;
			redirect(base_url());
			// $status="berhasil";
		}
    }
}
