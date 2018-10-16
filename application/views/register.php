<style type="text/css">
  .card{float: left; width:100%}
.navbar {border: medium none; float: left; margin-bottom: 0px; width: 100%;  border-radius: 0}
.title-large {font-size: 20px; margin: 10px 0 5px; line-height: 27px; color: #141517;}
.title-small { color: #141517; font-size: 16px; font-weight: 400; line-height: 23px; margin: 6px 0 0;}
.title-x-small {font-size: 18px; margin: 0px;}
.title-large a, .title-small a, .title-x-small a{color: inherit}
.banner-sec{float: left;
 width: 100%;
  background: url("https://images.unsplash.com/photo-1508928807352-24a4adbb6795?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bee28b7b28285dd496417cbfefae21b2&auto=format&fit=crop&w=1500&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.card-block{padding:0 10px 10px;}
.card-text{margin: 0}
.banner-sec .card-img-overlay{padding: 0; top: 3px; left: 7px; height: 20%}

header{float: left; width:100%}
.small-top{ border-bottom: 1px solid #2b2b2b;float: left; width: 100%; background: #000}
.small-top .social-icon{float: right;}
.small-top .social-icon a {border-left: 1px solid #2b2b2b; color: #ca1b1b; float: left; padding: 6px 13px;}
.small-top .social-icon a:last-child {border-right: 1px solid #2b2b2b;}
.small-top .social-icon a:hover {color:#FD3A13; text-decoration: none;}
.small-top .date-sec {font-size: 13px; font-weight: 600; float: left; margin-top: 4px; color: #898989}
.top-head{background: #141517; width: 100%; float: left; height: 100px;}
.top-head h1 {color: #fff; font-size: 36px; font-weight: 600; margin: 18px 0 0;}
.top-head small{float: left; width: 100%; font-size: 14px; color: #c0c0c0; margin-top: 5px; margin-left: 5px;}
.top-head .admin-bar {text-align: right; margin-top: 22px;}
.top-head .admin-bar a {color: #fff; line-height: 49px; position: relative; padding:0 7px;}
.top-head .admin-bar a:hover{color: #ff0000}
.top-head .admin-bar a i{margin-right: 6px;}
.top-head .admin-bar .ping {background: #ff0000; border: 3px solid #141517; border-radius: 50%; height: 14px; position: absolute; right: 3px;    top: 13px; width: 14px; z-index: 1;}
.top-head .admin-bar img {float: right; height: 50px; width: 50px; margin-left: 18px;}
.top-nav{background: #fff; padding: 0; border-bottom: 1px solid #dbdbdb}
.top-nav .nav-link {padding-bottom: 0.7rem; padding-top: 0.7rem;}
.top-nav .navbar-nav .nav-item + .nav-item{margin-left:0}
.top-nav li a{color: #141517; text-transform: uppercase; font-size: 14px; font-weight: 700; padding: 0 10px; border-bottom: 2px solid #fff}
.top-nav li a:hover, .top-nav li a:focus, .top-nav li.active a{color: #141517; border-bottom: 2px solid #FD3A13 }

.top-slider .carousel-indicators{bottom: 0}
.top-slider .carousel-indicators li{border:1px solid #000;}
.top-slider .carousel-indicators .active{background:#000;}

.top-nav .btn {position: absolute;right: 0;top: -3px;border-radius:3px;}

.banner-sec{float: left; width:100%;}
.banner-sec .news-block{margin-bottom: 20px}
.banner-sec .news-block:last-child{margin-bottom: 0px}
.banner-sec .news-des {margin-bottom: 5px;}
.banner-sec .title-large{margin: 18px 0 0}


.banner-sec .card{
  margin-bottom:20px;
  position: relative;
        display: -ms-flexbox;
        display: flex;
        background-clip: padding-box;
        border: 0.5px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
}



.myform{
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #F7F7F7;
        background-clip: padding-box;
        border: 0.5px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
         }

                  .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
          form .error {
         color: #ff0000;
         }
</style>
</head>
<body>

<section class="top-nav">
    <nav class="navbar navbar-expand-lg py-0">
        <div class="container">
    <div class="collapse navbar-collapse" id="exCollapsingNavbar2">
            <ul class="nav navbar-nav ">
        <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/login_view'); ?>">Log In</a> </li>
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
