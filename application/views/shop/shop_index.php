  <style type="text/css">
:root {
  --jumbotron-padding-y: 3rem;
}
.album{
background-color: #9e9e9e0f;
}

.jumbotron {

padding: 30px 15px;
  margin-bottom: 10px;
  color: inherit;
  background-color: #fff;
  text-align: center;
  background-size: cover;

}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: calc(var(--jumbotron-padding-y) * 2);
    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}
/*
.card-img-top{
background-color: #424242;
padding: 50px;
}
.card-img-top h5{
  color: #fff;
}

*/
.feather {
  width: 20px;
  height: 20px;

}
.card{
  margin-bottom: 1.875rem;
  border-radius: 0;
  box-shadow: 0 10px 40px 0 rgba(62, 57, 107, 0.07), 0 2px 9px 0 rgba(62, 57, 107, 0.06);
}
}
  </style>
  <?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>
  <body>
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

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Featured Item</h1>
          <p class="lead text-muted">

        </p>
          <p>
            <a href="#" class="btn btn-outline-secondary my-2">View</a>
          </p>
        </div>
      </section>

      <div class="album py-5">
        <div class="container">
        <h2 class="text-center" >Choose From Our Categories</h2>
        <hr>
        <div class="row match-height">
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/FreshPears7Pack_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">Fresh Food</h3>
            <p class="card-text">Fruit, Vegetables & Meat.</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>2">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
   <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center " style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/vanillaIcecream_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">Frozen Food</h3>
            <p class="card-text">Frozen Fruit, Vegetables, Meals and Desserts.</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>1">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center " style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/cereal_image.png') ?>" alt="element 02" width="225"class="mb-1">
            <h3 class="card-title">Food Cupboard</h3>
            <p class="card-text">Cereals, Canned food and Pasta.</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>3">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/7Up_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">Drinks</h3>
            <p class="card-text">Water, Fizzy drinks and Juices</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>4">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/ariel_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">Household Goods</h3>
            <p class="card-text">Washing Detergent, Soap and Shower Gels</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>5">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/hand_cream_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">Health &amp; Beauty</h3>
            <p class="card-text">Vitamins, Make-up and Childrens Products</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>6">
            <button class="btn btn-outline-success my-2">View Products</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Row -->
 <!--          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Fresh Food</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">

                    <a href="<?php //echo base_url('shop/shop_category_items/'); ?>2">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
            <!-- <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Frozen Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php //echo base_url('shop/shop_category_items/'); ?>1">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                     <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
          <!--   <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Food Cupboard</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php //echo base_url('shop/shop_category_items/'); ?>3">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
<!-- 
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Drinks</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                    <a href="<?php// echo base_url('shop/shop_category_items/'); ?>4">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
            <!-- <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Household Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                     <a href="<?php //echo base_url('shop/shop_category_items/'); ?>5">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
            <!-- <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Health &amp; Beauty</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="<?php// echo base_url('shop/shop_category_items/'); ?>6">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4

            </div> --><!-- end of row -->
            
        <h2 class="text-center" style="color: #212529;">Christmas Offers  <span data-feather="gift"></span>
</h2>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/galaxy.png') ?>" alt="element 02" width="225" class="mb-1">
            <br>
            <br>
            <h3 class="card-title">Galaxy Large Selection Box</h3>
            <p class="card-text">Price: €6.80</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>5">
            <button class="btn btn-outline-success my-2">View Product</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
          <br>
            <img src="<?php echo base_url('../../assets/images/mince-pies.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">6 Mince Pies</h3>
            <p class="card-text">Price: €2.85</p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>6">
            <button class="btn btn-outline-success my-2">View Product</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 <!--       <div class="row">
             <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Ben And Jerry's Peanut Butter Cup</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php// echo base_url('shop/Get_product_by_id/5/1'); ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
                       <!--  <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Birds Eye Steam Fresh Broccoli Green Beans And Sweetcorn </h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php// echo base_url('shop/Get_product_by_id/6/1'); ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
      
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4-->
            <!-- <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Frozen Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div> --><!--End ofcol4

</div>-->

          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>GoShopping</p>
      </div>
    </footer>

     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
