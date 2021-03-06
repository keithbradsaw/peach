<?php
 
class Driver extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('driver_model');
    $this->load->library('session');
    $this->load->helper('html');
 
}
	public function driver_register(){
		$this->load->view('templates/header');
    $this->load->view("driver/driver_register.php");
    $this->load->view('templates/footer');
		

	}

public function register_driver(){
      $driver=array(
      'driver_full_name'=>$this->input->post('driver_full_name'),
      'driver_age'=>$this->input->post('driver_age'),
      'driver_email_address'=>$this->input->post('driver_email_address'),
      'driver_password'=>md5($this->input->post('driver_password')),
      'driver_phone_number'=>$this->input->post('driver_phone_number')
        );
        print_r($driver);

$email_check=$this->driver_model->email_check($driver['driver_email_address']);

if($email_check){
  $this->driver_model->register_driver($driver);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now Login!');
  redirect('driver/driver_login');
}
else{

  $this->session->set_flashdata('error_msg', 'Error occured it looks like a n account exists with that email,Try again.');
  redirect('driver/driver_register');
}

}
//Shows the Login View
public function driver_login(){
  $this->load->view('templates/header');
    $this->load->view("driver/driver_login.php");
    $this->load->view('templates/footer');
}

public function login_driver(){
 $driver_login=array(
  'driver_email_address'=>$this->input->post('driver_email_address'),
  'driver_password'=>md5($this->input->post('driver_password'))
 
    );
 
    $data=$this->driver_model->login_driver($driver_login['driver_email_address'],$driver_login['driver_password']);

      if($data)
      {
        //First paramater is the key second is the data from source
        $this->session->set_userdata('driver_id',$data['driver_id']);
        $this->session->set_userdata('driver_full_name',$data['driver_full_name']);
        $this->session->set_userdata('driver_age',$data['driver_age']);
        $this->session->set_userdata('driver_email_address',$data['driver_email_address']);
        $this->session->set_userdata('driver_phone_number',$data['driver_phone_number']);
        $this->driver_profile();
        
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('templates/header');
        $this->load->view("driver/driver_login");
        $this->load->view('templates/footer');
      }
}


public function driver_profile(){
  $data['amount_orders']=$this->driver_model->number_available_orders();
    $this->load->view('templates/header');
    $this->load->view("driver/driver_profile.php",$data);
    $this->load->view('templates/footer');

}
public function driver_profile_deliveries(){
$data['available_orders']=$this->driver_model->list_available_orders();
    $this->load->view('templates/header');
    $this->load->view("driver/driver_profile_deliveries.php",$data);
    $this->load->view('templates/footer');
}

public function driver_adding_to_delivery(){
 $deliveryInfo= $this->input->post('deliveryInfo');

$driverid=$deliveryInfo['driver_id'];
$order_id=$deliveryInfo['order_id'];
 // echo $driverid;
  //print_r($info);
$this->driver_model->assign_driver_to_order($driverid, $order_id);
}
public function driver_begin_delivery(){
$driver_id=$this->session->userdata('driver_id');
  $data['addresses']=$this->driver_model->list_selected_orders($driver_id);
      $this->load->view('templates/header');
    $this->load->view("driver/driver_begin_delivery.php",$data);
    $this->load->view('templates/footer');
//print_r($data);
}

public function driver_complete_deliveries(){
$driver_id=$this->session->userdata('driver_id');
 $orderInfo= $this->input->post('orderInfo');
 $orderIDs=array();
foreach ($orderInfo as $orderValue) {
  array_push($orderIDs, $orderValue['order_id']);
}
$this->driver_model->complete_orders($orderIDs);

}


public function driver_logout(){

  $this->session->sess_destroy();
  redirect('driver/driver_login', 'refresh');
}

}
?>