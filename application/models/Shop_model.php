<?php
class Shop_model extends CI_model{
 public function show_category_products($product_id){
	$this->db->select('*');
	$this->db->from('product');
	$this->db->where('product_category_id',$product_id);
	    $query=$this->db->get();
    return $query->row_array();
 }

 public function  Get_product_by_id($product_id){
 	   $this->db->select('a.*,b.*');
    $this->db->from('product a');
    $this->db->join('product_category b', 'b.product_category_id = a.product_category_id', 'left'); 
    $this->db->where('product_id',$product_id);
    $query = $this->db->get();
    return $query->row_array();
 }

 public function Get_related_by_id($product_category_id){
    $this->db->select('*');
    $this->db->from('product');
    $this->db->where('product_category_id',$product_category_id);
    $query = $this->db->get();
    return $query->result_array();

 }

 public function display_cart_products($pid){
 $this->db->select('*');
  $this->db->from('product');
  $this->db->where('product_id',$pid);
   $query = $this->db->get();
    return $query->result_array();
}
//add product to cart
public function input_product_to_cart($product){
$this->db->insert('cart', $product);
}
//Amount of products in cart
public function retrieve_amount_from_cart($user_id){
  $this->db->select('*');
  $this->db->from('cart');
  $this->db->where('user_id',$user_id);
  $this->db->where('status','Pending');
   $query = $this->db->get();
    return $query->result_array();
    }

//Delete Item From Cart
public function deleteFromCart($cart_id){
 $this->db->where("cart_id",$cart_id);
    $this->db->delete("cart");
    return;
}
//Order Details Page(Multiple Joins)
public function orderDetails($user_id){
  $this->db->select('a.quantity,b.product_price');
    $this->db->from('cart a');
    $this->db->join('product b', 'b.product_id = a.product_id'); 
    $this->db->where('user_id',$user_id);
    $this->db->where('a.status','Pending');
       $query = $this->db->get();
    return $query->result_array();
}

/*To Compelete an order we will need
  insert based on user id and where status is not delivered
  based on that we can show the details to the driver 

  Select from the cart where the user id matches and status is pending
  */
  public function cart_info($user_id){
    $this->db->select('cart_id');
    $this->db->from('cart');
    $this->db->where('user_id',$user_id);
    $this->db->where('status','Pending');
       $query = $this->db->get();
    return $query->result_array();
  }
  public function addr_info($user_id){
    $this->db->select('user_address_id');
    $this->db->from('user_address');
    $this->db->where('user_id',$user_id);
       $query = $this->db->get();
    return $query->row_array();
  }
    public function pay_info($user_id){
    $this->db->select('user_payment_details_id');
    $this->db->from('user_payment_details');
    $this->db->where('user_id',$user_id);
       $query = $this->db->get();
    return $query->row_array();
  }

  //Insert Order and return order id 
  public function insert_order_get_oid($user_id){

$userdata=array('user_id' =>$user_id);
$this->db->insert('order', $userdata);


//$last_row=$this->db->select('id')->order_by('id',"desc")->limit(1)->get('order')->row();


 $this->db->select('order_id');
 $this->db->where('user_id', $user_id);
    $this->db->order_by('order_id',"desc");
    $this->db->limit(1);
       $query = $this->db->get('order');
    foreach ($query->result_array() as $key) {
      return $key;
    }
  }
//Inserts to order Items Table
  public function insert_to_order_items($orderItems){
    $this->db->insert('order_items', $orderItems);
    return;
  }

  //Update cart to change status 
  public function cart_to_order($cart_id){
    $status = array('status' => 'Ordered'); 
$this->db->where('cart_id', $cart_id);
$this->db->update('cart', $status);
  }
  //update order table
  public function update_order($order_id, $order){
$this->db->where('order_id', $order_id);
$this->db->update('order', $order);
  }

}
?>