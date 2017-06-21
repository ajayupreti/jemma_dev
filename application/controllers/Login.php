<?php

	class Login extends CI_Controller
	{

		public function __construct(){

		          	parent::__construct();
		  			$this->load->helper('url');
		  			$this->load->helper('form');
		  	 		$this->load->model('user_model');
		      		$this->load->library('session');

		}

		public function index()
		{
			
			
			$this->load->view('login','',false);
		}

		function login_user()
		{
		  $user_login=array(
		  'email'=>$this->input->post('email'),
		  'password'=>md5($this->input->post('password'))
          );

      $data=$this->user_model->login_user($user_login['email'],$user_login['password']);
      if($data)
      {
        $this->output->set_output('sucess');
        $this->session->set_userdata('email',$data['email']);
        $this->load->view("dashboard.php");

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
      $this->output->set_output('fail');

      }

		}
	}

?>