<?php echo link_tag('/assets/css/order_details.css'); ?>
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
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
 <br>
 <br>
<div class="content">
<div class="container">
	 <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Your Groceries</h3>
                        <div class="box-section">
                            <div class="box-data">
                                <label for="Groceries">Groceries</label>
                                <p class="box-text">
                                 Amount of items: <?php echo $Total_Items ?></p>
                                <span class="box-price">€<?php echo $Total_Grocery_Cost ?><span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="box-title">Delivery Frequency</h3>
                        <div class="box-selection">
                            <div class="box-data">
                                <label for="question1">Choose How Often you Want a delivery</label>
                                <p class="box-text">
                                <select id="delivery_freq" name="delivery_freq">
                                    <option value="every_week">Each Week</option>
                                    <option value="every_two_weeks">Every Two Weeks</option>
                                    <option value="every_three_weeks">Every Three Weeks</option>
                                    <option value="every_four_weeks">Once Per Month</option>
                                  </select>
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="widget">
                        <h4 class="widget-title">Order Summary</h4>
                        <div class="summary-block">
                            <div class="summary-content">
                                <div class="summary-head"><h5 class="summary-title">Groceries</h5></div>
                                <div class="summary-price">
                                    <p class="summary-text">€<span id="groceriesP" value="<?php echo $Total_Grocery_Cost ?>" ><?php echo $Total_Grocery_Cost ?></span></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head">
                                <h5 class="summary-title">Delivery Charge</h5>
                                
                                </div>
                                <div class="summary-price">
                                    <p class="summary-text">€<span id="deliveryP">30</span></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head"> <h5 class="summary-title">Total</h5><span id="duration"class="summary-small-text pull-right">Per Month</span></div>
                                <div class="summary-price">
                                    <p class="summary-text">€<span id="totalP">0<span></p>
                                   <!--  <span class="summary-small-text pull-right">Per Week</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
    <a id="w" href="<?php echo base_url('shop/shop_complete_order'); ?>" class="btn btn-primary btn-lg mb30">Complete Order</a>
                </div>
            </div>
</div>
</div>
<script>
$('document').ready(function() {
 deliveryP = 30;
        $("#deliveryP").text(deliveryP);
        groceriesP=parseFloat(document.getElementById("groceriesP").textContent);
        var totalP=groceriesP+deliveryP;
        $("#totalP").text(totalP);
        $("#w").attr("href", "<?php echo base_url('shop/shop_complete_order/every_week'); ?>");

$('select').on('change', function() {

     if($('#delivery_freq').val() == "every_week") 
    {
        var deliveryP = 30;
        $("#deliveryP").text(deliveryP);
        groceriesP=parseFloat(document.getElementById("groceriesP").textContent);
        var totalP=groceriesP+deliveryP;
        $("#totalP").text(totalP);
        $("#w").attr("href", "<?php echo base_url('shop/shop_complete_order/every_week'); ?>");
    }
    else if ($('#delivery_freq').val() == "every_two_weeks") 
    {
       var deliveryP = 15;
         $("#deliveryP").text(deliveryP);
        groceriesP=parseFloat(document.getElementById("groceriesP").textContent);
        var totalP=groceriesP+deliveryP;
        $("#totalP").text(totalP);
        $("#w").attr("href", "<?php echo base_url('shop/shop_complete_order/every_two_weeks'); ?>");
    }
    else if ($('#delivery_freq').val() == "every_three_weeks") 
    {
       var deliveryP = 12;
         $("#deliveryP").text(deliveryP);
        groceriesP=parseFloat(document.getElementById("groceriesP").textContent);
        var totalP=groceriesP+deliveryP;
        $("#totalP").text(totalP);
        $("#w").attr("href", "<?php echo base_url('shop/shop_complete_order/every_three_weeks'); ?>");

    }
    else if ($('#delivery_freq').val() == "every_four_weeks") 
    {
       var deliveryP = 10;
         $("#deliveryP").text(deliveryP);
        groceriesP=parseFloat(document.getElementById("groceriesP").textContent);
    var totalP=groceriesP+deliveryP;
    $("#totalP").text(totalP);
     $("#w").attr("href", "<?php echo base_url('shop/shop_complete_order/every_four_weeks')?>");
    }
  
});  

    

});




</script>