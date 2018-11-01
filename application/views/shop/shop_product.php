<style type="text/css">

ul {
	list-style-type: none;
}

a {
	color: #90A4AE;
	text-decoration: none;
}



h1 a {
 	font-size: 16px;
 }

 .accordion {
 	width: 100%;
 	max-width: 360px;
 	margin: 30px auto 20px;
 	background: #FFF;
 	-webkit-border-radius: 4px;
 	-moz-border-radius: 4px;
 	border-radius: 4px;
 }

.suggested{
	padding-top:160px; 
}
</style>
<header>

      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo base_url('shop/shop_index'); ?>" class="navbar-brand d-flex align-items-center">
            
            <strong>GoShopping</strong>
          </a>

        </div>
      </div>
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
                <div class="card-body">
                <span>Current Price<h5>&euro; <?php echo $productinfo['product_price'] ?></h5><button type="button" class="btn btn-sm btn-outline-success">Add to cart</button></span>
                

                </div>
              </div>
	</div>
	<hr>
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-left">
	<h1 class="display-4"><?php echo $productinfo['product_name'] ?></h1>
	<a href="#" class="badge badge-info"><?php echo $productinfo['product_category_name'] ?></a>
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
	<h4>Other Items from the <?php echo $productinfo['product_category_name'] ?> category</h4>
	<div class="row">
		<div class="col-md-4 col-sm-6">
			              <div class="card ">
                <div class="card-img-top">
                     <?php echo $related['1']['product_name'] ?>
                </div>
                <div class="card-body">
                <span>Current Price<h5>&euro; </h5><button type="button" class="btn btn-sm btn-outline-secondary">View</button></span>
                

                </div>
              </div>
		</div>
		<div class="col-md-4 col-sm-6">
					              <div class="card ">
                <div class="card-img-top">
                     
                </div>
                <div class="card-body">
                <span>Current Price<h5>&euro; <?php echo $productinfo['product_price'] ?></h5><button type="button" class="btn btn-sm btn-outline-secondary">View</button></span>
                

                </div>
              </div>
		</div>
		<div class="col-md-4 col-sm-6">
					              <div class="card ">
                <div class="card-img-top">
                     
                </div>
                <div class="card-body">
                <span>Current Price<h5>&euro; <?php echo $productinfo['product_price'] ?></h5><button type="button" class="btn btn-sm btn-outline-secondary">View</button></span>
                

                </div>
              </div>
		</div>
	</div>
	</div><!--End of suggested -->

				<?php

				 // foreach ($related['1'] as $name) {
					// echo $name;
				 ?>
    </div>
	</div>
