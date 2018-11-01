<?php
 
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('user_model');
        $this->load->library('session');
 
}
	public function index(){
		$this->load->view('templates/header');
    $this->load->view("register.php");
    $this->load->view('templates/footer');
		

	}

public function register_user(){

      $user=array(
      'user_full_name'=>$this->input->post('user_full_name'),
      'user_age'=>$this->input->post('user_age'),
      'user_email_address'=>$this->input->post('user_email_address'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_phone_number'=>$this->input->post('user_phone_number')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email_address']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now Login!');
  redirect('user/login_view');
  

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured it looks like a n account exists with that email,Try again.');
  redirect('user/index');
}

}

public function login_view(){
    $this->load->view('templates/header');
    $this->load->view("login.php");
    $this->load->view('templates/footer');
}

//Standared login section
public function login_user(){
  $user_login=array(
 
  'user_email_address'=>$this->input->post('user_email_address'),
  'user_password'=>md5($this->input->post('user_password'))
 
    );
 
    $data=$this->user_model->login_user($user_login['user_email_address'],$user_login['user_password']);

      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_full_name',$data['user_full_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_email_address',$data['user_email_address']);
        $this->session->set_userdata('user_phone_number',$data['user_phone_number']);
        $addr_id = $data['user_id'];
        $address_check = $this->user_model->check_id($addr_id);
    
         if($address_check){
          $this->load->view('templates/header');
          $this->load->view('user_address.php');
         $this->load->view('templates/footer');
           
                }else{
                   $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_full_name',$data['user_full_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_email_address',$data['user_email_address']);
        $this->session->set_userdata('user_phone_number',$data['user_phone_number']);
         $this->load->view('user_profile.php');
                }
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view('templates/header');
        $this->load->view("login.php");
        $this->load->view('templates/footer');
      }
}

public function address_view(){
    $this->load->view('templates/header');
    $this->load->view("user_address.php");
    $this->load->view('templates/footer');
}

function user_address(){
$user_address=array(
  'user_id'=>$this->input->post('user_id'),
  'street'=>$this->input->post('street'),
  'county'=>$this->input->post('county'),
  'eircode'=>$this->input->post('eircode'),
  'country'=>$this->input->post('country')
 
    );
print_r($user_address);
$this->user_model->add_address($user_address);

redirect('user/payment_view');
}

public function payment_view(){
 
    $this->load->view('templates/header');
    $this->load->view("user_payment.php");
    $this->load->view('templates/footer');
}

public function user_payment(){
$user_payment=array(
  'user_id'=>$this->input->post('user_id'),
  'card_name'=>$this->input->post('card_name'),
  'card_number'=>$this->input->post('card_number'),
  'card_exp_date'=>$this->input->post('card_exp_date'),
  'card_cvv'=>$this->input->post('card_cvv')

    );
print_r($user_payment);
$this->user_model->add_payment_details($user_payment);
redirect('user/user_profile');
}

//Last page to load after registraton steps are done
function user_profile(){
    $this->load->view("user_profile.php");
    $this->load->view('templates/footer');

}
public function user_profile_address(){
  $id= $this->uri->segment(3);
  $data['address']=$this->user_model->get_address($id);
   $this->load->view("user_profile_address.php",$data);
    $this->load->view('templates/footer');
}
public function update_Address(){
   
$addressDetails=array(
  'street'=>$this->input->post('street'),
  'county'=>$this->input->post('county'),
  'eircode'=>$this->input->post('eircode'),
  'country'=>$this->input->post('country')
    );
$id = ($this->input->post('user_id'));

$this->user_model->update_Address($id, $addressDetails);
redirect('user/user_profile');

}

public function user_profile_payment_details(){
 $id= $this->uri->segment(3);
 $data['details']=$this->user_model->get_payment_details($id);
// Send to the view  the details variable

      $this->load->view("user_profile_payment_details.php",$data);
    $this->load->view('templates/footer');
}

public function update_PaymentDetails(){
   
$paymentDetails=array(
  'card_name'=>$this->input->post('card_name'),
  'card_number'=>$this->input->post('card_number'),
  'card_exp_date'=>$this->input->post('card_exp_date'),
  'card_cvv'=>$this->input->post('card_cvv')
    );
$id = ($this->input->post('user_id'));

$this->user_model->update_PaymentDetails($id, $paymentDetails);
redirect('user/user_profile');

}
public function user_profile_orders(){

  $this->load->view("user_profile_orders.php");
}
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}
?>