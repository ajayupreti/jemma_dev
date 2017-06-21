<?php

	/**
	* @ Author : Gautam Singh
	* @ class : Load dash board 
	*/
	class Dashboard extends CI_Controller
	{
		var $request_type;
		public function __construct()
                {
                parent::__construct();
                /** Set the Header as you Like to handle cache  */
                header("Cache-Control: no-cache");
                header("Pragma: no-cache");
                $this->request_type = $_SERVER['REQUEST_METHOD'];
                }
                /** To invoke function depending on the Request type */
                public function index()
                {
                        if($this->request_type == 'POST')
                        {
                                /** call to login_post() function */
                                $this->dashboard_post();
                        }
                        else if($this->request_type == 'GET')
                        {
                                /** Call to login_get() function load the view  */
                                $this->dashboard_get();
                        }
                        else
                        {
                                /** Remember: Not to return from constructor method it cannot return anything */
                                 $response = array(
                                                'status' => "failure",
                                                'e_code' => 1002,
                                                'e_message' => 'Bad request'
                                                );
                                $this->output->set_content_type('application/json');
                                $this->output->set_output(json_encode($response));
                        }
                }
		public function dashboard_get()
		{
			$this->load->helper('url');
			$this->load->view('dashboard','',false);	
		}
		public function dashboard_post()
		{
			$response;
		}
			
	}
