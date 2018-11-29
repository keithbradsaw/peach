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

public function list_available_orders(){

$this->db->select('*');
$this->db->join('user', 'user.user_id = order.user_id');
$this->db->where('status','Waiting for driver to collect');
$this->db->join('user_address', 'user_address.user_id = order.user_id');
$this->db->from('order');
   $query = $this->db->get();
    return $query->result_array();
  // $this->db->select('a.order_id, a.user_id, a.total_payable, a.frequency, b.user_full_name, b.user_id, c.user_id, c.eircode');
  //  $this->db->join('user b', 'b.user_id = a.user_id', 'c.user_id = b.user_id' );
  // $this->db->where('status','Waiting for driver to collect');
   $query = $this->db->get();
    return $query->result_array();
  }

  public function assign_driver_to_order($driverid, $order_id){
        $this->db->where('order_id', $order_id);
       $status = array('status' => 'Driver Has Begun Delivery',
                        'driver_id' => $driverid
                        ); 
    $this->db->update('order', $status);
    return;
  }

  public function list_selected_orders($driver_id){

     $criteria = array('status' => 'Driver Has Begun Delivery',
                        'driver_id' => $driver_id
                        ); 
     $this->db->select('*');
$this->db->join('user', 'user.user_id = order.user_id');
$this->db->where($criteria);
$this->db->join('user_address', 'user_address.user_id = order.user_id');
$this->db->from('order');
   $query = $this->db->get();
    return $query->result_array();
  }
}
?>