<style type="text/css">
	body{
	background-color: #e9ecef;
	}

</style>
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
    <div class="jumbotron text-center">
    		<h1 class="display-3">Thank you For Your Order</h1>
    		<h3>
        <a href="<?php echo base_url('user/user_profile_orders'); ?>">View Your Orders Status By Clicking Here!</a>
        </h3>
    </div>