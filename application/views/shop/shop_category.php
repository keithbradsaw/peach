<style type="text/css">
  
  .card{
  margin-bottom: 1.875rem;
  border-radius: 0;
  box-shadow: 0 10px 40px 0 rgba(62, 57, 107, 0.07), 0 2px 9px 0 rgba(62, 57, 107, 0.06);
}
</style>

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
<?php $categoryid= $this->uri->segment(3); ?>
   <div class="container">
   <h2 class="text-center" >Choose From The Products below</h2>
    <div class="row">
<?php foreach($categoryProducts as $product): ?>
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url('../../assets/images/').$product['product_image']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title"><a href="<?php echo base_url('shop/Get_product_by_id/').$product['product_id']."/".$categoryid ?>" title="View Product">
                            <?php echo $product['product_name'] ?></a>
                            </h4>
                            <p class="card-text"><?php echo substr($product['product_long_desc'], 0, 255); ?></p>
                            <div class="">
                                <div class="col-12">
                                    <p class="btn btn-success btn-block">Price: €<?php echo $product['product_price'] ?></p>
                                </div>
                                <div class="col-12">
                                    <a href="<?php echo base_url('shop/Get_product_by_id/').$product['product_id']."/".$categoryid ?>" class="btn btn-light btn-block">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php endforeach ?>
  </div>
  </div>

     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>