<style type="text/css">
body{
 background:#dae3e4;
}
.steps ul {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between; }
  .steps ul li {
    width: 330px; }
    .steps ul li a {
      text-decoration: none;
      display: block;
      background: #f8f8f8;
      text-align: center;
      padding: 8px 0; }
    .steps ul li:hover a {
      background: #1ed760; }
      .steps ul li:hover a h3 {
        color: #fff; }
  .steps ul .current a {
    background: #1ed760; }
    .steps ul .current a h3 {
      color: #fff; }

display-flex, .select-icon, .select-icon i, .form-radio input + label figure, .form-flex, .steps ul, .actions ul li a, .form-row {
  display: flex;
  display: -webkit-flex; }

/* @extend list-type-ulli; */
list-type-ulli, .steps ul, .actions ul {
  list-style-type: none;
  margin: 0;
  padding: 0; }



h3 {
  font-size: 18px;
  color: #999999;
  cursor: pointer; }





.steps ul {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between;


   }
  .steps ul li {
    width: 330px; }
    .steps ul li a {
      text-decoration: none;
      display: block;
      background: #f8f8f8;
      text-align: center;
      padding: 10px 0; }
    .steps ul li:hover a {
      background: #1ed760; }
      .steps ul li:hover a h3 {
        color: #fff; }
  .steps ul .current a {
    background: #1ed760; }
    .steps ul .current a h3 {
      color: #fff; }

  .steps ul li {
    width: 100%; }
.stepper{
        
        width: 100%;
        pointer-events: auto;
        background-color: #dae3e4;
        background-clip: padding-box;
        border: 0.5px solid rgba(0,0,0,.2);
        border-radius: 1.1rem;
        outline: 0;
         }

.box { background-color: #fff; border-radius: 8px; border: 2px solid #e9ebef; padding: 50px; margin-bottom: 40px; }
    .box-title { margin-bottom: 30px; text-transform: uppercase; font-size: 16px; font-weight: 700; color: #000; letter-spacing: 2px; }
.box-section { border-bottom: 2px solid #e9ebef; padding-bottom: 25px; margin-bottom: 35px; }
.box-section:last-child { border-bottom: 0px; margin-bottom: 0px; padding-bottom: 0px; }
.box-data { position: relative; }
.box-data label { font-size: 20px; margin-bottom: 15px; font-weight: 400; }

</style>
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
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
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