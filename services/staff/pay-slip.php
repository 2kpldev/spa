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
        <!-- Chat Sidebar -->
        <div class="col-xl-4 col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-body py-3 px-0">
              <div class="ms-chat-container">
                <div class="ms-chat-header px-3">
                  <div class="ms-chat-user-container media clearfix">
                    <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                      <img src="../../assets/img/costic/customer-1.jpg" class="ms-img-round" alt="people">
                    </div>
                    <div class="media-body ms-chat-user-info mt-1">
                      <h6>ຜູ້ເບີກ</h6>
                      <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        active
                      </a>
                      <ul class="dropdown-menu">
                        <li class="ms-dropdown-list">
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Busy</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Away</span>
                            </div>
                          </a>
                          <a class="media p-2" href="#">
                            <div class="media-body"> <span>Offline</span>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <form class="ms-form my-3" method="post">
                    <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                      <input type="search" class="ms-form-input w-100" name="search" placeholder="ຄົ້ນຫາ..." value="">
                    </div>
                  </form>
                </div>
                <div class="ms-chat-body">
                  <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified px-3" role="tablist">
                    <li role="presentation" class="fs-12">
                      <a href="#chats-2" class="active show" role="tab" data-toggle="tab"> ຍັງບໍ່ທັນເບີກ </a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show fade in" id="chats-2">
                      <ul class="ms-scrollable">
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center"> <span class="msg-count">3</span>
                            <img src="../../assets/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6>  <span class="ms-chat-time">2 Hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Pin</span>
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
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                            <img src="../../assets/img/costic/customer-3.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6>  <span class="ms-chat-time">3 Hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Pin</span>
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
                        <li class="ms-chat-user-container ms-open-chat selected ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                            <img src="../../assets/img/costic/customer-4.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6>  <span class="ms-chat-time">12 Hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Pin</span>
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
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                            <img src="../../assets/img/costic/customer-8.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6>  <span class="ms-chat-time">3 Days ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body"> <span>Pin</span>
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
            </div>
          </div>
        </div>
        <!-- Chat Body -->
        <div class="col-xl-8 col-md-12">
          <div class="ms-panel ms-chat-conversations ms-widget">
            <div class="ms-panel-header">
              <div class="ms-chat-header justify-content-between">
                <div class="ms-chat-user-container media clearfix">
                  <div class="media-body ms-chat-user-info">
                    <h6>
                      ລາຍການທີ່ເບີກແລ້ວ
                    </h6>
                  </div>
                </div>
                <ul class="ms-list has-icon">
                  <li>
                    <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                      <input type="search" class="ms-form-input w-100" name="search" placeholder="ຄົ້ນຫາ..." value="">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="ms-panel-body ms-scrollable">
                  <div class="table-responsive mt-4">
                    <table id="data-table-3" class="table w-100"></table>
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
