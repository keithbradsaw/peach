<?php echo link_tag('/assets/css/register.css'); ?>
</head>
<body>

<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
    <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav ">
        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/login_view'); ?>">User Log In</a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('driver/driver_login'); ?>">Driver Log In</a> </li>

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
        <div class="card" style="height: 110px;">
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step1.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Follow the registeration process to make an account</a></h2>
                  </div>
            
          </div>
              </div>
        <div class="card" style="height: 110px;"> 
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step3.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Add everything you need to your cart and set your delivery frequency.</a></h2>
                  </div>
           
          </div>
              </div>
      </div>
            <div class="col-md-3"  style="padding-top: 35px;">
        <div class="card" style="height: 110px;"> 
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step2.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Log In and view all the items in the store.</a></h2>
                  </div>
            
          </div>
              </div>
        <div class="card" style="height: 110px;"> 
                <div class="card-img-overlay"> <span class="badge badge-pill badge-danger">Step4.</span> </div>
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small"><a>Sit back and your groceries will arrive soon!</a></h2>
                  </div>
            
          </div>
              </div>
      </div>
            <div class="col-md-6 top-slider"  style="padding-top: 15px;">
             <div class="myform form ">
              <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Register For An Account</h1>
                        </div>
                    </div>
               <form action="<?php echo base_url('user/register_user'); ?>" method="post" name="register">
        <div class="form-group">
              <input class="form-control" placeholder="Full Name *" name="user_full_name" type="text" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="E-mail *" name="user_email_address" type="email" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password *" name="user_password" type="password" value="" required>
            </div>           
            <div class="form-group">
                <input type="password" class="form-control"  placeholder="Confirm Password *" value="" required/>
            </div>

                <div class="form-group">
                  <input class="form-control" placeholder="Age *" name="user_age" type="number" value="" required>
                </div>
                 <div class="form-group">
                  <input class="form-control" minlength="10" maxlength="10" placeholder="Mobile Number *" name="user_phone_number" type="number" value="" required>
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
                            <p class="text-center">Already Have An Account? <a href="<?php echo base_url('user/login_view'); ?>" id="signin">Sign In here</a></p>
                        </div>
                    </form>
                    </div>
      </div>
          </div>
  </div>
      </section>
