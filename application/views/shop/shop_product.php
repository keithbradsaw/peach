<?php echo link_tag('/assets/css/shop_product.css'); ?>
<?php $user_id=$this->session->userdata('user_id');?>
 <header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <a class="navbar-brand" href="#">GoShopping</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('shop/shop_index'); ?>">Store <span class="sr-only">(current)</span></a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('user/user_profile'); ?>">Account</a>
      </li>
    </ul>
    <span class="navbar-text">
 
      <a href="<?php echo base_url('shop/shop_cart/').$this->session->userdata('user_id')  ?>" id="cart"><span data-feather="shopping-cart"></span><?php echo $this->session->userdata('cart_count') ?></a>
  
    </span>
  </div>
</nav>
    </header>
<!--- Product Name-->
<div class="container-fluid padding">
<div class="row text-center">
	
	<hr>
</div>
</div>

<!--- Product -->
<div class="container-fluid padding">
<div class="row text-center">
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="pro">
              <div class="card mb-4 shadow-sm">
                <div class="card-img-top">
                     <img src="<?php echo base_url('../../assets/images/').$productinfo['product_image']; ?> "/>
                </div>

              </div>
	</div>
	<hr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
	<h1 class="display-4"><?php echo $productinfo['product_name'] ?></h1>
	<a href="#" class="badge badge-info"><?php echo $productinfo['product_category_name'] ?></a>
	    <div class="card-body">
            <span>Current Price
            <h5>&euro;<span id="price" value="<?php echo $productinfo['product_price'] ?>"><?php echo $productinfo['product_price'] ?></span>
            </h5>
            	<input id="qty" style="width:40px;" type="number" value="1" min="1">
         <button id="addtocart" type="button" class="btn btn-sm btn-outline-success add_to_cart" data-pid="<?php echo $productinfo['product_id'] ?>" data-uid="<?php echo $user_id ?>"
          			onclick="addtocart();">
         Add to cart</button>

            </span>
        </div>
<hr>
<div class="container ">
    <div class="panel-group" id="productInfo">
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#productInfo" data-target="#info0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Product Information</a>
              </h4>

            </div>
            <div id="info0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary"><?php echo $productinfo['product_long_desc'] ?></span></h5>

                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#productInfo" data-target="#info1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Nutritonal Information &amp; Ingredients</a>
              </h4>

            </div>
            <div id="info1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary"><?php echo $productinfo['product_ni_i'] ?></span></h5>

           
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#productInfo" data-target="#info2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Storage Information</a>
              </h4>

            </div>
            <div id="info2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">
                     <h5><span class="label label-primary"><?php echo $productinfo['product_si'] ?></span></h5>

     
                </div>
            </div>
        </div>

        
    </div>
</div><!--End of dropdown for product info -->
	<div class="container suggested">
	
	<div class="row">
<a href="<?php echo base_url('shop/shop_category_items/').$productinfo['product_category_id']; ?>">
  <button class="btn btn-outline-secondary"><h5>Back to the <?php echo $productinfo['product_category_name'] ?> category</h5></button>
</a>
	</div><!--End of suggested -->
    </div>
	</div>
<script type="text/javascript">

	function addtocart(){
			var cartbtn = document.querySelector('#addtocart');
			var user_id = cartbtn.dataset.uid;
			var product_id = cartbtn.dataset.pid;
			var price = document.getElementById("price").textContent;
			var qty = $('#qty').val();
			var total_price = qty*price;
			
			var dataString = { 
			user_id  : user_id,
			 product_id : product_id,
			 total_price : total_price, 
			 qty : qty,
			  price : price
			};

			

			$.ajax({
				        url : "<?php echo base_url('shop/addto_shop_cart') ?>",
				        type : "POST",
						data: {"cart_item": dataString},
						success: function(result){
						alert("New Item Added To Cart!");
				  	//window.location.href="<?php echo site_url('shop/addto_shop_cart');?>";

						} ,error: function(xhr, status, error) {
							alert(status);
						},
					});
		}
				


</script>
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>