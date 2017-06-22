<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

public function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
 }

 public function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('password', 'password', 'trim|required');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
      $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

public function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $email = $this->input->post('email');
   $password = $this->input->post('password');
   //query the database
   $result = $this->user->login($email, $password);

   if($result)
   {
     
       $this->session->set_userdata('email');
     
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid');
     return false;
   }
 }
}
?>