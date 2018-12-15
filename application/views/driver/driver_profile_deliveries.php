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
<!--Profile CSS-->
    <?php echo link_tag('/assets/css/profile_navbar.css'); ?>
  </head>
<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Peach</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo base_url('driver/driver_logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('driver/driver_profile'); ?>">
                  <span data-feather="home"></span>
                  Account Overview <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="<?php echo base_url('driver/driver_profile_deliveries/');echo $driver_id;  ?>">
                  <span data-feather="truck"></span>
                 Available Deliveries
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
       <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Choose From The Available Deliveries</h1>
          </div>

      <table class="table">
  <thead class="thead-dark">
    <tr>
    <!--Order No will be a combination of theorder ids  -->
      <th scope="col">Order Number</th>
      <th scope="col">Order Price</th>
      <th scope="col">Destination(Eircode)</th>
      <th scope="col">Delivery Frequency</th>
      <th scope="col">Customer</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <?php foreach ($available_orders as $order) { 
   
    ?>
      
  <tbody>
    <tr>
      <th class="orderid" scope="row"><?php echo $order['order_id'];?></th>
      <td>€<?php echo $order['total_payable'];?></td>
      <td class=""><?php echo $order['eircode'];?></td>
      <td><?php echo $order['frequency'];?></td>
      <td><?php echo $order['user_full_name'];?></td>
      <td><button class="btn btn-outline-primary addTo" data-did="<?php echo $driver_id ?>"
       data-did="<?php echo $order['order_id'];?>">Add to My deliveries</button></td>
    </tr>
  </tbody>
<?php  } ?>
</table>
      <a href="<?php echo base_url('driver/driver_begin_delivery') ?>">
        <button class="btn btn-success float-right">Begin Delivery</button>
        </a>
        </main>
      </div>
    </div>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script type="text/javascript">
$(".addTo").click(function() {
    var delivbtn = document.querySelector('.addTo');
    var $driver_id = delivbtn.dataset.did;
    var $row = $(this).closest("tr");    // Finds the row
    var $orderid = $row.find(".orderid").text(); // Find the text
    // check for id
   // alert($orderid);

    //Ajax to controller to assign driver id to order

    var dataString = { 
      driver_id  : $driver_id,
       order_id : $orderid
      };
      //alert($orderid);


        $.ajax({
                url : "<?php echo base_url('driver/driver_adding_to_delivery') ?>",
                type : "POST",
            data: {"deliveryInfo": dataString},
            beforeSend: function(){
     return confirm("By clicking OK you will be Obligated to Complete This Delivery!");
              },
            success: function(result){
      $row.find(".addTo").hide();
           

            } ,error: function(xhr, status, error) {
              alert(status);
            },
          });
    });//End of addto 
  </script>