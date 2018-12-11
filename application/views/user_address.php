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
      background: #fff;
      text-align: center;
      padding: 10px 0; }
    .steps ul li:hover a {
      background: #28a745; }
      .steps ul li:hover a h3 {
        color: #fff; }
  .steps ul .current a {
    background: #28a745; }
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
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
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
//THen Assign the geo Locations
//THen Submit Form
$('#myForm').submit(function(e){
    e.preventDefault();
    var eircode = document.getElementById("eircode").value; 
var location=eircode+"+ire";
geocode(location);

  });

// function eircodeToGeo(){
// var eircode = document.getElementById("eircode").value; 
// var location=eircode+"+ire";
// geocode(location);

// }



  




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