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
	#map{
		height:400px;
		width:100%;
	}
</style>
  </head>
  <body>

  <div id="map"></div>
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