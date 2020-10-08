<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #stocks{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-pie-chart{color: #5A3E36}
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
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-xl-4 col-md-6 pd-0">
                  <form class="ms-add-task-block-2">
                    <div class="form-group d-flex m-0 fs-14 clearfix">
                      <input type="text" class="form-control mr-2 fs-20 float-left " id="task-block-3" name="todo-block" placeholder="ປ້ອນຊື່ບ່ອນເກັບ" value="">
                      <button type="submit" class="ms-btn-icon btn-success w-50 float-right"><i class="fa fa-check-circle"> </i>
                      </button>
                    </div>
                  </form>
                </div>
                <div class="col-xl-8 col-md-6">
                  <ul class="ms-todo-options">
                    <li><a href="#" class="ms-text-primary"> ລາຍການທັງໝົດ </a>
                    </li>
                    <li><a href="#" class="text-disabled"> ລາຍການທີ່ເບີກໃຊ້ </a>
                    </li>
                    <li>
                      <a href="#" class="text-disabled"> ລາຍການທີ່ເສຍຫາຍ </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row ms-todo-list">
        <div class="col-xl-12 col-md-12 col-sm-12 ms-deletable">
          <div class="ms-card">
            <div class="ms-card-header clearfix">
              <h6 class="ms-card-title">ລາຍການບ່ອນຈັດເກັບທັງໝົດ</h6>
              <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i>
              </button>
            </div>
            <div class="ms-card-body">
              <ul class="ms-list ms-task-block">
                <li class="ms-list-item ms-to-do-task ms-deletable">
                  <label class="ms-checkbox-wrap ms-todo-complete">
                    <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                  </label> <span> Task to do </span>
                  <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i>
                  </button>
                </li>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                  <label class="ms-checkbox-wrap ms-todo-complete">
                    <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                  </label> <span>Task to do</span>
                  <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i>
                  </button>
                </li>
              </ul>
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
