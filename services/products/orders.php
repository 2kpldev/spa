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
              <h6>ຜະລິດຕະພັນ
                <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#reminder-modal" style="float: right">
                  <i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>
              </h6>
            </div>
            <div class="ms-panel-body">
              <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified mb-4" role="tablist">
                <li role="presentation" ><a href="product-list.php"  role="tab"> ລາຍການ </a></li>
                <li role="presentation" ><a href="#" class="active" > ລາຍການທີ່ເລືອກ </a></li>
                <li role="presentation" ><a href="invoice.php" role="tab"> ລາຍການທີ່ຊື້ </a></li>
              </ul>
              <div class="tab-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="ms-card ms-widget ms-card-fh">
                      <div class="ms-card-header clearfix">
                        <h6 class="ms-card-title"> ລາຍການທີ່ເລືອກ</h6>
                        <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right">
                           <i class="material-icons text-disabled">add</i> </button>
                      </div>
                      <div class="ms-card-body">
                        <ul class="ms-list ms-task-block">
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                          <li class="ms-list-item ms-to-do-task ms-deletable">
                            <label class="ms-checkbox-wrap ms-todo-complete">
                              <input type="checkbox" value="">
                              <i class="ms-checkbox-check"></i>
                            </label>
                            <span> Lorem ipsum dolor sit amet </span>
                            <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                          </li>
                        </ul>
                      </div>
                      <div class="ms-card-footer clearfix">
                        <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                        <a href="#" class="text-disabled ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
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
<!-- Global Requi#5A3E36 Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
