<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #stocks{
    border-left: 4px solid red;
    border-bottom: 1px solid red;
  }
  .fa-pie-chart{color: red}
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
                      <input type="text" class="form-control mr-2 fs-20 float-left " id="task-block-3" name="todo-block" placeholder="ປ້ອນປະເພດເຄື່ອງ" value="">
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
        <div class="ms-panel ms-email-panel">
          <div class="ms-panel-body p-0">
            <div class="ms-email-aside">
            <ul class="ms-list ms-email-list">
                <li class="ms-list-item ms-email-label"><h4> ປະເພດເຄື່ອງ</h4></li>
                <hr>
                <li class="ms-list-item ms-active-email">
                  <a href="#">1  ເຄືອງບໍລິການ<span>32</span>
                  </a>
                </li>
                <li class="ms-list-item">
                  <a href="#">2 ເຄື່ອງສຳອາງ <span>12</span>
                  </a>
                </li>
                <li class="ms-list-item">
                  <a href="#">3 ເຄືອງບຳລຸງ <span>17</span>
                  </a>
                </li>
                <li class="ms-list-item">
                  <a href="#">4 ເຄືອງຂາຍ <span>22</span>
                  </a>
                </li>
              </ul>
              <div class="ms-email-config">
                <div class="progress progress-tiny">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0">54.27 GB (25%) of 150 GB used</p> <a href="#">Manage Storage</a>
              </div>
            </div>
            <!-- Email Main -->
            <div class="ms-email-main">
              <div class="ms-panel-header">
                <h6>ລາຍການ ເຄື່ອງໃນສາງ</h6>
                <p>ທັງໝົດ 17 ລາຍການ</p>
                <ul class="ms-email-pagination">
                  <li>ເພີ່ມລາຍການເຄື່ອງ</li>
                  <li>
                    <a href="#" class="btn btn-outline-primary btn-sm"> <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
                  </li>
                </ul>
              </div>
              <div class="ms-email-header">
                <ul class="ms-email-options">
                  <li>
                    <label class="ms-checkbox-wrap">
                      <input type="checkbox" class="ms-email-check-all" value=""> <i class="ms-checkbox-check"></i>
                    </label>
                        ເລືອກ
                  </li>
                </ul>
              </div>
              <!-- Email Content -->
              <div class="ms-email-content">
                <ul class="ms-scrollable">
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-1.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email pinned clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time"> <a href="#"><i class="material-icons">attachment</i></a> 2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-4.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-5.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-6.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email pinned clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-7.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-8.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="media ms-email pinned clearfix">
                    <div class="ms-email-controls">
                      <label class="ms-checkbox-wrap">
                        <input type="checkbox" value=""> <i class="ms-checkbox-check"></i>
                      </label> <i class="material-icons ms-pin-email">flag</i>
                    </div>
                    <div class="ms-email-img mr-3 ">
                      <img src="../../assets/img/costic/customer-9.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-email-details"> <span class="ms-email-sender">John Doe</span>
                      <h6 class="ms-email-subject">[WordPress] New Comment</h6>  <span class="ms-email-time">2 Hours ago</span>
                      <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                    </div>
                    <div class="dropdown">
                      <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Mark as read</span>
                            </div>
                          </a>
                          <a class="media p-2 ms-pin-email" href="#">
                            <div class="media-body"> <span>Flag</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Archive</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Delete</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
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
