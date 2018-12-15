<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>
 <html>
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>GoShopping.ie</title>
    <!--Navbar CSS-->
  <?php echo link_tag('/assets/css/profile_navbar.css'); ?>
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Peach</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('user/user_logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile'); ?>">
                  <span data-feather="home"></span>
                  Account Overview
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile_orders/');echo $user_id;  ?>">
                  <span data-feather="file"></span>
                  Past Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile_address/');echo $user_id;  ?>">
                  <span data-feather="shopping-cart"></span>
                  Delivery Address
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('user/user_profile_payment_details/');echo $user_id;  ?>">
                  <span data-feather="credit-card"></span>
                  Payment Details<span class="sr-only">(current)</span>

                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>The Store</span>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('shop/shop_index'); ?>">
                  <span data-feather="shopping-bag"></span>
                  Start Shopping
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Payment Details</h1>
          </div>
          <!--Payment Details Card and Link to the Store Card -->
  <div class="row">
            <div class="col-12 col-sm-8 col-md-6 mx-auto">
            <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2 class="text-center">Current Payment Details</h2>
                    </div>
              
                    <form action="<?php echo base_url('user/update_PaymentDetails'); ?>" method="post" >
                        <input type="hidden" id="x_first_name" name="x_first_name" value="">
                        <input type="hidden" id="x_last_name" name="x_last_name" value="">
                        <input type="hidden" id="x_card_num" name="x_card_num" value="">
                        <input type="hidden" id="x_exp_date" name="x_exp_date" value="">
                        <div class="form-group text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
                            </ul>
                        </div>
                        <input type="hidden" name="user_id" value="<?php echo $details['user_id'] ?>">
                        <div class="form-group has-success">
                            <label for="card_name" class="control-label">Name on card</label>
                            <input id="card_name" name="card_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $details['card_name'] ?>" >
                           
                        </div>
                        <div class="form-group">
                            <label for="card_number" class="control-label">Card number</label>
                            <input id="card_number" name="card_number" type="tel" class="form-control" value="<?php echo $details['card_number'] ?>">
                        
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="card_exp_date" class="control-label">Expiration</label>
                                    <input id="card_exp_date" name="card_exp_date" type="tel" class="form-control" value="<?php echo $details['card_exp_date']  ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="card_cvv" class="control-label">Card CVV</label>
                                <div class="input-group">
                                    <input id="card_cvv" name="card_cvv" type="tel" class="form-control" value="<?php echo $details['card_cvv']  ?>">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Update Card Details</span>
                            </button>
                        </div>
                    </form>
                </div>
          </div>
      </div>
    </div>
    <!--End Of Row -->
        </main>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>