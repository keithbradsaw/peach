<?php
 
class Shop extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  	$this->load->helper('url');
  	$this->load->model('shop_model');
        $this->load->library('session');
 
}
	public function shop_index(){
		$this->load->view('templates/header');
    $this->load->view('shop/shop_index');
    $this->load->view('templates/footer');
		

	}

  public function shop_product(){
    $this->load->view('templates/header');
    $this->load->view('shop/shop_product');
    $this->load->view('templates/footer');
    

  }
  public function  Get_product_by_id(){
    $product_id= $this->uri->segment(3);
     $product_category_id= $this->uri->segment(4);
  $productinfo=$this->shop_model-> Get_product_by_id($product_id);
 $related= $this->Get_related_p($product_category_id);

 $data = [
        'productinfo'   => $productinfo,
        'related' => $related
    ];
      $this->load->view('templates/header');
   $this->load->view("shop/shop_product.php",$data);
    $this->load->view('templates/footer');
  }

    public function Get_related_p($product_category_id){
  return $this->shop_model-> Get_related_by_id($product_category_id);

  }

  public function shop_cart(){
    $this->load->view('templates/header');
    $this->load->view('shop/shop_cart');
    $this->load->view('templates/footer');
  }

   public function addto_shop_cart(){

    $uid = $this->input->post('user_id');
    $pid = $this->input->post('product_id');
    $price = $this->input->post('price');
    $qty = $this->input->post('qty');
    $totalp = $this->input->post('total_price');

    if(!empty($pid)) 
    {
       $this->session->set_userdata('product_id',$pid);
       $this->session->set_userdata('user_id',$uid);
       $this->session->set_userdata('price',$price);
       $this->session->set_userdata('qty',$qty);
       // echo $pid;
    }
  


      $this->load->view('templates/header');
      $this->load->view('shop/shop_cart');
      $this->load->view('templates/footer');
}

}
?>