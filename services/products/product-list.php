<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
    #products{
      border-left: 4px solid red;
      border-bottom: 1px solid red;
    }
     .fa-gift{color: red}
  </style>

</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Preloader -->
  <?php include ('../../components/layout/loading.php') ?>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <?php include ('../../components/layout/sidenav-left.php') ?>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <?php include ('../../components/layout/navbar-top.php') ?>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">

      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>
                <i class="fa fa-gift"></i> ຜະລິດຕະພັນ
                 <a href="#" data-toggle="modal" data-target="#reminder-modal" class="btn btn-outline-primary btn-sm" style="float: right"><i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>
              </h6>
            </div>
            <div class="ms-panel-body">
              <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-4" role="tablist">
                <li role="presentation" ><a href="#" aria-controls="tab1" class="active"> ລາຍການ </a></li>
                <li role="presentation" ><a href="orders.php"> ລາຍການທີ່ເລືອກ </a></li>
                <li role="presentation" ><a href="invoice.php"> ລາຍການທີ່ຊື້ </a></li>
              </ul>
              <div class="tab-content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-1.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">

                          <div class="new">
                            <h6 class="mb-0">Veggies </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:1467 </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-primary"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-2.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Garlic Bread </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:6224 </p>
                            <span class="badge badge-primary">Out of Stock</span>
                          </div>

                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-primary"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-3.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Veg Sandwich </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:1467 </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>

                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn  grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-4.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Roast Sandwich</h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:6224 </p>
                            <span class="badge badge-primary">Out of Stock</span>
                          </div>


                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-5.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Burger</h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:1467 </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-6.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Veggies </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:1467 </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-7.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Pepperoni Pizza </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:6224 </p>
                            <span class="badge badge-primary">Out of Stock</span>
                          </div>

                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                      <div class="ms-card">
                        <div class="ms-card-img">
                          <img src="../../assets/img/costic/food-8.jpg" alt="card_img">
                        </div>
                        <div class="ms-card-body">
                          <div class="new">
                            <h6 class="mb-0">Egg McMuffin </h6>
                            <h6 class="ms-text-primary mb-0">$45.50</h6>
                          </div>
                          <div class="new meta">
                            <p>Qty:1467 </p>
                            <span class="badge badge-success">In Stock</span>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolor sit amet, consectetur adipiscing</p>
                          <div class="new mb-0">
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-success"><i class="fa fa-cart-plus"></i> ເລືອກ</button>
                            <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning"><i class="fa fa-eye"></i> ລາຍລະອຽດ</button>
                          </div>
                        </div>
                      </div>
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

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title has-icon text-white"> ເພີ່ມຜະລິດຕະພັນ</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form method="post">
        <div class="modal-body">
            <div class="ms-form-group has-icon">
              <label for="">ລະຫັດ</label>
              <input type="text" placeholder="ກະລຸນາປ້ອນລະຫັດ" class="form-control datepicker" name="news-letter" value="">
              <i class="material-icons"></i>
            </div>
            <div class="ms-form-group has-icon">
              <label for="">ຊື່</label>
              <input type="text" placeholder="ກະລຸນາປ້ອນຊື່ຜະລິດຕະພັນ" class="form-control" name="news-letter" value="">
              <i class="material-icons"></i>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary btn-sm has-icon" data-dismiss="modal"><i class="fa fa-check-circle"></i> ບັນທຶກ</button>
          <button type="button" class="btn btn-outline-light btn-sm has-icon" data-dismiss="modal"><i class="fa fa-times-circle"></i> ຍົກເລີກ</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- MODALS -->
  <!-- Quick bar -->
  <?php include ('../../components/layout/quickbar.php') ?>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>

</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
