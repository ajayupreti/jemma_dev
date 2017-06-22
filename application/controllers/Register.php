<?php 

	class Register extends CI_Controller
	{
		
                public function __construct()
                {
                parent::__construct();
                /** Set the Header as you Like to handle cache  */
                header("Cache-Control: no-cache");
                header("Pragma: no-cache");
                $this->request_type = $_SERVER['REQUEST_METHOD'];
                }
               
                public function index()
                {
                  
	
                        $this->load->helper('url');
                        $this->load->view('register','',false);
				}

    }
