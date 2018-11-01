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
  <style type="text/css">
body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
  }
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Content
 */

[role="main"] {
  padding-top: 48px; /* Space for fixed navbar */
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}
  </style>
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
                <a class="nav-link active" href="<?php echo base_url('user/user_profile_orders/');echo $user_id;  ?>">
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
                <a class="nav-link" href="<?php echo base_url('user/user_profile_payment_details/');echo $user_id;  ?>">
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
            <h1 class="h2">Your Orders</h1> <br>
          </div>
          <h5 class=""><?php echo "Hey ".$this->session->userdata('user_full_name').", it looks like you have no orders at the minute."?>
          <a href="<?php echo base_url('shop/shop_index'); ?>">Head to the store</a>
      </h5>
           <table class="table table-bordered table-striped">
          <tr>
            <td>Order Number(For Tracking)</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Order Contents</td>
            <td>-</td>
          </tr>
          <tr>
            <td>Order Price</td>
            <td></td>
          </tr>
          <tr>
            <td>Current Status Of Order</td>
            <td>-</td>
          </tr>

      </table>
        </main>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>