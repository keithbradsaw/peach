<style type="text/css">
 body{
    padding-top:4.2rem;
    padding-bottom:4.2rem;
    background: url("https://images.unsplash.com/photo-1508928807352-24a4adbb6795?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bee28b7b28285dd496417cbfefae21b2&auto=format&fit=crop&w=1500&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
        }
        a{
         text-decoration:none !important;
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
        border: 1px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
        max-width: 500px;
         }
    .moreInfo{
        position: relative;
        display: -ms-flexbox;
        display: flex;
        padding: 1rem;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color:  #F7F7F7;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.2);
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

<div class="container">
    <div class="row justify-content-md-center">
    <!-- Start of Left Col -->
    <div class="col-12 col-md-8 col-sm-12">
        <div id="">
                <div class="moreInfo">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>How It Works</h1>
                        </div>
                    
                    </div>
                    

                </div>
            </div>

    </div>
    <!--Start of Right Col -->
        <div class="col-12 col-md-4 col-sm-12">
            <div id="first">
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
            </div><!--End of  2nd col -->

            </div><!--End of  Row -->
            </div><!--End of  Container -->