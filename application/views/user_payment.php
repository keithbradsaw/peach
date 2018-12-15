<?php echo link_tag('/assets/css/user_steps.css'); ?>
</head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 mx-auto">
                  <div class="steps clearfix stepper" style="padding-top: 10px; padding-bottom: 9px;">
                                <ul role="tablist">
            <li role="tab" class="first current error" aria-disabled="false" aria-selected="true">
              <a id="signup-form-t-0" href="#signup-form-h-0" aria-controls="signup-form-p-0">
                <span class="current-info audible"> </span>
                <h3 class="title">
                    Profile Details <span style="padding-top: 10px; " data-feather="check"></span>
                </h3>
              </a>
            </li>
                <li role="tab" class="current" aria-disabled=""><a id="signup-form-t-1"  aria-controls="signup-form-p-1"><h3 class="title">
                    Delivery Address <span style="padding-top: 10px; " data-feather="check"></span>
                </h3></a></li>
                <li role="tab" class="disabled last" aria-disabled="true"><a id="signup-form-t-2"  aria-controls="signup-form-p-2"><h3 class="title">
                    Payment Details <span style="padding-top: 10px;" data-feather="x-circle" ></span>
                </h3></a></li>
                </ul>
                    </div><!--  For stepper-->
                    <br>

<div class="row">
  
<div class="col-lg-12 col-sm-8 col-md-6 mx-auto">
                    <div class="box">
<form action="<?php echo base_url('user/user_payment'); ?>" method="post" >
                   
                <h2 class="box-title text-center">Add Your Payment Details</h2>
              
                         <input name="user_id" type="hidden" value="<?php echo $this->session->userdata('user_id');  ?>" >
                        <div class="form-group">
                            <label for="street" class="control-label">Name On Card</label>
                            <input id="card_name" name="card_name" type="text" class="form-control"  value="" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="card_number" class="control-label">Card Number</label>
                            <input id="card_number" name="card_number" type="tel" class="form-control" value="" required>
                        
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="card_exp_date" class="control-label">Expiration</label>
                                    <input id="card_exp_date" name="card_exp_date" type="tel" class="form-control" value="" placeholder="MM/YY" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="country" class="control-label">CVV</label>
                                <div class="input-group">
                                    <input id="card_cvv" name="card_cvv" type="tel" class="form-control" value="" placeholder="3 Digit Code on Back Of card" required>
                                </div>
                            </div>
                             <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                <span id="payment-button-amount">Complete Signup</span>
                            </button>
                        </div>

                    </form>
                    </div>
                    </div>
</div>
          </div>
      </div>
    <!--End Of Row -->
</div><!--Container-->
<!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>