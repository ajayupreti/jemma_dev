<?php
Class User extends CI_Model
{
 function login($email, $password)
 {
   $this -> db -> select('id, useremail, userpassword');
   $this -> db -> from('login');
   $this -> db -> where('useremail', $email);
   $this -> db -> where('userpassword', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
?>