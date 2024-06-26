<!DOCTYPE html>
<html lang="en">
<?php
include 'head.php';
?>

<body>
<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

  <!-- Header -->
  <?php

  include 'header.php';

  ?>    <!-- Header / End -->


  <!-- Header -->
  <!-- Header / End -->

  <!-- Content -->
  <div id="content">

    <!-- Page Title -->
    <div class="page-title bg-dark dark">
      <!-- BG Image -->
      <div class="bg-image bg-parallax"><img src="http://assets.suelo.pl/soup/img/photos/bg-croissant.jpg" alt=""></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-4">
            <h1 class="mb-0">Checkout</h1>
            <h4 class="text-muted mb-0">Some informations about our restaurant</h4>
          </div>
        </div>
      </div>
    </div>

    <!-- Section -->
    <section class="section bg-light">

      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5">
            <div class="cart-details shadow bg-white stick-to-content mb-4">
              <div class="bg-dark dark p-4"><h5 class="mb-0">You order</h5></div>
              <table class="cart-table">
                <tr>
                  <td class="title">
                    <span class="name"><a href="#product-modal" data-toggle="modal">Pizza Chicked BBQ</a></span>
                    <span class="caption text-muted">26”, deep-pan, thin-crust</span>
                  </td>
                  <td class="price">$9.82</td>
                  <td class="actions">
                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="title">
                    <span class="name"><a href="#product-modal" data-toggle="modal">Beef Burger</a></span>
                    <span class="caption text-muted">Large (500g)</span>
                  </td>
                  <td class="price">$9.82</td>
                  <td class="actions">
                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="title">
                    <span class="name"><a href="#product-modal" data-toggle="modal">Extra Burger</a></span>
                    <span class="caption text-muted">Small (200g)</span>
                  </td>
                  <td class="price text-success">$0.00</td>
                  <td class="actions">
                    <a href="#product-modal" data-toggle="modal" class="action-icon"><i class="ti ti-pencil"></i></a>
                    <a href="#" class="action-icon"><i class="ti ti-close"></i></a>
                  </td>
                </tr>
                <tr>
                  <td class="title">
                    <span class="name">Weekend 20% OFF</span>
                  </td>
                  <td class="price text-success">-$8.22</td>
                  <td class="actions"></td>
                </tr>
              </table>
              <div class="cart-summary">
                <div class="row">
                  <div class="col-7 text-right text-muted">Order total:</div>
                  <div class="col-5"><strong>$<span class="cart-products-total">0.00</span></strong></div>
                </div>
                <div class="row">
                  <div class="col-7 text-right text-muted">Devliery:</div>
                  <div class="col-5"><strong>$<span class="cart-delivery">0.00</span></strong></div>
                </div>
                <hr class="hr-sm">
                <div class="row text-lg">
                  <div class="col-7 text-right text-muted">Total:</div>
                  <div class="col-5"><strong>$<span class="cart-total">0.00</span></strong></div>
                </div>
              </div>
              <div class="cart-empty">
                <i class="ti ti-shopping-cart"></i>
                <p>Your cart is empty...</p>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 order-lg-first">
            <div class="bg-white p-4 p-md-5 mb-4">
              <h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Basic informations</h4>
              <div class="row mb-5">
                <div class="form-group col-sm-6">
                  <label>Name:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>Surename:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>Street and number:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>City:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>Phone number:</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-sm-6">
                  <label>E-mail address:</label>
                  <input type="email" class="form-control">
                </div>
              </div>

              <h4 class="border-bottom pb-4"><i class="ti ti-package mr-3 text-primary"></i>Delivery</h4>
              <div class="row mb-5">
                <div class="form-group col-sm-6">
                  <label>Delivery time:</label>
                  <div class="select-container">
                    <select class="form-control">
                      <option>As fast as possible</option>
                      <option>In one hour</option>
                      <option>In two hours</option>
                    </select>
                  </div>
                </div>
              </div>

              <h4 class="border-bottom pb-4"><i class="ti ti-wallet mr-3 text-primary"></i>Payment</h4>
              <div class="row text-lg">
                <div class="col-md-4 col-sm-6 form-group">
                  <label class="custom-control custom-radio">
                    <input type="radio" name="payment_type" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">PayPal</span>
                  </label>
                </div>
                <div class="col-md-4 col-sm-6 form-group">
                  <label class="custom-control custom-radio">
                    <input type="radio" name="payment_type" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Credit Card</span>
                  </label>
                </div>
                <div class="col-md-4 col-sm-6 form-group">
                  <label class="custom-control custom-radio">
                    <input type="radio" name="payment_type" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Cash</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="text-center">
              <button class="btn btn-primary btn-lg"><span>Order now!</span></button>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Footer -->
    <?php
    include 'footer.php'
    ?>
    <!-- Footer / End -->

  </div>
  <!-- Content / End -->

  <!-- Panel Cart -->
  <?php
  include 'sepet.php';
  ?>

  <!-- Panel Mobile -->
  <nav id="panel-mobile">
    <div class="module module-logo bg-dark dark">
      <a href="#">
        <img src="assets/img/logo-light.svg" alt="" width="88">
      </a>
      <button class="close" data-toggle="panel-mobile"><i class="ti ti-close"></i></button>
    </div>
    <nav class="module module-navigation"></nav>
    <div class="module module-social">
      <h6 class="text-sm mb-3">Follow Us!</h6>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-google"><i class="fa fa-google"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-twitter"><i class="fa fa-twitter"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-youtube"><i class="fa fa-youtube"></i></a>
      <a href="#" class="icon icon-social icon-circle icon-sm icon-instagram"><i class="fa fa-instagram"></i></a>
    </div>
  </nav>

  <!-- Body Overlay -->
  <div id="body-overlay"></div>

</div>

<!-- Modal / Product -->
<div class="modal fade product-modal" id="product-modal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header-lg dark bg-dark">
        <div class="bg-image"><img src="http://assets.suelo.pl/soup/img/photos/modal-add.jpg" alt=""></div>
        <h4 class="modal-title">Specify your dish</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></button>
      </div>
      <div class="modal-product-details">
        <div class="row align-items-center">
          <div class="col-9">
            <h6 class="mb-1 product-modal-name">Boscaiola Pasta</h6>
            <span class="text-muted product-modal-ingredients">Pasta, Cheese, Tomatoes, Olives</span>
          </div>
          <div class="col-3 text-lg text-right">$<span class="product-modal-price"></span></div>
        </div>
      </div>
      <div class="modal-body panel-details-container">
        <!-- Panel Details / Size -->
        <div class="panel-details panel-details-size">
          <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
              <input name="radio_title_size" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-sizes-list" data-toggle="collapse">Size</a>
          </h5>
          <div id="panel-details-sizes-list" class="collapse show">
            <div class="panel-details-content">
              <div class="product-modal-sizes">
                <div class="form-group">
                  <label class="custom-control custom-radio">
                    <input name="radio_size" type="radio" class="custom-control-input" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Small - 100g ($9.99)</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="custom-control custom-radio">
                    <input name="radio_size" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Medium - 200g ($14.99)</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="custom-control custom-radio">
                    <input name="radio_size" type="radio" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Large - 350g ($21.99)</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Panel Details / Additions -->
        <div class="panel-details panel-details-additions">
          <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
              <input name="radio_title_additions" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-additions-content" data-toggle="collapse">Additions</a>
          </h5>
          <div id="panel-details-additions-content" class="collapse">
            <div class="panel-details-content">
              <!-- Additions List -->
              <div class="row product-modal-additions">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Tomato ($1.29)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Ham ($1.29)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Chicken ($1.29)</span>
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Cheese($1.29)</span>
                    </label>
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Bacon ($1.29)</span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Panel Details / Other -->
        <div class="panel-details panel-details-form">
          <h5 class="panel-details-title">
            <label class="custom-control custom-radio">
              <input name="radio_title_other" type="radio" class="custom-control-input">
              <span class="custom-control-indicator"></span>
            </label>
            <a href="#panel-details-other" data-toggle="collapse">Other</a>
          </h5>
          <div id="panel-details-other" class="collapse">
            <form action="#">
              <textarea cols="30" rows="4" class="form-control" placeholder="Put this any other informations..."></textarea>
            </form>
          </div>
        </div>
      </div>
      <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="add-to-cart"><span>Add to Cart</span></button>
      <button type="button" class="modal-btn btn btn-secondary btn-block btn-lg" data-action="update-cart"><span>Update</span></button>
    </div>
  </div>
</div>

<!-- JS Core -->
<script src="dist/js/core.js"></script>

</body>

</html>

