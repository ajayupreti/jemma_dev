<?php 
	/** 
	* @author: Gautam Singh
	* Class: Register 
	* Desc: Handle registeration and Insert Data adn Create a Session for that User
	*/
	class Register extends CI_Controller
	{
		# Create your global Variables here
	        var $request_type;
                var $post_data;
                var $resultset;
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
                                $this->register_post();
                        }
                        else if($this->request_type == 'GET')
                        {
                                /** Call to login_get() function load the view  */
                                $this->register_get();
                        }
                        else
                        {
                                /** Remember: Not to return from constructor method it cannot return anything */
                                $this->register_error();
                        }
                }
		# IF request is /register only then return emp information
                 public function register_post($args = 0)
                {	
                        /** First handle Data you get in HTTP POST Header
                        * Also take care data recived in Header and Payload
                        * Retrive data from POST Header using $this->input->post() function
                        * Then Insert data into Database $this->db->query() function and return result set
                        */
			if($args == 0)
			{
				$this->step_ret();
			}
			else if($args == 1)
			{
				# Call Step 1 Function (Keep Modularity and Later Optimize and remove redundant code)
				# Such practice will grow your Mental model for projects. Then only
				# your skills will be developed how to design code for your projects 
				# To practice it use Rational Rose Software Deveopment kit from IBM.
				$this->step_one();
			}                        
			else if($args ==2)
			{
				# Step two fo Form need to Check User Existence from Login and completed form
				$this->step_two();
			}
			else if($args == 3)
			{
				$this->step_three();
			}
			else if($args == 4)
			{
				$this->step_four();
			}
			else if($args == 5)
			{
				$this->step_five();
			}
			else {
				$response = array(
					"status" => "failure",
					"e_code" => 905,
 					"e_message"=> "There is no Such Step. Sorry Try again.");
				$this->output->set_output(json_encode($response));
			}
                }
		public function step_ret()
		{
			/**
			* This Script return upto how much form is filled to javascript cient
			* Check if cookie exist. Then take its id
			*/			
			if(isset($_COOKIE['JEMMASESSIONID']) && !empty($_COOKIE['JEMMASESSIONID']))
			{
				# Retrive id and return reponse
				$session_id = $_SESSION[$_COOKIE['JEMMASESSIONID']]['id'];
				# Query database
				$this->load->database();
				$resultset = $this->db->select('first_name,email,cforms')
					->from(emp)
					->where('id',$session_id)
					->get();
				$response = $resultset->result();
				$response['status'] = 'sucess'; 	
			}
			else
			{
				$response = array(
					'status' => 'failure',
					'e_code' => 1001,
					'e_message' => 'User is not Logged in'
					);
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
		}
		public function step_one()
		{
			/** 
			* First Check Whether form all data is Recieved 
			* And gently push the data to the Database
			*/
			if(isset($_POST['emailid']) && !empty($_POST['emailid']))
			{
				$this->post_data = array(
						"first_name" => $this->input->post('firstname'),
						"last_name" => $this->input->post('lastname'),
						"email" => $this->input->post('emailid'),
						"personal_email" => $this->input->post('personalemailid'),
						"password" => $this->input->post('password'),
						"doj" => $this->input->post('doj'),
						"dob" => $this->input->post('dob'),
						"role" => $this->input->post('role'),
						"cforms" => 1
						); 
			}
			# Insert the data to the database if size of the post data array is 7
			if(count($_POST) >= 9)
			{
				# load the database and load data 
				$this->load->database();
				$this->db->insert('emp',$this->post_data);
				if($this->db->affected_rows() > 0)
				{
					$resultset = $this->db-select('id')
						->from('emp')
						->where('email',$this->post_data['email'])
						->get();
					$record = $resultset->result();
					# Create a session and associate a cookie in reomte browser.
					# Create a session and associate a cookie in reomte browser.
	                                	$session_data = array(
                                                'emp_id' => $record['id'],
                                                'email' => $this->post_data['email']
						);
					session_start();
                                	$session_id = session_id(md5($this->post_data['email']));
                                	$_SESSION[$session_id] = $session_data;
                                	setcookie('JEMMASESSIONID',$session_id);
					# Return Sucess array()
					$response = array(
						"status" => "sucess",
						"desc" => "User Register with basic Information"
						);
				}
				else
				{
					# Return failure on DB Insert
					$response = array(
						"status" => "failure",
						"e_code" => "906",
						"e_message" => "Database rejected the data you sent."
						);
				}
			}
			else
			{
				# Return failure array() on Not Recieved data or bad data
				$response = array(
						"status" => "failure",
						"e_code" => "907",
						"e_message" => "Proper data is not Recieved: Bad Data" 
					);				
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
		}	
		public function step_two()
		{
			/**
			* When user is registered first form then 
			* Insert data with the ID
			*/
			/** 
			* Get session id from cookie and then retrieve emp id of user from session hash table
			* Insertion need to linked up with emp_id
			* session_id will beget from the request.
			* First search for whether user complete rest of the forms. But i'm not doing here. Left for Enhancement 
			*/
			if(isset($_COOKIE['JEMMASESSIONID']) && !empty($_COOOKIE['JEMMASESSIONID']) && count($_POST) >= 4)
			{
				# Get post data and nsert data to the database
				# There are four fields. So check the Fields should be more than 4
				$post_data = array(
					'degree' => $this->input->post('degree'),
					'college' => $this->input->post('college'),
					'emp_id' => $_SESSION[$_COOKIE['JEMMASESSIONID']]['id']
						);
				# Put data into Database
				$this->load->database();
				$this->db->insert('emp_edu',$post_data);
				if($this->db-affected_rows() > 0)
				{	
					$update_emp = array(
							'cforms' => 2,	
						);
					# Also Update the emp database that form 5 is completed
					$this->db->where('id',$post_data['emp_id']);
					$this->db->update('emp',$update_data);
					# Return Sucess Message
					$response = array(
						'status' => 'sucess',
						'desc' => 'Handler for User are Inserted'
							);
				}
				else
				{
					# Return reponse of Failure Bad data
					$response = array(
						'status' => 'failure',
						'e_code' => 909,
						'e_message' => 'Bad data refused by Database'
							);
				}
			}
			# if cookie is not SET tell him to Login first and then create session for USER and SET the cookie.
			else
			{
				/** 
				* User doesnot have any session ask to login. Then only
				* It cannot access the Register Forms. 
				* Return response for invalid or no cookie exists
				*/
				$response = array(
					'status' => 'failure',
					'e_code' => 908,
					'e_message' => 'you are not Logged In. Singin to get acces to your dashboard'
						);
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
			
		}
		public function step_three()
		{
			  /** 
			* Get session id from cookie and then retrieve emp id of user from session hash table
			* Insertion need to linked up with emp_id
			* session_id will beget from the request.
			* First search for whether user complete rest of the forms. But i'm not doing here. Left for Enhancement 
			*/
			if(isset($_COOKIE['JEMMASESSIONID']) && !empty($_COOOKIE['JEMMASESSIONID']) && count($_POST) >= 11)
			{
				# Get post data and nsert data to the database
				# There are four fields. So check the Fields should be more than 4
				$post_data = array(
					'p_street' => $this->input->post('Permanentaddr'),
					'p_city' => $this->input->post('city'),
					'p_state' => $this->input->post('state'),
					'p_pin_code' => $this->input->post('pincode'),
					'c_street' => $this->input->post('currentaddr'),
                                        'c_city' => $this->input->post('currentcity'),
                                        'c_state' => $this->input->post('currentstate'),
                                        'c_pin_code' => $this->input->post('currentpincode'),
					'e_name' => $this->input->post('ecname'),
					'e_number' => $this->input->post('ecmember'),
					'relation' => $this->input->post('ecrelation'),
  					'emp_id' => $_SESSION[$_COOKIE['JEMMASESSIONID']]['id']
						);
				# Put data into Database
				$this->load->database();
				$this->db->insert('emp_addr',$post_data);
				if($this->db-affected_rows() > 0)
				{	
					$update_emp = array(
							'cforms' => 3,	
						);
					# Also Update the emp database that form 5 is completed
					$this->db->where('id',$post_data['emp_id']);
					$this->db->update('emp',$update_data);
					# Return Sucess Message
					$response = array(
						'status' => 'sucess',
						'desc' => 'Handler for User are Inserted'
							);
				}
				else
				{
					# Return reponse of Failure Bad data
					$response = array(
						'status' => 'failure',
						'e_code' => 909,
						'e_message' => 'Bad data refused by Database'
							);
				}
			}
			# if cookie is not SET tell him to Login first and then create session for USER and SET the cookie.
			else
			{
				/** 
				* User doesnot have any session ask to login. Then only
				* It cannot access the Register Forms. 
				* Return response for invalid or no cookie exists
				*/
				$response = array(
					'status' => 'failure',
					'e_code' => 908,
					'e_message' => 'you are not Logged In. Singin to get acces to your dashboard'
						);
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
		}
		public function step_four()
		{
			 /**
                        * Get session id from cookie and then retrieve emp id of user from session hash table
                        * Insertion need to linked up with emp_id
                        * session_id will beget from the request.
                        * First search for whether user complete rest of the forms. But i'm not doing here. Left for Enhancement
                        */
                        if(isset($_COOKIE['JEMMASESSIONID']) && !empty($_COOOKIE['JEMMASESSIONID']) && count($_POST) >= 6)
                        {
                                # Get post data and nsert data to the database
                                # There are four fields. So check the Fields should be more than 4
                                $post_data = array(
                                        'account_name' => $this->input->post('accntholrname'),
                                        'bank_name' => $this->input->post('bankname'),
                                        'account_num' => $this->input->post('accntno'),
                                        'ifsc' => $this->input->post('ifsccode'),
					'pan' => $this->input->post('pancardno'),
					'adhar' => !empty($this->input->post('adharcardno')) ? $this->input->post('adharcardno') : 'Fill you PAN',
                                        'emp_id' => $_SESSION[$_COOKIE['JEMMASESSIONID']]['id']
                                                );
				# Put data into Database
                                $this->load->database();
                                $this->db->insert('emp_bank',$post_data);
                                if($this->db-affected_rows() > 0)
                                {
                                        $update_emp = array(
                                                        'cforms' => 4,
                                                );
                                        # Also Update the emp database that form 5 is completed
                                        $this->db->where('id',$post_data['emp_id']);
                                        $this->db->update('emp',$update_data);
                                        # Return Sucess Message
                                        $response = array(
                                                'status' => 'sucess',
                                                'desc' => 'Bank account for User are Inserted'
                                                        );
                                }
                                else
                                {
                                        # Return reponse of Failure Bad data
                                        $response = array(
                                                'status' => 'failure',
                                                'e_code' => 909,
                                                'e_message' => 'Bad data refused by Database'
                                                        );
                                }
				}
				# if cookie is not SET tell him to Login first and then create session for USER and SET the cookie.
				else
				{
				/** 
				* User doesnot have any session ask to login. Then only
				* It cannot access the Register Forms. 
				* Return response for invalid or no cookie exists
				*/
				$response = array(
					'status' => 'failure',
					'e_code' => 908,
					'e_message' => 'you are not Logged In. Singin to get acces to your dashboard'
						);
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
		}
		public function step_five()
		{
			/** 
			* Get session id from cookie and then retrieve emp id of user from session hash table
			* Insertion need to linked up with emp_id
			* session_id will beget from the request.
			* First search for whether user complete rest of the forms. But i'm not doing here. Left for Enhancement 
			*/
			if(isset($_COOKIE['JEMMASESSIONID']) && !empty($_COOOKIE['JEMMASESSIONID']) && count($_POST) >= 4)
			{
				# Get post data and nsert data to the database
				# There are four fields. So check the Fields should be more than 4
				$post_data = array(
					'linkedin' => $this->input->post('linkedin'),
					'twitter' => $this->input->post('twitter'),
					'skype' => $this->input->post('skype'),
					'mobile' => $this->input->post('mobile'),
					'emp_id' => $_SESSION[$_COOKIE['JEMMASESSIONID']]['id']
						);
				# Put data into Database
				$this->load->database();
				$this->db->insert('emp_handle',$post_data);
				if($this->db-affected_rows() > 0)
				{	
					$update_emp = array(
							'cforms' => 5,	
						);
					# Also Update the emp database that form 5 is completed
					$this->db->where('id',$post_data['emp_id']);
					$this->db->update('emp',$update_data);
					# Return Sucess Message
					$response = array(
						'status' => 'sucess',
						'desc' => 'Handler for User are Inserted'
							);
				}
				else
				{
					# Return reponse of Failure Bad data
					$response = array(
						'status' => 'failure',
						'e_code' => 909,
						'e_message' => 'Bad data refused by Database'
							);
				}
			}
			# if cookie is not SET tell him to Login first and then create session for USER and SET the cookie.
			else
			{
				/** 
				* User doesnot have any session ask to login. Then only
				* It cannot access the Register Forms. 
				* Return response for invalid or no cookie exists
				*/
				$response = array(
					'status' => 'failure',
					'e_code' => 908,
					'e_message' => 'you are not Logged In. Singin to get acces to your dashboard'
						);
			}
			$this->output->set_content_type('application/json');
			$this->output->set_output(json_encode($response));
		}
                public function register_get()
                {
                        /** There is no need to check the query string and default header is HTML reponse
                        *  Load the form and check session id if valid
                        *  In view function third parameter enforces to send data as html or header set. Not in string
                        *  Also Load URL helper to Link local files
                        */
                        $this->load->helper('url');
                        $this->load->view('register','',false);
                }
                public function register_error()
                {
                        $this->output->set_content_type('application/json');
                        /** Set header and return Reponse as application/json */
                        $response = array( 'status' => 'failure',
                                           'e_code' => 901,
                                           'e_message' => 'Request Method is Wrong. Please retry with Correct Method' );
                        $this->output->set_output(json_encode($response));
                }
# To donot close php script. It's best practice not to close php file using php closing tag
# Any code snippet seems to flow error then use try catch block.
        }
