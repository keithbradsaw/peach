<?php
class User_model extends CI_model{



public function register_user($user){

//Inserts the new user to the user table
$this->db->insert('user', $user);

}

public function login_user($email,$pass){
//Selects the user details from user when the email and password match
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email_address',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}
public function email_check($email){
//Checks to see if the email is already in the user table
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email_address',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


}


?>