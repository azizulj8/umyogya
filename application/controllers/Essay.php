<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Essay extends CI_Controller {

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
		$data['content']='Admin/essays';
		$data['head_bread']='Master';
		$data['breadcrum']='Essays';
		$data['link']='essays';
		$data['add_head']='h_scholar';
		$data['add_js']='js_scholar';
		$data['dt_essay']=$this->db->get('essay');
		$this->load->view('Admin/dashboard',$data);
	}

	public function add_new_essay(){
		$this->Security_model->getsecurity();
		$data['dashboard']="";
		$data['masters']='class="active"';
		$data['setting']="";
		$data['content']='Admin/add_essay';
		$data['head_bread']='Master';
		$data['breadcrum']='Add Essay';
		$data['link']='essays';
		$data['add_head']='h_essay';
		$data['add_js']='js_essay';
		// $data['dt_essay']=$this->db->get('essay');
		$this->load->view('Admin/dashboard',$data);
	}

	public function edit_essay(){
		$this->Security_model->getsecurity();
		$data['dashboard']="";
		$data['masters']='class="active"';
		$data['setting']="";
		$data['content']='Admin/edit_essay';
		$data['head_bread']='Master';
		$data['breadcrum']='Edit Essay';
		$data['link']='essays';
		$data['add_head']='h_essay';
		$data['add_js']='js_essay';
		// $data['dt_essay']=$this->db->get('essay');
		$key=$this->uri->segment(2);
		// echo $key;
		$this->db->where('id',$key);
		$query=$this->db->get('essay');
		if($query->num_rows()>0){	
			foreach ($query->result() as $row) {
				$data['id'] = $row->id;
				$data['nim'] = $row->nim;
				$data['topic'] = $row->topic;
				$data['area'] = $row->area;
				$data['status'] = $row->status;
				$data['title'] = $row->title;
				$data['keyword'] = $row->keyword;
			}
		}

		$this->load->view('Admin/dashboard',$data);
	}

    public function save() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf|docx|xls|doc|xlsx|xl';
        $config['max_size']             = 2000;

        $this->load->library('upload', $config);
		$this->upload->initialize($config);
        $view_data['nim'] = $this->input->post('nim');
        // $view_data['page_type'] = "submit_essay";
        // $data=array(
        // 	'nim' => $this->input->post('nim'), 
        // 	'full_name' => $this->input->post('full_name'), 
        //     'kompetensi' => $this->input->post('kompetensi'),
        //     'phone' => $this->input->post('phone'),
        //     'status' => $this->input->post('status'),
        //     'alamat' => $this->input->post('alamat'),
        //     'email' => $this->input->post('email'),
        // 	'program' => $this->input->post('program'), 
        // 	);
        // $save_id = $this->Author_model->save($data);
        // if($save_id){
		$key=$this->input->post('id');
		$query = $this->Essay_model->get_data($key);
		// $query = $this->db->get('mhs');
		if ($query->num_rows()<0) {
    	  	if (!$this->upload->do_upload('file')){
    	  		 $error = array('error' => $this->upload->display_errors());
    	  		echo 'Upload Gagal :'.print_r($error).' path :'.$config['upload_path'];
				// $status="gagal";
	    	}else{
	    	  	$Fname=$this->upload->data();
		        $data_essay=array(
		        	'nim' => $this->input->post('nim'),
                    'topic' => $this->input->post('topic'),
                    'area' => $this->input->post('area'),
                    'status' => $this->input->post('status'),
		        	'title' => $this->input->post('title'),
                    'keyword' => $this->input->post('keyword'),
		        	// 'description' => $this->input->post('description'), 
		        	'file' => $Fname['file_name'],
		        	'create_date' => date('Y-m-d H:i:s'),
		        	);
	            $essay_id = $this->Essay_model->getinsert($data_essay);
	            $view_data['succes']=true;
				redirect(base_url());
				// $status="berhasil";
	    	}
	    	// echo $status;
        }else{
	        $data_essay=array(
	        	'nim' => $this->input->post('nim'),
                'topic' => $this->input->post('topic'),
                'area' => $this->input->post('area'),
                'status' => $this->input->post('status'),
	        	'title' => $this->input->post('title'),
                'keyword' => $this->input->post('keyword'),
	        	'create_date' => date('Y-m-d H:i:s')
	        	);
			$this->Essay_model->update_essay($key,$data_essay);
			redirect(base_url('essay'));
        }
    }
	public function del(){
		$this->Security_model->getsecurity();
		$key=$this->uri->segment(2);
		$this->db->where('id',$key);
		$query=$this->db->get('essay');
		if ($query->num_rows()>0) {
			$this->Essay_model->delete($key);
		}
		redirect('essay');
	}
}
