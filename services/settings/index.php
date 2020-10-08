<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #settings{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-cogs{color: #5A3E36}
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
              <h6><i class="fa fa-cogs"></i> ການຕັ້ງຄ່າ</h6>
            </div>
            <div class="ms-panel-body">
              <!-- Notifications Widgets -->
              <div class="row">
              <div class="col-xl-3 col-md-6">
                <a href="#">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-users"></i>
                      <div class="media-body">
                        <h6>ຜູ້ໃຊ້ລະບົບ</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-md-6">
                <a href="#">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-key"></i>
                      <div class="media-body">
                        <h6>ປ່ຽນລະຫັດຜ່ານ</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-md-6">
                <a href="#">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-magic"></i>
                      <div class="media-body">
                        <h6>ກຳນົດສິດ</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-md-6">
                <a href="menu.php">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-tasks"></i>
                      <div class="media-body">
                        <h6>ເມນູ</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-xl-3 col-md-6">
                <a href="#">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-info"></i>
                      <div class="media-body">
                        <h6>ເກັບລອັກ</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              <div class="col-xl-3 col-md-6">
                <a href="../rank/add_rank.php">
                  <div class="ms-panel ms-panel-hoverable has-border ms-widget ms-has-new-msg ms-notification-widget">
                    <div class="ms-panel-body media">
                      <i class="fa fa-star"></i>
                      <div class="media-body">
                        <h6>ເພີ່ມຕຳແໜ່ງ</h6>
                      </div>
                    </div>
                  </div>
                </a>
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
<!-- Global Requi#5A3E36 Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
