<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #products{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-gift{color: #5A3E36}
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

                <a href="../course/detail_list_course.php" class="btn btn-outline-primary btn-sm" style="float: right;margin-left: 10px">
                  <i class="fa fa-edit"></i>&nbsp; ແກ້ໄຂ</a>
                <a href="../course/add_list_course.php" class="btn btn-outline-primary btn-sm" style="float: right">
                  <i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>

              </h6>
            </div>
            <div class="ms-panel-body">
              <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified mb-4" role="tablist">
                <li role="presentation"><a href="#" aria-controls="tab1" class="active"> ລາຍການ </a></li>
                <li role="presentation"><a href="orders.php"> ລາຍການທີ່ເລືອກ </a></li>
                <li role="presentation"><a href="invoice.php"> ລາຍການທີ່ຊື້ </a></li>
              </ul>
              <div class="tab-content">
                <?php
                $get_resultset = mysqli_query($con, "SELECT*FROM spa_list_course");
                $rested = mysqli_num_rows($get_resultset);
                if($rested < 1 ){
                  isEmpty();
                }else{
                  ?>
                  <div class="row">
                    <?php
                    $spalist = mysqli_query($con, "SELECT*FROM spa_list_course left join spa_group_course on spa_list_course.groupcode=spa_group_course.group_code");
                    $i = 1;
                    foreach ($spalist as $key) {
                      ?>
                      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="ms-card">
                          <div class="ms-card-img">
                            <img src="../../assets/img/spa2.jpg" alt="card_img">
                          </div>
                          <div class="ms-card-body">
                            <div class="new">
                              <h6 class="mb-0"><?php echo $key['list_name'] ?> </h6>
                              <h6 class="ms-text-primary mb-0"><?php echo number_format($key['list_price_once']). $_KIP ?></h6>
                            </div>
                            <div class="new meta">
                              <p>ຈຳນວນ</p>
                              <span class="badge badge-success"><?php echo $key['list_qty_course'] ?></span>
                            </div>
                            <div class="new meta">
                              <p>ສ່ວນຫຼຸດ</p>
                              <span class=""><?php echo number_format($key['list_discount']). $_PERCEN ?></span>
                            </div><hr>
                            <p><?php echo $key['list_detail']; ?></p>
                            <div class="new mb-0">
                              <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-primary">
                                <i class="fa fa-cart-plus"></i> ເລືອກ</button>
                              <button type="button" class="btn grid-btn ml-1 btn-sm btn-outline-warning" onclick="_preview(<?php echo $key['list_id'] ?>)">
                                <i class="fa fa-eye"></i> ເບິ່ງ</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </main>

      <div class="modal fade" id="preview" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
        <div class="modal-dialog modal-lg modal-dialog-cente#5A3E36" role="document">
          <div class="modal-content">
            <div class="modal-header bg-primary">
              <h5 class="modal-title has-icon text-white"> ເບິ່ງລາຍລະອຽດ</h5>
            </div>
            <div class="modal-body" id="preview_content">
              <!-- review -->
            </div>
          </div>
        </div>
      </div>
        <!-- Quick bar -->
        <?php include ('../../components/layout/quickbar.php') ?>
        <!-- SCRIPTS -->
        <!-- Global required Scripts Start -->
        <?php include ('../../components/libary/script.php') ?>

      </body>
      <!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
      </html>
