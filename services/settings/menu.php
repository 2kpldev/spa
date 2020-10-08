<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <?php include '../../connection.php' ?>
  <style media="screen">
  #settings{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-cog{color: #5A3E36}
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
    <?php
      $get_resultset=mysqli_query($con,"SELECT*FROM spa_menu");
      $rested=mysqli_num_rows($get_resultset);
      $detake=mysqli_query($con,"SELECT m_id from spa_menu where m_id=(select max(m_id)from spa_menu)");
      $result=mysqli_fetch_array($detake);
      $id=$result[0]+1;
      ?>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-xl-12 col-md-6 pd-0">
                  <form action="" method="post">
                    <div class="form-group d-flex m-0 fs-14 clearfix">
                     <?php _back() ?>  <input type="<?php if($rested>=1){echo "hidden";}else{echo "text";} ?>" class="form-control mr-2 fs-20"
                      name="m_id" value="<?php if($rested>=1){echo $id;}else{echo "";} ?>" requi#5A3E36>
                      <input type="text" class="form-control mr-2 fs-20"  name="m_icon" placeholder="ປ້ອນຊື່ໄອຄອ໋ນ" requi#5A3E36>
                      <input type="text" class="form-control mr-2 fs-20"  name="m_name" placeholder="ປ້ອນຊື່ເມນູ" requi#5A3E36>
                      <input type="text" class="form-control mr-2 fs-20"  name="tab_id" placeholder="ປ້ອນແທັບໄອດີ" requi#5A3E36>
                      <input type="text" class="form-control mr-2 fs-20"  name="tab_id2" placeholder="ປ້ອນແທັບໄອດີສຳຮອງ" requi#5A3E36>
                      <button type="submit" name="onSubmit" class="ms-btn-icon btn-primary w-50 float-right">
                      <i class="fa fa-check-circle"> </i>
                      </button>
                    </div>
                  </form>
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
              <h6 class="ms-card-title"><i class="fa fa-tasks"></i> ເມນູຫຼັກ</h6>
            </div>
            <div class="ms-card-body">
              <ul class="ms-list ms-task-block">
                <?php
                $spaMenu=mysqli_query($con,"SELECT*FROM spa_menu");
                $i=1;
                foreach ($spaMenu as $key) {
                  ?>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                <strong><?php echo $i; ?></strong>&nbsp; | &nbsp;&nbsp;&nbsp;
                 <span><i class="fa fa-<?php echo $key['m_icon'] ?>"></i> <?php echo $key['m_name'] ?></span>
                  <div class="close">
                  <a href="sub_menu.php?page=<?php echo $key['m_id'];?>" class="mt-0"><i class="fa fa-plus-circle"> </i> </a> &nbsp;
                  <a href="editMenu.php?page=<?php echo $key['m_id'];?>" class="mt-0"><i class="fa fa-edit"> </i> </a> &nbsp;
                  <a href="#" onclick="_deteteMenu(<?php echo $key['m_id'];?>)" class="mb-0"><i class="fa fa-trash"> </i></a>
                </div>
                </li>
              <?php $i++;} ?>
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
<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global Requi#5A3E36 Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
<?php
if(isset($_POST['onSubmit'])){
  $m_id=$_SETSTRING($con, $_POST['m_id']);
  $m_icon=$_SETSTRING($con, $_POST['m_icon']);
  $m_name=$_SETSTRING($con, $_POST['m_name']);
  $tab_id=$_SETSTRING($con, $_POST['tab_id']);
  $tab_id2=$_SETSTRING($con, $_POST['tab_id2']);

  $created=$_SQL($con,"INSERT INTO spa_menu(m_id,m_icon,m_name,tab_id,tab_id2)VALUES('$m_id','$m_icon','$m_name','$tab_id','$tab_id2')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='menu.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='menu.php'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_menu WHERE m_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='menu.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='menu.php'});</script>";
  }
}
?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
