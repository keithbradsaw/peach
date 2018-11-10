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

    public function shop_category(){
    $this->load->view('templates/header');
    $this->load->view('shop/shop_category');
    $this->load->view('templates/footer');
    

  }
//products by category
  public function shop_category_items($categoryid){
    $categoryid = $this->uri->segment(3);
   $categoryProducts = $this->shop_model->Get_related_by_id($categoryid);
  $data = [
       'categoryProducts'   => $categoryProducts
    ];
    $this->load->view('templates/header');
  $this->load->view("shop/shop_category.php",$data);
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


//Used for suggested items on product
    public function Get_related_p($product_category_id){
  return $this->shop_model-> Get_related_by_id($product_category_id);

  }

  public function shop_cart(){
    $this->load->view('templates/header');
    $this->load->view('shop/shop_cart');
    $this->load->view('templates/footer');
  }

   public function addto_shop_cart(){
    //Product information is stored in cart table
  $item= $this->input->post('cart_item');
  $product=array(
'user_id'=> $item['user_id'],
'product_id'=>$item['product_id'],
 'quantity'=> $item['qty'],
'status'=>'Pending'
    );
  $user_id = $item['user_id'];
//$this->shop_model->input_product_to_cart($product);


//Then select products from the cart table and set as session items
$retrieved=$this->shop_model->retrieve_products_from_cart($user_id);
  //$this->session->set_userdata($product_id);

 $this->session->set_userdata('quantity',$retrieved);

        // $this->session->set_userdata('user_id',$data['user_id']);
        // $this->session->set_userdata('user_full_name',$data['user_full_name']);
        // $this->session->set_userdata('user_age',$data['user_age']);
        // $this->session->set_userdata('user_email_address',$data['user_email_address']);
        // $this->session->set_userdata('user_phone_number',$data['user_phone_number']);
        // $addr_id = $data['user_id'];
    // $uid = $this->input->post('user_id');
    // $pid = $this->input->post('product_id');
    // $price = $this->input->post('price');
    // $qty = $this->input->post('qty');
    // $totalp = $this->input->post('total_price');

    // if(!empty($uid)) 
    // {
    //   //print_r($_POST);
    //     $cart_quantity=1;
    //     $product_cart=$this->shop_model->Get_product_by_id($pid);
    //     $this->session->set_userdata('product_name',$product_cart['product_name']);
    //     $this->session->set_userdata('product_ni_i',$product_cart['product_ni_i']);
    //     $this->session->set_userdata('product_image',$product_cart['product_image']);
    //     $this->session->set_userdata('price',$price);
    //     $this->session->set_userdata('qty',$qty);
    //     $this->session->set_userdata('cart_quantity', $cart_quantity);

    //    // print_r($product_cart);
    // }
  


      // $this->load->view('templates/header');
      // $this->load->view('shop/shop_cart');
      // $this->load->view('templates/footer');
}

}
?>