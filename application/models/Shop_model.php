<?php
class Shop_model extends CI_model{
//Lists All Products
public function Get_products(){
 $this->db->select('*');
  $this->db->from('products');
}

//Fetches products based on category clicked 
public function Get_products_by_category(){
	$this->db->select('*');
	$this->db->from('products');
	$this->db->where('product_category_id',$product_category_id);
 }

 // public function Get_product_by_id($product_id){
	// $this->db->select('*');
	// $this->db->from('product');
	// $this->db->where('product_id',$product_id);
	//     $query=$this->db->get();
 //    return $query->row_array();
 // }

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
}
?>