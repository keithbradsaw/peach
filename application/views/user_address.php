</head>
  <body>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title text-center">Step 2. Now we Just need your delivery Address, <?php echo ucwords($this->session->userdata('user_full_name'));  ?></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo base_url('user/user_address'); ?>">

                        <fieldset>
                        <input name="user_id" type="hidden" value="<?php echo $this->session->userdata('user_id');  ?>" >
                            <div class="form-group"  >
                                <input class="form-control" placeholder="House No. & Street Name " name="street" type="text" autofocus>
                            </div>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="County" name="county" type="text" autofocus>
                            </div>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Eircode" name="eircode" type="text" autofocus>
                            </div>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Country" name="country" type="text" autofocus>
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Next Step" name="Next" >

                        </fieldset>
                    </form>
              

                </div>
            </div>
        </div>
    </div>
</div>
