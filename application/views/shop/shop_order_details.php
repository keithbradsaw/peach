<style type="text/css">
    .box { background-color: #fff; border-radius: 8px; border: 2px solid #e9ebef; padding: 50px; margin-bottom: 40px; }
    .box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 16px; font-weight: 700; color: #094bde; letter-spacing: 2px; }
.plan-selection { border-bottom: 2px solid #e9ebef; padding-bottom: 25px; margin-bottom: 35px; }
.plan-selection:last-child { border-bottom: 0px; margin-bottom: 0px; padding-bottom: 0px; }
.plan-data { position: relative; }
.plan-data label { font-size: 20px; margin-bottom: 15px; font-weight: 400; }
.plan-text { padding-left: 35px; }
.plan-price { position: absolute; right: 0px; color: #094bde; font-size: 20px; font-weight: 700; letter-spacing: -1px; line-height: 1.5; bottom: 43px; }
.term-price { bottom: 18px; }
.secure-price { bottom: 68px; }
.summary-block { border-bottom: 2px solid #d7d9de; }
.summary-block:last-child { border-bottom: 0px; }
.summary-content { padding: 28px 0px; }
.summary-price { color: #094bde; font-size: 20px; font-weight: 400; letter-spacing: -1px; margin-bottom: 0px; display: inline-block; float: right; }
.summary-small-text { font-weight: 700; font-size: 12px; color: #8f929a; }
.summary-text { margin-bottom: -10px; }
.summary-title { font-weight: 700; font-size: 14px; color: #1c1e22; }
.summary-head { display: inline-block; width: 120px; }

.widget { margin-bottom: 30px; background-color: #e9ebef; padding: 50px; border-radius: 6px; }
.widget:last-child { border-bottom: 0px; }
.widget-title { color: #094bde; font-size: 16px; font-weight: 700; text-transform: uppercase; margin-bottom: 25px; letter-spacing: 1px; display: table; line-height: 1; }

.btn { font-family: 'Noto Sans', sans-serif; font-size: 16px; text-transform: capitalize; font-weight: 700; padding: 12px 36px; border-radius: 4px; line-height: 2; letter-spacing: 0px; -webkit-transition: all 0.3s; -moz-transition: all 0.3s; transition: all 0.3s; word-wrap: break-word; white-space: normal !important; }
.btn-default { background-color: #0943c6; color: #fff; border: 1px solid #0943c6; }
.btn-default:hover { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }
.btn-default.focus, .btn-default:focus { background-color: #063bb3; color: #fff; border: 1px solid #063bb3; }
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
                        <div class="plan-selection">
                            <div class="plan-data">
                                <label for="question1">Products</label>
                                <p class="plan-text">
                                 Amount of items: <?php echo $Total_Items ?></p>
                                <span class="plan-price">$29 </span>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="box-title">Delivery Frequency</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <label for="question1">Choose How Often you Want a delivery</label>
                                <p class="plan-text">
                                <select name="delivery_freq">
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
                                    <p class="summary-text">$10</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head">
                                <h5 class="summary-title">Delivery Charge</h5>
                                
                                </div>
                                <div class="summary-price">
                                    <p class="summary-text">$22</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="summary-block">
                            <div class="summary-content">
                               <div class="summary-head"> <h5 class="summary-title">Total</h5><span id="duration"class="summary-small-text pull-right">Per Week</span></div>
                                <div class="summary-price">
                                    <p class="summary-text">$258</p>
                                   <!--  <span class="summary-small-text pull-right">Per Week</span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
    <a href="#" class="btn btn-primary btn-lg mb30">Complete Order</a>
                </div>
            </div>

	
	
	
	
	
</div>
</div>