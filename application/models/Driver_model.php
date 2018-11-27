<?php
class Driver_model extends CI_model{

	public function register_driver($driver){
//Inserts the driver to the driver table
$this->db->insert('driver', $driver);

}

public function email_check($email){
//Checks to see if the email is already in the driver table
  $this->db->select('*');
  $this->db->from('driver');
  $this->db->where('driver_email_address',$email);
  $query=$this->db->get();
//Depending on whether a row exists with that data the following is returned
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}
public function login_driver($email,$pass){
//Selects the user details from user when the email and password match
  $this->db->select('*');
  $this->db->from('driver');
  $this->db->where('driver_email_address',$email);
  $this->db->where('driver_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}

}
?>