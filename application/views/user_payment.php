</head>
  <body>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <h4 class="mb-3 text-center">Final Step! We Just Need Your Payment Details</h4>
          <form role="form" method="post" action="<?php echo base_url('user/user_payment'); ?>">
            <div class="row">
              <div class="col-md-6 mb-3">
              <input name="user_id" type="hidden" value="<?php echo $this->session->userdata('user_id');  ?>" autofocus>
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" name="card_name" placeholder="Name on Card" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Card number</label>
                <input type="text" class="form-control" name="card_number" placeholder="Card Number" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" name="card_exp_date" placeholder="MM/YY" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" name="card_cvv" placeholder="CVV" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Complete Registration</button>
          </form>
        </div>
      </div>
        </div>
    </div>
</div>
