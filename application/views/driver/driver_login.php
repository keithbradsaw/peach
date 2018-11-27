
  <?php echo link_tag('/assets/css/login.css'); ?>
</head>
<body>

<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
    <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav ">
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/index'); ?>">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/login_view'); ?>">User Log In</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('driver/driver_login'); ?>">Driver Log In</a> </li>
      </ul>
          </div>
  </div>
      </nav>
</section>

<section class="banner-sec">
  <div class="container">
            <div class="col-md-12 top-slider"  style="padding-top: 25px;">
             <div class="myform form ">
              <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Driver Log In</h1>
                        </div>
                        <br>
                    </div>
               <form action="<?php echo base_url('driver/login_driver'); ?>" method="post" name="login">

            <div class="form-group">
              <input class="form-control" placeholder="E-mail *" name="driver_email_address" type="email" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password *" name="driver_password" type="password" value="" required>
            </div>          

       
                        <div class="col-md-12 text-center ">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Log In</button>
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
                            <p class="text-center">Don't Have An Account? <a href="<?php echo base_url('driver/driver_register'); ?>" id="signin">Register here</a></p>
                        </div>
                    </form>
                    </div>
      </div>
          </div>
  </div>
  </div>
      </section>
