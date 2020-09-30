

<!DOCTYPE html>
<?php include "../../connection.php";?>
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
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="ms-panel ms-widget ms-panel-fh">
        <div class="ms-panel-header">
          <div class="d-flex justify-content-between">
            <div class="align-self-center align-left">
              <h6><i class="fa fa-user"></i>&nbsp; ລາຍການພະນັກງານ</h6>
            </div>
            <a href="add_staff.php" class="btn btn-outline-primary btn-sm has-icon">
              <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
            </div>
          </div>
          <div class="ms-panel-body py-5 px-0">
            <div class="ms-chat-container">
              <div class="ms-chat-header px-3">
                <form class="ms-form my-3" method="post">
                  <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                    <input type="search" class="ms-form-input w-100" id="search" placeholder="ຄົ້ນຫາພະນັກງານ" value="">
                    <i class="flaticon-search text-disabled"></i>
                  </div>
                </form>
              </div>

              <div class="ms-chat-body">
                <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified px-3" role="tablist">
                  <li role="presentation" class="fs-12"><a href="#list" class="active show" role="tab" data-toggle="tab"> ພະນັກງານທັງໝົດ </a></li>
                  <li role="presentation" class="fs-12"><a href="#over" role="tab" data-toggle="tab"> ພະນັກງານອອກ </a></li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active show fade in mt-4" id="list">
                    <ul class="ms-scrollable" id="display">
                      <?php
                      $sel_staff="select*from spa_staff left join spa_rank on spa_staff.rankcode=spa_rank.rank_code";
                      $result = $DB_con->prepare($sel_staff);
                      $result -> execute();
                      if($result -> rowCount() > 0){
                        while($staff=$result->fetch()){
                          ?>
                          <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix" id="data" onclick="window.location='profile_detail.php?id=<?php echo $staff['staff_id'];?>'" style="cursor: pointer">
                            <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                              <img src="img/<?php if($staff['staff_img']=='no'){echo "img/no.png";} else{echo $staff['staff_img'];}?>" class="ms-img-round" alt="people">
                            </div>

                            <div class="media-body ms-chat-user-info mt-1">
                              <h6>
                                <?php echo $staff['staff_gender'].' '.$staff['staff_name'].' '.$staff['staff_lname']; ?>
                              </h6>
                              <p><?=$staff['rank_name'];?></p>
                            </div>
                          </li>
                          <?php
                        }
                      }
                      else{ isEmpty(); } ?>
                    </ul>
                  </div>

                  <div role="tabpanel" class="tab-pane fad mt-4" id="over">
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


    <?php

    if(isset($_GET['del'])){

      $select_img=mysqli_query($con,"select staff_img from spa_staff where staff_id='$_GET[del]'");
      $img=mysqli_fetch_assoc($select_img);
      @unlink("img/".$img['staff_img']);
      $_onDelete=$_SQL($con,"DELETE FROM  spa_staff WHERE staff_id='$_GET[del]'");
      if($_onDelete){

        echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='staff-list.php'})</script>";
      }else {
        echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='staff-list.php'});</script>";
      }
    }

    ?>
  </body>
  <!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
  </html>
