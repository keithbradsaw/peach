
 <header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <a class="navbar-brand" href="#">GoShopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('shop/shop_index'); ?>">Store <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/user_profile'); ?>">Account</a>
      </li>
    </ul>
    <span class="navbar-text">
 
      <a href="<?php echo base_url('shop/shop_cart/').$this->session->userdata('user_id')  ?>" id="cart"><span data-feather="shopping-cart"></span><?php echo $this->session->userdata('cart_count') ?></a>
    </span>
  </div>
</nav>
    </header>
<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>
   <div class="card shopping-cart">
      <br>
   <h3 class="text-center">Shopping Cart</h3>
   <br>
   <br>
            <div class="card-body">
                    <!-- PRODUCT -->
                <?php 
                  $i=0;
                  $total=0;
                foreach($productList as $products) {
                    
                ?>
                    <div class="row">
                   
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="<?php echo base_url('../../assets/images/').$products['product_image'] ?>" alt="Product Image" width="120" height="80">
                        </div>

                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h5 class="product-name"><strong><?php echo $products['product_name']; ?></strong></h5>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>€ <span id="price"><?php echo $products['product_price']; ?></span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                             <h6><strong>Quantity:<?php echo $products['product_quantity']; ?></strong></h6>
                          <!-- input label="Quantity" id="qty" type="number" step="1" max="99" min="1" value="<?php //echo $products['product_quantity']; ?>"  title="Qty" class="qty" size="4"> -->
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                            <a href="<?php echo base_url('shop/deleteFromCart/').$products['cart_id']."/".$this->session->userdata('user_id') ?>">
                                <button  type="button" class="btn btn-outline-danger btn-sm deletebtn">
                                   <span>Remove</span>
                                </button>
                                </a>
                                    </div>
                        </div>
                    </div><!--End Of row-->
                    <hr>
                    <!-- END PRODUCT -->
<?php   
//Used to display   
$pValue = $products['product_price']*$products['product_quantity'];                 
$total+=$pValue;
$i++; } ?>

 <!--                <div class="float-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div> -->
            </div>
            <div class="card-footer">
                <div class="float-right">
                    <a href="<?php echo base_url('shop/shop_order_details/').$this->session->userdata('user_id')  ?>" class="btn btn-outline-success pull-right">Checkout</a>
                    <div class="float-right" style="margin: 5px">
                        Total price: <b id="total_price">€<?php  echo $total;?></b>
                    </div>
                </div>
            </div>
        </div>
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>