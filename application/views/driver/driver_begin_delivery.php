<?php
$driver_id=$this->session->userdata('driver_id');

if(!$driver_id){

  redirect('driver/driver_login');
}

 ?>
 <html>
  <!--CSS-->
  <?php echo link_tag('/assets/css/driver_begin_delivery.css'); ?>
  <body>
<?php 
$addressArr=array();
$orderIdArray=array();
foreach($addresses as $address){
  $oID=array('order_id'=>$address['order_id']);
  $myArray=array(
    'street'=>$address['street'],
    'county'=>$address['county'],
    'eircode'=>$address['eircode'],
    'lat'=>$address['latitude'],
    'lng'=>$address['longitude'],
    'customer'=>$address['user_full_name']
    );
  array_push($addressArr, $myArray);
  array_push($orderIdArray, $oID);
}
  $infoForMap=json_encode($addressArr);
 $orderids=json_encode($orderIdArray);
  //  array_push($addressArr, $myArray);
  //  json_encode($addressArr);
  // $list= $addressArr;
  // print_r($list);
 // print_r(json_encode($addressArr));
  ?>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 d-none d-md-block sidebar">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 border-bottom">
            <h1 class="h2 ml-3">Your Deliveries</h1>


          </div>
          <div class="sidebar-sticky">
          <!--Php to loop through each order and display the information to the driver -->
                    <?php foreach($addresses as $address){?>
            <div class="card card-inverse card-info m-3">
                    <div class="card-block">
                        <h4 class="card-title m-3"><?php echo $address['user_full_name']?></h4>
                        <div class="meta card-text m-3">
                            <a>Address:<br><?php echo $address['street']?></a>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a>Delivery Frequency:<br><?php echo $address['frequency']?></a>
                        <button class="btn btn-outline-info float-right btn-sm">Call Customer</button>
                    </div>
              </div>
                <?php } ?>

          </div><!-- SideBar Sticky -->
        </nav>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-3 mr-0" href="<?php echo base_url('driver/driver_profile'); ?>">GoShopping</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('driver/driver_logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>
        <main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            

          </div>
  <div id="map"></div>
  <div id="control_panel" >
<div id="directions_panel">
  <h1 class="h2 ml-3">Route Breakdown</h1>
</div>
<div>
<button onclick="compDeliveries();" class="btn btn-success float-right btn-sm">Deliveries Complete</button>
                    </div>
</main>
  







<script>
//Map Is initialised on Load of the page
 function initMap(){
  var directionsService = new google.maps.DirectionsService;
  var directionsDisplay = new google.maps.DirectionsRenderer;

      //Assign & Parse the PHP info for the Map from the DB
var MapDetails= '<?php echo $infoForMap;?>';
var parsed=JSON.parse(MapDetails);
var parsedLength=parsed.length;
var endParsed= (parsedLength -1);
// console.log(parsed[0].street);

//Initialising the map with a focus on Dublin
var map = new google.maps.Map(document.getElementById('map'), {
  center: {
    lat: 53.3440,
    lng: -6.2672
  },
  zoom: 8
});
 directionsDisplay.setMap(map);
 var waypts = [];
 //Loop Through and set the waypoints excluding the last 
        for (var i = 0; i <= endParsed-1; i++) {
            street = parsed[i].street;
            county = parsed[i].county;

            waypts.push({
              location: street+" "+county,
              stopover: true
            });

        }

//Destination (The excluded last delivery address is set for the End destination)
EndDest =parsed[endParsed].street+" "+parsed[endParsed].county;
//Set Origin as the location for Musgraves warehouse
    var request = {
        origin: "St. Margaret's Road, Ballymun, Dublin, D11 FN84",
       destination: EndDest,
        waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: 'DRIVING'
    };
//Displaying th Routes to be taken by the driver and expected travel time
 directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        var route = response.routes[0];
        var summaryPanel = document.getElementById("directions_panel");
        // For each route, display summary information.
        for (var i = 0; i < route.legs.length; i++) {
          var routeSegment = i + 1;
          summaryPanel.innerHTML += "<b>Route Segment: " + routeSegment + "</b><br />";
          summaryPanel.innerHTML += route.legs[i].start_address + " to ";
          summaryPanel.innerHTML += route.legs[i].end_address + "<br />";
          summaryPanel.innerHTML += "Expected Travel Time: " +route.legs[i].duration.text + "<br /><br />";
        }
      } else {
        alert(status);
      }
    });
  
}//End of init map

//Order ID's for each selected order- Used for updating the order status in the Database

function compDeliveries(){
  var orderNums= '<?php echo $orderids;?>';
var parseID= JSON.parse(orderNums);
        $.ajax({
                url : "<?php echo base_url('driver/driver_complete_deliveries') ?>",
                type : "POST",
            data: {"orderInfo": parseID},
            success: function(result){
            //alert(result);
            window.location.href="<?php echo site_url('driver/driver_profile');?>";

            } ,error: function(xhr, status, error) {
              alert(status);
            },
          });
}
</script>
  <!-- Script Used For Maps-->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CZH-s3lLoi-aFiWykonbIlRx1HfItWM&libraries=places&callback=initMap"
        async defer></script> 
  </body>