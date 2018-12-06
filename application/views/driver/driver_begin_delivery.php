<?php
$driver_id=$this->session->userdata('driver_id');

if(!$driver_id){

  redirect('driver/driver_login');
}

 ?>
 <html>
  <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>GoShopping.ie</title>
      <style type="text/css">
body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 48px 0 0; /* Height of navbar */
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
  }
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Content
 */

[role="main"] {
  padding-top: 48px; /* Space for fixed navbar */
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  padding-bottom: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);

}
  #map{
    height:400px;
    width:100%;
  }
  .card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
  </style>
  </head>
  <body>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 d-none d-md-block sidebar">
                  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 ">
            <h1 class="h2 ml-2">Your Deliveries</h1>

          </div>
          <div class="sidebar-sticky">
          <!--Php to loop through each order and display the information to the driver -->
                    <?php foreach($addresses as $address){?>
            <div class="card card-inverse card-info m-3">
                    <div class="card-block">
                        <h4 class="card-title m-3"><?php echo $address['user_full_name']?></h4>
                        <div class="meta card-text m-3">
                            <a><?php echo $address['street']?></a>
                        </div>
                        <div class="meta card-text m-3">
                            <button class="btn btn-outline-info  btn-sm">Call Customer</button>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Delivery Frequency:<br><?php echo $address['frequency']?></small>
                        <button class="btn btn-success float-right btn-sm">Complete Delivery</button>
                    </div>
              </div>
                <?php } ?>
<!--             <div class="card card-inverse card-info border-secondary  m-3">
                    <div class="card-block">
                        <h4 class="card-title m-3">Customer Name</h4>
                        <div class="meta card-text m-3">
                            <a>Address</a>
                        </div>
                        <div class="meta card-text m-3">
                            <button class="btn btn-outline-info  btn-sm">Call Customer</button>
                        </div>
                    </div>
                    <div class="card-footer">
                        <small>Deliveries Per Month:</small>
                        <button class="btn btn-success float-right btn-sm">Complete Delivery</button>
                    </div>
              </div> -->

          </div><!-- SideBar Sticky -->
        </nav>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Peach</a>
      
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
</main>
      </div>
    </div>




<?php 
$addressArr=array();
foreach($addresses as $address){
 //echo "User Id:".$address['user_id']."LAT:".$address['latitude']."LONG:".$address['longitude'] ;
  $myArray=array(
    'lat'=>$address['latitude'],
    'lng'=>$address['longitude'],
    'customer'=>$address['user_id']
    );
  array_push($addressArr, $myArray);
}
	$infoForMap=json_encode($addressArr);
 

	// 	array_push($addressArr, $myArray);
	// 	json_encode($addressArr);
	// $list= $addressArr;
	// print_r($list);
 // print_r(json_encode($addressArr));
	?>



<script>
 function initMap(){
      
var MapDetails= '<?php echo $infoForMap;?>';
var parsed=JSON.parse(MapDetails);
var parsedLength=parsed.length;
console.log(parsed.length);


var map = new google.maps.Map(document.getElementById('map'), {
  center: {
    lat: 53.3440,
    lng: -6.2672
  },
  zoom: 8
});


for (var i = 0; i < parsedLength; i++) {
  var lat = parsed[i].lat;
  var lng = parsed[i].lng;

  console.log(i, lat, lng);
  var marker = new google.maps.Marker({
    map: map,
    position: {
      lat: parseFloat(lat),
      lng: parseFloat(lng)
    },
    title: 'Hello World!'
  });
};

 // Check content
    //     if(props.content){
    //       var infoWindow = new google.maps.InfoWindow({
    //         content:props.content
    //       });


   // var locations = [];
 // locations.push
// Map options
      // var options = {
      //   zoom:8,
      //   center:{lat:53.3440,lng:-6.2672}
      // }

      // // New map
      // var map = new google.maps.Map(document.getElementById('map'), options);

      // // Listen for click on map
      // google.maps.event.addListener(map, 'click', function(event){
      //   // Add marker
      //   addMarker({coords:event.latLng});
      // });

      /*
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
      */

      // Array of markers

// for (var i = 0; i < parsedLength; i++) {
//   var lat = parsed[i].lat;
//   var lng = parsed[i].lng;

//   console.log(i, lat, lng);
//   var marker = new google.maps.Marker({
//     map: map,
//     position: {
//       lat: lat,
//       lng: lng
//     },
//     title: 'Hello World!'
//   });
// };
//       //For each address let coords = the geolocation and the content= persons name
      
      // var markers = [
      //   {
      //     coords:{lat:parsed[x]['lat'],lng:parsed[x]['lng']]},
      //     content:'<h1>Amesbury MA</h1>'
      //   }
      // ];

      // // Loop through markers
      // for(var i = 0;i < markers.length;i++){
      //   // Add marker
      //   addMarker(markers[i]);
      // }

      // // Add Marker Function
      // function addMarker(props){
      //   var marker = new google.maps.Marker({
      //     position:props.coords,
      //     map:map,
      //     //icon:props.iconImage
      //   });

        // Check for customicon
    //     if(props.iconImage){
    //       // Set icon image
    //       marker.setIcon(props.iconImage);
    //     }

    //     // Check content
    //     if(props.content){
    //       var infoWindow = new google.maps.InfoWindow({
    //         content:props.content
    //       });

    //       marker.addListener('click', function(){
    //         infoWindow.open(map, marker);
    //       });
    //     }
    //   }
    // }
}
  </script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9CZH-s3lLoi-aFiWykonbIlRx1HfItWM&callback=initMap"></script>

  </body>