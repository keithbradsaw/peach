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


header{float: left; width:100%}
.small-top{ border-bottom: 1px solid #2b2b2b;float: left; width: 100%; background: #000}
.top-head .admin-bar .ping {background: #ff0000; border: 3px solid #141517; border-radius: 50%; height: 14px; position: absolute; right: 3px;    top: 13px; width: 14px; z-index: 1;}
.top-head .admin-bar img {float: right; height: 50px; width: 50px; margin-left: 18px;}
.top-nav{background: #fff; padding: 0; border-bottom: 1px solid #dbdbdb}
.top-nav .nav-link {padding-bottom: 0.7rem; padding-top: 0.7rem;}
.top-nav .navbar-nav .nav-item + .nav-item{margin-left:0}
.top-nav li a{color: #141517; text-transform: uppercase; font-size: 14px; font-weight: 700; padding: 0 10px; border-bottom: 2px solid #fff}
.top-nav li a:hover, .top-nav li a:focus, .top-nav li.active a{color: #141517; border-bottom: 2px solid #FD3A13 }


.top-nav .btn {position: absolute;right: 0;top: -3px;border-radius:3px;}


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
        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('user/index'); ?>">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="<?php echo base_url('user/login_view'); ?>">Log In</a> </li>
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
                            <h1>Log In</h1>
                        </div>
                        <br>
                    </div>
               <form action="<?php echo base_url('user/login_user'); ?>" method="post" name="login">

            <div class="form-group">
              <input class="form-control" placeholder="E-mail *" name="user_email_address" type="email" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Password *" name="user_password" type="password" value="" required>
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
                            <p class="text-center">Don't Have An Account? <a href="<?php echo base_url('user/index'); ?>" id="signin">Register here</a></p>
                        </div>
                    </form>
                    </div>
      </div>
          </div>
  </div>
  </div>
      </section>
