<?php
class Login_model extends CI_Model{
  function __construct(){
    parent::__construct();
  }
public function login_user($email,$pass)
{

  $this->db->select('*');
  $this->db->from('login');
  $this->db->where('useremail',$email);
  $this->db->where('userpassword',$pass);
  if($query=$this->db->get())
  {
      return $query->first_row('array');
  }
  else{
    return false;
  }


}



}


?>
