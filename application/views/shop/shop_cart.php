
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
 
      <a href="<?php echo base_url('shop/shop_cart'); ?>" id="cart"><span data-feather="shopping-cart"></span><?php echo $this->session->userdata('cart_quantity') ?></a>
  
    </span>
  </div>
</nav>
    </header>

   <div class="card shopping-cart">

            <div class="card-body">
                    <!-- PRODUCT -->
                
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="<?php echo base_url('../../assets/images/').$this->session->userdata('product_image') ?>" alt="Product Image" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong><?php echo $this->session->userdata('product_name'); ?></strong></h4>
                            <h4>
                                <small><?php echo $this->session->userdata('product_ni_i') ?></small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>EUR <span id="price"><?php echo $this->session->userdata('price') ?>0</span> <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                  
                                    <input id="qty" onChange="changeOnP()" type="number" step="1" max="99" min="1" value="<?php echo $this->session->userdata('qty') ?>" title="Qty" class="qty"
                                           size="4">
                                    
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-danger btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->

   <!--              <div class="float-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div> -->
            </div>
            <div class="card-footer">
                <div class="float-right" style="margin: 10px">
                    <a href="" class="btn btn-success pull-right">Checkout</a>
                    <div class="float-right" style="margin: 5px">
                        Total price: <b id="total_price">€<?php echo $this->session->userdata('price') ?>0</b>
                      <?php   $test =$this->session->all_userdata();
                      print_r($test);
                                                        ?>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">

    function changeOnP(){
            var price = document.getElementById("price").textContent;
            var qty = $('#qty').val();
            var total_price = qty*price;
           document.getElementById("total_price").innerHTML = "€"+total_price+"";


            alert(total_price);
        }
                


</script>
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>