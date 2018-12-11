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
<!--Profile CSS-->
    <?php echo link_tag('/assets/css/profile.css'); ?>
    
    <title>GoShopping.ie</title>
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">GoShopping</a>
      
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
                <a class="nav-link active" href="<?php echo base_url('user/user_profile'); ?>">
                  <span data-feather="home"></span>
                  Account Overview <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile_orders/');echo $user_id;  ?>">
                  <span data-feather="file"></span>
                  Past Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile_address/'); echo $user_id;  ?>">
                  <span data-feather="shopping-cart"></span>
                  Delivery Address
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user/user_profile_payment_details/'); echo $user_id; ?>">
                  <span data-feather="credit-card"></span>
                  Payment Details
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
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <!-- <h1 class="h2">Account Overview</h1> -->

          </div>
<div class="row match-height">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Personal Details</h3>
                        <div class="box-section">
                            <div class="box-data">
                                <label for="name">Name: <?php echo $this->session->userdata('user_full_name'); ?></label>
                                <br>
                              <label for="EmailAddress">Email Address: <?php echo $this->session->userdata('user_email_address'); ?></label>
                               <br>
                              <label for="age">Age: <?php echo $this->session->userdata('user_age'); ?></label>
                               <br>
                              <label for="cNumber">Contact Number: <?php echo $this->session->userdata('user_phone_number'); ?></label>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
        </main>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>