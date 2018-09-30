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
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}
public function login_view(){
 

    $this->load->view('templates/header');
    $this->load->view("login.php");
    $this->load->view('templates/footer');
}

function login_user(){
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
 
        $this->load->view('user_profile.php');
 
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
            $this->load->view('templates/header');
    $this->load->view("login.php");
    $this->load->view('templates/footer');
   
 
      }
 
 
}


function user_profile(){
    $this->load->view("user_profile.php");
    $this->load->view('templates/footer');

 
}
public function user_logout(){
 
  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

}
?>