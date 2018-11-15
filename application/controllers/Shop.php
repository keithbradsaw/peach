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

  public function shop_cart($user_id){
    $user_id = $this->uri->segment(3);
$cartDetails=$this->shop_model->retrieve_amount_from_cart($user_id);
$main=array();
//print_r($productDetails);
  // foreach ($cartDetails as $cartInf) {
  //     echo "ProductID: ".$cartInf['product_id']. "Quantity: ".$cartInf['quantity'];
  //   }


  foreach ($cartDetails as $cartInf) {
$productDetails=$this->shop_model->display_cart_products($cartInf['product_id']);
  foreach ($productDetails as $details) {

    $myarr=array(
     "cart_id" => $cartInf['cart_id'],
     "product_name" => $details['product_name'],
     "product_price" => $details['product_price'],
     "product_quantity"=>$cartInf['quantity'],
     "product_image" => $details['product_image']
);
     
   }
   array_push($main, $myarr);
    }

$data['productList'] = $main;
  $this->load->view('templates/header');
   $this->load->view('shop/shop_cart', $data);
   $this->load->view('templates/footer');
  }

//Add to cart button gets clicked
   public function addto_shop_cart(){
  $item= $this->input->post('cart_item');
  $product=array(
'user_id'=> $item['user_id'],
'product_id'=>$item['product_id'],
 'quantity'=> $item['qty'],
'status'=>'Pending'
    );
  $user_id = $item['user_id'];
$this->shop_model->input_product_to_cart($product);
//Then select products from the cart table and set as session items
$retrieved=$this->shop_model->retrieve_amount_from_cart($user_id);
$i = 0;
foreach ($retrieved as $item) {
    $i++;
    $item[number];
    //Displays the amount of products in a cart
 //$this->session->set_userdata('cart_count',$i);
}

  }
  //Delete Item From Cart
public function deleteFromCart($cart_id, $user_id){
$cart_id=$this->uri->segment(3);
$user_id=$this->uri->segment(4);
$this->shop_model->deleteFromCart($cart_id);
redirect('shop/shop_cart/'.$user_id);

}

}
?>