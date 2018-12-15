<?php
$user_id=$this->session->userdata('user_id');

if(!$user_id){

  redirect('user/login_view');
}

 ?>

 <!--Shop CSS-->
  
    <style type="text/css">
.jumbotron {
background: url(<?php echo base_url('../../assets/images/christmas.jpg') ?>) no-repeat center center;
padding: 30px 15px;
  margin-bottom: 10px;
  color: inherit;
  background-color: #fff;
  text-align: center;
  background-size: cover;

}
    </style>
    <?php echo link_tag('/assets/css/shop_index.css'); ?>

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

          <h1 class="jumbotron-heading mt-3">Christmas Range</h1>
          <p class="lead text-muted">

        </p>
          <p>
            <a href="<?php echo base_url('shop/shop_category_items/'); ?>7" class="btn btn-outline-light my-2">View</a>
          </p>
        </div>
      </section>

      <div class="album py-5">
        <div class="container">
        <h2 class="text-center">Choose From Our Categories</h2>
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
            <img src="<?php echo base_url('../../assets/images/36 600x400.png') ?>" alt="element 02" width="225" class="mb-1 ">
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
            
        <h2 class="text-center" style="color: #212529;">Christmas Offers  <span data-feather="gift"></span>
</h2>
        <hr>
        <div class="row">
            <div class="col-md-6 col-sm-12">
      <div class="card border-secondary text-center" style="height: 313.563px;">
        <div class="card-content">
          <div class="card-body">
            <img src="<?php echo base_url('../../assets/images/galaxy_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <br>
            <br>
            <h3 class="card-title">Galaxy Large Selection Box</h3>
            <p class="card-text">Price: €6.80</p>
            <a href="<?php echo base_url('shop/Get_product_by_id/')."23/7"?>">
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
            <img src="<?php echo base_url('../../assets/images/mince_pies_image.png') ?>" alt="element 02" width="225" class="mb-1">
            <h3 class="card-title">6 Mince Pies</h3>
            <p class="card-text">Price: €2.85</p>
            <a href="<?php echo base_url('shop/Get_product_by_id/')."24/7"?>">
            <button class="btn btn-outline-success my-2">View Product</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
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
