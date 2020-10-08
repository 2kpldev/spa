<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #staffs{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-user{color: #5A3E36}
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
                <i class="fa fa-user"></i> ລາຍການຕິຕາມພະນັກງານ
                 <a href="#" data-toggle="modal" data-target="#reminder-modal" class="btn btn-outline-primary btn-sm" style="float: right"><i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>
              </h6>
            </div>
            <div class="ms-panel-body">
              <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified mb-4" role="tablist">
                <li role="presentation" class="fs-12"><a href="#list" class="active show" role="tab" data-toggle="tab"> ລາຍການທັງໝົດ </a></li>
                <li role="presentation" class="fs-12"><a href="#miss" role="tab" data-toggle="tab"> ລາຍການຂາດ </a></li>
              </ul>
              <div  class="tab-content">

              <div role="tabpanel" class="tab-pane active show in mt-4" id="list">
                <div class="ms-panel ms-panel-fh ms-widget">
                  <div class="ms-panel-header">
                    <h6>Followers</h6>
                  </div>
                  <div class="ms-panel-body p-0">
                    <ul class="ms-followers ms-list ms-scrollable">
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-1.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>Nathaniel Bustos</h6>
                          <span class="fs-12">Quality Manager</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-2.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>Anny Farisha</h6>
                          <span class="fs-12">Chef</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-primary" name="button"><i class="material-icons">person_add</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-3.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>James Zathila</h6>
                          <span class="fs-12">Delivery Manager</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-primary" name="button"><i class="material-icons">person_add</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-4.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>John Doe</h6>
                          <span class="fs-12">Head Chef</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-5.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>Khadiza Rehna</h6>
                          <span class="fs-12">Manager</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-primary" name="button"><i class="material-icons">person_add</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-6.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>Peter Amber</h6>
                          <span class="fs-12">Content Writer</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                      </li>
                      <li class="ms-list-item media">
                        <img src="../assets/img/costic/customer-7.jpg" class="ms-img-small ms-img-round" alt="people">
                        <div class="media-body mt-1">
                          <h6>Helen Southern</h6>
                          <span class="fs-12">Food Tester</span>
                        </div>
                        <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-content tab-pane fade in" id="miss">
                <div class="table-responsive mt-4">
                  <table id="data-table-3" class="table w-100"></table>
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
