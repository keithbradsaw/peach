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
}
?>