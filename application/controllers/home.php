<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

public function __construct()
 {
   parent::__construct();
   $this->load->library('session');
 }

 public function index()
 {
   if($this->session->userdata('email'))
   {
     
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }

 public function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }
}

?>