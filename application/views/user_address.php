<?php echo link_tag('/assets/css/user_steps.css'); ?>
<!--Used In combination with the GeoCoding API -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 mx-auto">
                  <div class="steps clearfix stepper" style="padding-top: 10px; padding-bottom: 9px;">
                                <ul role="tablist">
            <li role="tab" class="first current error" aria-disabled="false" aria-selected="true"><a id="signup-form-t-0" href="#signup-form-h-0" aria-controls="signup-form-p-0"><span class="current-info audible"> </span><h3 class="title">
                    Profile Details <span style="padding-top: 10px; " data-feather="check"></span>
                </h3></a></li>
                <li role="tab" class="disabled" aria-disabled="false"><a id="signup-form-t-1"  aria-controls="signup-form-p-1"><h3 class="title">
                    Delivery Address <span style="padding-top: 10px;" data-feather="x-circle"></span>
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
                    <form id="myForm" action="<?php echo base_url('user/user_address'); ?>" method="post" >
                        <h3 class="box-title text-center">Add Your Delivery Address</h3>
                        <div class="box-section">
                            <div class="box-data">
                         <input name="user_id" type="hidden" value="<?php echo $this->session->userdata('user_id');  ?>" >
                        <div class="form-group">
                            <label for="street" class="control-label">House No. & Street</label>
                            <input id="street" name="street" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" >
                           
                        </div>
                        <div class="form-group">
                            <label for="county" class="control-label">County</label>
                            <input id="county" name="county" type="text" class="form-control" value="">
                        
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="eircode" class="control-label">Eircode</label>
                                    <input id="eircode" name="eircode" type="text" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="country" class="control-label">Country</label>
                                <div class="input-group">
                                    <input id="country" name="country" type="text" class="form-control" value="">
                                </div>
                                <br>
                            </div>
                            <input type="hidden" id="latitude" name="latitude" value="" />
                            <input type="hidden" id="longitude" name="longitude" value="" />

                        
                        </div>
                            <button id="payment-button" class="btn btn-lg btn-success btn-block" >
                                <span id="payment-button-amount">Next Step</span>
                            </button>
                            </div>
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
<script>
//First we get the eircode Value
//Then Assign the geo Locations
//Then Submit Form
$('#myForm').submit(function(e){
    e.preventDefault();
    var eircode = document.getElementById("eircode").value; 
var location=eircode+"+ire";
geocode(location);

  });


  function geocode(location){
   axios.get('https://maps.googleapis.com/maps/api/geocode/json',{
     params:{
       address: location,
       key:'AIzaSyA9CZH-s3lLoi-aFiWykonbIlRx1HfItWM'
     }
   })
   .then(function(response){
   //Logging the response
  console.log(response);
    
   //Getting the geolocation
   var lats =response.data.results[0].geometry.location.lat;
   var lngs = response.data.results[0].geometry.location.lng;

 $('#latitude').val(lats); 
  $('#longitude').val(lngs);
   $('#myForm').submit();



//alert(lats+"  "+lngs);
 //console.log(lngs);
   })
   .catch(function(error){
   alert(error);
   });
 };
</script>