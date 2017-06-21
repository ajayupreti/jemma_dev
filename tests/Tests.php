<?php
	use PHPUnit\Framework\TestCase;
	require_once('config/config.php');
	/**
	* Class Helpers Stores all the Methods that need to be called for almost each endpoints with different parameter
	* The Result returned by the methods of Helpers with be asserted by endpoint class Method
	*/
	# Its better to divide function for Different Request type
	class Helper 
	{
		var $info = array();
		# Create class variables here
		public function checkHTTPStatus($url)
		{
			# First Create CURL Header and Intialize it
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch,CURLOPT_URL,$url);
			curl_exec($ch);
			$this->info = curl_getinfo($ch);
			return intval($this->info['http_code']);
		}
		# Now Check Content Type of Each endpoint and Also Content-Length(Optional)
		public function checkHTTPType()
		{		
			return $this->info['content_type'];
		}
	}
	class EndPoints extends TestCase
	{
		 # create an instance of helper class
		 # Remember you cannot initiate a class outside of a function. that due to scope restriction in php 
		 private $systemc;
		 public function testRest()
 		 {
			$this->systemc = new Helper;
			# read the Endpoint file and check 
			# here just a sample
			# Check Login
			 $this->assertEquals(200,$this->systemc->checkHTTPStatus(URL));
			 $this->assertEquals('text/html; charset=UTF-8',$this->systemc->checkHTTPType());
	                 $this->assertEquals(200,$this->systemc->checkHTTPStatus(URL.'/login'));
                         $this->assertEquals(200,$this->systemc->checkHTTPStatus(URL.'/register'));
		 }
	}
?>


