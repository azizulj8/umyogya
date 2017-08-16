<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
    }

	public function index()
	{
		// $this->load->helper('captcha');

		// $vals = array(
		//         // 'word'          => 'Random word',
		//         'img_path'      => './captcha/',
		//         'img_url'       => 'http://localhost/umyogya/captcha/',
		//         // 'font_path'     => './path/to/fonts/texb.ttf',
		//         'img_width'     => '150',
		//         'img_height'    => 30,
		//         'expiration'    => 7200,
		//         'word_length'   => 8,
		//         'font_size'     => 16,
		//         // 'img_id'        => 'Imageid',
		//         // 'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

		//         // White background and border, black text and red grid
		//         'colors'        => array(
	 //                'background' => array(255, 255, 255),
	 //                'border' => array(255, 255, 255),
	 //                'text' => array(0, 0, 0),
	 //                'grid' => array(255, 40, 40)
		//         )
		// );

		// $cap = create_captcha($vals);
		// echo $cap['image'];

		// store the captcha word in a session
		// $this->session->set_userdata('mycaptcha', $cap['word']);
		$this->load->view('login');
	}

	public function login(){
		$uname=$this->input->post('username');
		$pass=$this->input->post('password');

		$this->Login_model->get_login($uname,$pass);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
