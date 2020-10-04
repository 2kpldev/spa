<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #service{
    border-left: 4px solid red;
    border-bottom: 1px solid red;
  }
  .fa-heart{color: red}
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
        <!-- Food Orders -->
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-between">
              <div class="align-self-center align-left">
                <h6>ລາຍການບໍລິການ ທົ່ວໄປ</h6>
              </div>
              <div class="btn btn-group">
              <a href="#" data-toggle="modal" data-target="#reminder-modal" class="btn btn-outline-primary has-icon">
                <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
              <button type="button" class="btn btn-outline-primary has-icon">
                <i class="fa fa-tasks"></i>
              </button>
            </div>
            </div>
            </div>
            <div class="ms-panel-body">
              <div class="row">

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-5.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Meat Stew</h6>
                        <span class="green-text"><strong>$25.00</strong></span>
                      </div>

                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">15</span></p>
                        <p>Income <span class="red-text">$175</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Pancake</h6>
                        <span class="green-text"><strong>$50.00</strong></span>
                      </div>

                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">75</span></p>
                        <p>Income <span class="red-text">$275</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-4.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Burger</h6>
                        <span class="green-text"><strong>$45.00</strong></span>
                      </div>

                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">85</span></p>
                        <p>Income <span class="red-text">$575</span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="ms-card no-margin">
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-3.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-body">
                      <div class="ms-card-heading-title">
                        <h6>Saled</h6>
                        <span class="green-text"><strong>$85.00</strong></span>
                      </div>
                      <div class="ms-card-heading-title">
                        <p>Orders <span class="red-text">175</span></p>
                        <p>Income <span class="red-text">$775</span></p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-header">
              <div class="d-flex justify-content-between">
              <div class="align-self-center align-left">
                <h6>ລາຍການບໍລິການເສີມ</h6>
              </div>
              <div class="btn btn-group">
              <a href="#" data-toggle="modal" data-target="#reminder-modal" class="btn btn-outline-primary has-icon">
                <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
              <button type="button" class="btn btn-outline-primary has-icon">
                <i class="fa fa-tasks"></i>
              </button>
            </div>
            </div>
            </div>
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/costic/customer-4.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>John Doe </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Comment</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Share</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Favorite</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <h6>This is a card Title</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="ms-card">
                    <div class="ms-card-body">
                      <div class="media fs-14">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/costic/customer-4.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <h6>John Doe </h6>
                          <div class="dropdown float-right">
                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Comment</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Share</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Favorite</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <p class="fs-12 my-1 text-disabled">30 seconds ago</p>
                        </div>

                      </div>
                      <h6>This is a card Title</h6>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nunc velit, dictum eget nulla a, sollicitudin rhoncus orci. Vivamus nec commodo turpis.</p>
                    </div>
                    <div class="ms-card-img">
                      <img src="../../assets/img/costic/food-2.jpg" alt="card_img">
                    </div>
                    <div class="ms-card-footer text-disabled d-flex">
                      <div class="ms-card-options">
                        <i class="material-icons">favorite</i> 982
                      </div>
                      <div class="ms-card-options">
                        <i class="material-icons">comment</i> 785
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
<!-- MODALS -->
<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
</body>
<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
