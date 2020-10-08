<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #reports{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-bar-chart{color: #5A3E36}
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
              <h6><i class="fa fa-chart-line"></i> ລາຍງານຂໍ້ມູນລູກຄ້າ</h6>
            </div>
            <div class="ms-panel-body">
              <div class="ms-chat-container">
                <div class="ms-chat-header px-3">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="ms-form-group has-icon">
                        <label for="">ແຕ່ວັນທີ</label>
                        <input type="date" class="form-control" name="news-letter" value="">
                        <i class="material-icons"></i>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="ms-form-group has-icon">
                        <label for="">ຫາວັນທີ</label>
                        <input type="date" class="form-control" name="news-letter" value="">
                        <i class="material-icons"></i>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="ms-form-group has-icon">
                        <label for="">ປີ</label>
                        <input type="year" class="form-control" name="news-letter" value="">
                        <i class="material-icons"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ms-chat-body">
                  <br>
                  <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified px-3" role="tablist">
                    <li role="presentation" class="fs-12"><a href="#chats-2" class="active show" role="tab" data-toggle="tab"> ລູກຄ້າທັງໝົດ </a></li>
                    <li role="presentation" class="fs-12"><a href="#groups-2" role="tab" data-toggle="tab"> ລາຍງານປະຈຳວັນ </a></li>
                    <li role="presentation" class="fs-12"><a href="#contacts-2" role="tab" data-toggle="tab"> ພິມລາຍງານ </a></li>
                  </ul>

                  <div class="tab-content mt-4">
                    <div role="tabpanel" class="tab-pane active show fade in" id="chats-2">
                      <ul class="ms-scrollable">
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                            <span class="msg-count">3</span>
                            <img src="../../assets/img/costic/customer-2.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6> <span class="ms-chat-time">2 Hours ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Pin</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Delete</span>
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
                            <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Pin</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Delete</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                            <img src="../../assets/img/costic/customer-4.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Pin</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Delete</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                          <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                            <img src="../../assets/img/costic/customer-5.jpg" class="ms-img-round" alt="people">
                          </div>
                          <div class="media-body ms-chat-user-info mt-1">
                            <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                            <a href="#" class="ms-hoverable-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li class="ms-dropdown-list">
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Archive</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Pin</span>
                                  </div>
                                </a>
                                <a class="media p-2" href="#">
                                  <div class="media-body">
                                    <span>Delete</span>
                                  </div>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="groups-2">
                      <ul class="ms-scrollable">
                        <div class="ms-panel-body p-0">
                          <ul class="nav nav-tabs nav-justified has-gap pt-4 pb-4 btn-group" role="tablist">
                            <li role="presentation" class="fs-12"><a href="#btc" aria-controls="btc" class="<?php if($today=='Mon'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ຈັນ </a></li>
                            <li role="presentation" class="fs-12"><a href="#xrp" aria-controls="xrp" class="<?php if($today=='Tue'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ອັງຄານ </a></li>
                            <li role="presentation" class="fs-12"><a href="#ltc" aria-controls="ltc" class="<?php if($today=='Wen'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ພຸດ </a></li>
                            <li role="presentation" class="fs-12"><a href="#eth" aria-controls="eth" class="<?php if($today=='Thu'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ພະຫັດ </a></li>
                            <li role="presentation" class="fs-12"><a href="#zec" aria-controls="zec" class="<?php if($today=='Fri'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ສຸກ </a></li>
                            <li role="presentation" class="fs-12"><a href="#zec" aria-controls="zec" class="<?php if($today=='Sat'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ເສົາ </a></li>
                            <li role="presentation" class="fs-12"><a href="#zec" aria-controls="zec" class="<?php if($today=='Sun'){echo 'active';}else{};?> show" role="tab" data-toggle="tab"> ອາທິດ </a></li>
                          </ul>
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active show fade in" id="btc">
                              <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                  <thead>
                                    <tr>
                                      <th scope="col">Restaurant Names</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Orders</th>
                                      <th scope="col">Profit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Hunger House</td>
                                      <td>8528</td>
                                      <td class="ms-text-success">+17.24%</td>
                                      <td>7.65%</td>
                                    </tr>
                                    <tr>
                                      <td>Food Lounge</td>
                                      <td>4867</td>
                                      <td class="ms-text-danger">-12.24%</td>
                                      <td>9.12%</td>
                                    </tr>
                                    <tr>
                                      <td>Delizious</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                    <tr>
                                      <td>Netherfood</td>
                                      <td>1614</td>
                                      <td class="ms-text-danger">-20.75%</td>
                                      <td>12.25%</td>
                                    </tr>
                                    <tr>
                                      <td>Rusmiz</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="xrp">
                              <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                  <thead>
                                    <tr>
                                      <th scope="col">Restaurant Name</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Orders</th>
                                      <th scope="col">Profit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Hunger House</td>
                                      <td>8528</td>
                                      <td class="ms-text-success">+17.24%</td>
                                      <td>7.65%</td>
                                    </tr>
                                    <tr>
                                      <td>Food Lounge</td>
                                      <td>4867</td>
                                      <td class="ms-text-danger">-12.24%</td>
                                      <td>9.12%</td>
                                    </tr>
                                    <tr>
                                      <td>Delizious</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                    <tr>
                                      <td>Netherfood</td>
                                      <td>1614</td>
                                      <td class="ms-text-danger">-20.75%</td>
                                      <td>12.25%</td>
                                    </tr>
                                    <tr>
                                      <td>Rusmiz</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ltc">
                              <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                  <thead>
                                    <tr>
                                      <th scope="col">Restaurant Name</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Orders</th>
                                      <th scope="col">Profit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Hunger House</td>
                                      <td>8528</td>
                                      <td class="ms-text-success">+17.24%</td>
                                      <td>7.65%</td>
                                    </tr>
                                    <tr>
                                      <td>Food Lounge</td>
                                      <td>4867</td>
                                      <td class="ms-text-danger">-12.24%</td>
                                      <td>9.12%</td>
                                    </tr>
                                    <tr>
                                      <td>Delizious</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                    <tr>
                                      <td>Netherfood</td>
                                      <td>1614</td>
                                      <td class="ms-text-danger">-20.75%</td>
                                      <td>12.25%</td>
                                    </tr>
                                    <tr>
                                      <td>Rusmiz</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="eth">
                              <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                  <thead>
                                    <tr>
                                      <th scope="col">Restaurant Name</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Orders</th>
                                      <th scope="col">Profit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Hunger House</td>
                                      <td>8528</td>
                                      <td class="ms-text-success">+17.24%</td>
                                      <td>7.65%</td>
                                    </tr>
                                    <tr>
                                      <td>Food Lounge</td>
                                      <td>4867</td>
                                      <td class="ms-text-danger">-12.24%</td>
                                      <td>9.12%</td>
                                    </tr>
                                    <tr>
                                      <td>Delizious</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                    <tr>
                                      <td>Netherfood</td>
                                      <td>1614</td>
                                      <td class="ms-text-danger">-20.75%</td>
                                      <td>12.25%</td>
                                    </tr>
                                    <tr>
                                      <td>Rusmiz</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="zec">
                              <div class="table-responsive">
                                <table class="table table-hover thead-light">
                                  <thead>
                                    <tr>
                                      <th scope="col">Restaurant Name</th>
                                      <th scope="col">Qty</th>
                                      <th scope="col">Orders</th>
                                      <th scope="col">Profit</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Hunger House</td>
                                      <td>8528</td>
                                      <td class="ms-text-success">+17.24%</td>
                                      <td>7.65%</td>
                                    </tr>
                                    <tr>
                                      <td>Food Lounge</td>
                                      <td>4867</td>
                                      <td class="ms-text-danger">-12.24%</td>
                                      <td>9.12%</td>
                                    </tr>
                                    <tr>
                                      <td>Delizious</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                    <tr>
                                      <td>Netherfood</td>
                                      <td>1614</td>
                                      <td class="ms-text-danger">-20.75%</td>
                                      <td>12.25%</td>
                                    </tr>
                                    <tr>
                                      <td>Rusmiz</td>
                                      <td>7538</td>
                                      <td class="ms-text-success">+32.04%</td>
                                      <td>14.29%</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane fade " id="contacts-2">
                        <div class="ms-content-wrapper">
                          <div class="invoice-buttons text-right">
                            <a href="#" class="btn btn-outline-warning mr-2 has-icon" onclick="print()"><i class="fa fa-print"></i> ພິມ</a>
                          </div>
                          <div class="ms-panel-body" id="print_content">
                            <div class="ms-panel-header header-mini">
                              <div class="d-flex justify-content-between">
                                <h6>Invoice</h6>
                                <h6>#135178</h6>
                              </div>
                            </div>
                            <!-- Invoice To -->
                            <div class="row align-items-center">
                              <div class="col-md-6">
                                <div class="invoice-address">
                                  <h3>Reciever: </h3>
                                  <h5>Anny Farisha</h5>
                                  <p>Anny.123@hotmail.com</p>
                                  <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                                  <p class="mb-0">Arizona</p>
                                  <p>Phoenix</p>
                                </div>
                              </div>
                              <div class="col-md-6 text-md-right">
                                <ul class="invoice-date">
                                  <li>Invoice Date : Saturday, April 07 2019</li>
                                  <li>Due Date : Sunday, April 19 2019</li>
                                </ul>
                              </div>
                            </div>
                            <!-- Invoice Table -->
                            <div class="ms-invoice-table table-responsive mt-5">
                              <table class="table table-hover text-right thead-light">
                                <thead>
                                  <tr class="text-capitalize">
                                    <th class="text-center w-5">id</th>
                                    <th class="text-left">description</th>
                                    <th>qty</th>
                                    <th>Unit Cost</th>
                                    <th>total</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-left">Grilled Sandwich</td>
                                    <td>1</td>
                                    <td>$30</td>
                                    <td>$30</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Fried Egg Sandwich</td>
                                    <td>1</td>
                                    <td>$69</td>
                                    <td>$69</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Spicy Grilled Burger</td>
                                    <td>2</td>
                                    <td>$19</td>
                                    <td>$38</td>
                                  </tr>
                                  <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-left">Peri Peri Fries</td>
                                    <td>2</td>
                                    <td>$9</td>
                                    <td>$18</td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan="4">Total Cost:</td>
                                    <td>$155</td>
                                  </tr>
                                </tfoot>
                              </table>
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
    </div>
  </div>
</main>
<!-- MODALS -->
<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
