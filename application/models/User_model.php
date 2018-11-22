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

  //Inserts the current users address
public function add_address($user_address){
    $this->db->insert('user_address', $user_address);
}

public function get_address($id){
   $this->db->select('*');
  $this->db->from('user_address');
  $this->db->where('user_id',$id);
    $query=$this->db->get();
    return $query->row_array();
}
public function update_Address($id, $addressDetails){
       $this->db->where('user_id', $id);
        $this->db->update('user_address', $addressDetails);
}

//Inserts the current users payment details
public function add_payment_details($user_payment){
    $this->db->insert('user_payment_details', $user_payment);
  }

public function email_check($email){
//Checks to see if the email is already in the user table
  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email_address',$email);
  $query=$this->db->get();
//Depending on whether a row exists with that data the following is returned
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

//Function to check if address exists(Used for if statement on LogIn)
public function check_id($addr_id){
  $this->db->select('*');
  $this->db->from('user_address');
  $this->db->where('user_id',$addr_id);
  $query=$this->db->get();
  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }
}

public function get_payment_details($id){

  $this->db->select('*');
  $this->db->from('user_payment_details');
  $this->db->where('user_id',$id);
    $query=$this->db->get();
    return $query->row_array();
}

public function update_PaymentDetails($id, $paymentDetails){
       $this->db->where('user_id', $id);
        $this->db->update('user_payment_details', $paymentDetails);
}

public function display_user_orders($user_id){
  $this->db->select('order_id, total_payable, status, frequency');
  $this->db->from('order');
  $this->db->where('user_id',$user_id);
   $query = $this->db->get();
    return $query->result_array();

}


 }

?>