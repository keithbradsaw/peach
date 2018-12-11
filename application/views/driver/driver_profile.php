<?php
$driver_id=$this->session->userdata('driver_id');

if(!$driver_id){

  redirect('driver/driver_login');
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


.box { background-color: #fff; border-radius: 8px; border: 2px solid #e9ebef; padding: 50px; margin-bottom: 40px; }
    .box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 16px; font-weight: 700; color: #094bde; letter-spacing: 2px; }
.plan-selection { border-bottom: 2px solid #e9ebef; padding-bottom: 25px; margin-bottom: 35px; }
.plan-selection:last-child { border-bottom: 0px; margin-bottom: 0px; padding-bottom: 0px; }
.plan-data { position: relative; }
.plan-data label { font-size: 20px; margin-bottom: 15px; font-weight: 400; }

.plan-price { position: absolute; right: 0px; color: #094bde; font-size: 20px; font-weight: 700; letter-spacing: -1px; line-height: 1.5; bottom: 43px; }
.term-price { bottom: 18px; }
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
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">GoShopping</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('driver/driver_logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('driver/driver_profile'); ?>">
                  <span data-feather="home"></span>
                  Account Overview <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('driver/driver_profile_deliveries/');echo $driver_id;  ?>">
                  <span data-feather="truck"></span>
                 Available Deliveries
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Driver Dashboard</h1>

          </div>

      <div class="row match-height">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="box">
                        <h3 class="box-title">Personal Details</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <label for="name">Name: <?php echo $this->session->userdata('driver_full_name'); ?></label>
                                <br>
                              <label for="EmailAddress">Email Address: <?php echo $this->session->userdata('driver_email_address'); ?></label>
                               <br>
                              <label for="age">Age: <?php echo $this->session->userdata('driver_age'); ?></label>
                               <br>
                              <label for="cNumber">Contact Number: <?php echo $this->session->userdata('driver_phone_number'); ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <h3 class="box-title">Available Deliveries</h3>
                        <div class="plan-selection">
                            <div class="plan-data">
                                <label for="Available Deliveries">Amount of Deliveries Currently Available: <?php echo $amount_orders;?> </label>
                                <p class="plan-text">
                               <a href="<?php echo base_url('driver/driver_profile_deliveries/');echo $driver_id;  ?>">
<button class="btn btn-sm btn-outline-success">View Deliveries</button>
</a>
                            </div>
                        </div>
                    </div>      
                </div>
</div>
        </main>
      </div>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>