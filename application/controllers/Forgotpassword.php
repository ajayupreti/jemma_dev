<?php
	class Forgotpassword extends CI_Controller
	{

                public function index()
                {
                        $this->load->helper('url');
                        $this->load->view('login','',false);
				}
				
    }
?>
