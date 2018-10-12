<style type="text/css">
.register{
    background: -webkit-linear-gradient(left, #D3CCE3, #E9E4F0);
    margin-top: 3%;
    padding: 3%;
}

.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}

.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}

</style>
</head>
<body>
 <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">GoShopping.ie</h5>
    <a class="btn btn-outline-primary" href="<?php echo base_url('user/login_view'); ?>">Log In</a>
</div>
<!--End of nav area -->

<?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <!--   <img src="" alt=""/> -->
                <h3>GoShopping.ie</h3>
                <p>Text here</p>
                <a href="<?php echo base_url('user/index'); ?>">
                    <input type="submit" name="" value="Register" />
                    <br/>
                </a>
            </div>

            <div class="col-md-9 register-right">
                <div class="container">
                    <div class="container" id="home">
                        <h3 class="register-heading">Log In</h3>
                        <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail *" name="user_email_address" type="email" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password *" name="user_password" type="password" value="" required>
                                    </div>
                                </div>
                                <!--End of col-md-6-->

                                <!--Log In Button-->
                                <input class="btnRegister text-center" type="submit" value="Log In" name="login">
                        </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>