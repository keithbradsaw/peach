<?php echo link_tag('/assets/css/register.css'); ?>
</head>
<body>

<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
    <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav ">
        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/login_view'); ?>"> User Log In</a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('driver/driver_login'); ?>"> Driver Log In</a> </li>
      </ul>
          </div>
  </div>
      </nav>
</section>
<section class="banner-sec">
        <div class="container">
<br>
                 <div class="logo mb-3">
                        <div class="col-md-12"style="padding-top: 15px; color: #fff;">
                            <h1>How It all Works</h1>
                        </div>
                    </div>
    <div class="row">
            <div class="col-md-3"  style="padding-top: 35px;">
        <div class="card"><!-- <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel.jpg" alt=""> -->
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step1.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat lobortis augue in finibus. Praesent interdum, turpis eget dignissim elementum, mi leo venenatis velit, a suscipit libero erat vitae arcu.</a></h2>
                  </div>
            
          </div>
              </div>
        <div class="card"> <!-- <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/travel.jpg" alt=""> -->
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step2.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat lobortis augue in finibus. Praesent interdum, turpis eget dignissim elementum, mi leo venenatis velit, a suscipit libero erat vitae arcu.</a></h2>
                  </div>
           
          </div>
              </div>
      </div>
            <div class="col-md-3"  style="padding-top: 35px;">
        <div class="card"> <!-- <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/business1.jpg" alt=""> -->
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step3.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat lobortis augue in finibus. Praesent interdum, turpis eget dignissim elementum, mi leo venenatis velit, a suscipit libero erat vitae arcu.</a></h2>
                  </div>
            
          </div>
              </div>
        <div class="card"> <!-- <img class="img-fluid" src="http://grafreez.com/wp-content/temp_demos/river/img/food.jpg" alt=""> -->
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step4.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat lobortis augue in finibus. Praesent interdum, turpis eget dignissim elementum, mi leo venenatis velit, a suscipit libero erat vitae arcu.</a></h2>
                  </div>
            
          </div>
              </div>
      </div>
            <div class="col-md-6 top-slider"  style="padding-top: 15px;">
             <div class="myform form ">
              <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Register for a Driver Account</h1>
                        </div>
                    </div>
               <form action="<?php echo base_url('driver/register_driver'); ?>" method="post" name="register">
        <div class="form-group">
              <input class="form-control" placeholder="Full Name *" name="driver_full_name" type="text" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail *" name="driver_email_address" type="email" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password *" name="driver_password" type="password" value="" required>
            </div>           
            <div class="form-group">
                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" required/>
            </div>

                <div class="form-group">
                  <input class="form-control" placeholder="Age *" name="driver_age" type="number" value="" required>
                </div>
                 <div class="form-group">
                  <input class="form-control" minlength="10" maxlength="10" placeholder="Mobile Number *" name="driver_phone_number" type="number" required>
              </div>

                        <div class="form-group">
                            <p class="text-center">By signing up you accept that your information will be stored on our Database </p>
                        </div>
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Register</button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p class="text-center">
                               
                            </p>
                        </div>
                        <div class="form-group">
                            <p class="text-center">Already Have An Account? <a href="<?php echo base_url('driver/driver_login'); ?>" id="signin">Sign In here</a></p>
                        </div>
                    </form>
                    </div>
      </div>
          </div>
  </div>
      </section>
