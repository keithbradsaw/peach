  <style type="text/css">
:root {
  --jumbotron-padding-y: 3rem;
}
.album{
background-color: #E8EAF6;
}

.jumbotron {
  padding-top: var(--jumbotron-padding-y);
  padding-bottom: var(--jumbotron-padding-y);
  margin-bottom: 0;
  background-color: #fff;
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

.card-img-top{
background-color: #424242;
padding: 50px;
}
.card-img-top h5{
  color: #fff;
}
.feather {
  width: 20px;
  height: 20px;

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
          <h1 class="jumbotron-heading">Featured Items</h1>
          <p class="lead text-muted">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ipsum tellus, eleifend vel odio fermentum, mollis egestas nunc. Vivamus pharetra porta ex, eget interdum dui mattis et.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </section>

      <div class="album py-5">
        <div class="container">
        <h2 class="text-center" >Choose From a Category</h2>
        <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Fresh Food</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php echo base_url('shop/shop_category_items/'); ?>2">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Frozen Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php echo base_url('shop/shop_category_items/'); ?>1">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Food Cupboard</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php echo base_url('shop/shop_category_items/'); ?>3">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Drinks</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                    <a href="<?php echo base_url('shop/shop_category_items/'); ?>4">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Household Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Health &amp; Fitness</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->

            </div><!--end of row -->
            
        <h2 class="text-center" style="color: #212529;">Current Offers</h2>
        <hr>
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Ben And Jerry's Peanut Butter Cup</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php echo base_url('shop/Get_product_by_id/5/1'); ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
                        <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Birds Eye Steam Fresh Broccoli Green Beans And Sweetcorn </h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="<?php echo base_url('shop/Get_product_by_id/6/1'); ?>">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      </a>
                    </div>
      
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <span class="card-img-top">
                     <h5 class="flex-d text-center">Frozen Goods</h5>
                </span>
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div><!--End ofcol4-->

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
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>
