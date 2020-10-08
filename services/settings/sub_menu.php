<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <?php include '../../connection.php' ?>
  <style media="screen">
  #settings{
    border
    left: 4px solid #5A3E36;
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
      $spaMenu=mysqli_query($con,"SELECT*FROM spa_menu where m_id='$_GET[page]'");
      $res=$_ASSOC($spaMenu);

      $get_resultset=mysqli_query($con,"SELECT*FROM spa_submenu");
      $rested=mysqli_num_rows($get_resultset);
      $detake=mysqli_query($con,"SELECT sub_id from spa_submenu where sub_id=(select max(sub_id)from spa_submenu)");
      $result=mysqli_fetch_array($detake);
      $id=$result[0]+1;
      ?>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row ms-todo-list">
        <div class="col-md-4">
          <form action="#" method="post">
            <div class="ms-panel ms-panel-fh">
              <div class="ms-panel-header">
                <h6><?php _back() ?> <?php echo $res['m_name']; ?></h6>
              </div>
              <div class="ms-panel-body">
                <form class="needs-validation" method="post" action="" novalidate>
                      <label>ລະຫັດ <?php isVal() ?></label>
                      <div class="input-group">
                        <input type="hidden" class="form-control" name="m_id"  value="<?php echo $_GET['page'];?>">
                        <input type="text" class="form-control" name="sub_id"
                        <?php if($rested>=1){echo "readonly";}else{echo "";} ?>
                         value="<?php if($rested>=1){echo $id;}else{echo "";} ?>" requi#5A3E36>
                      </div>

                      <label>ຊື່ເມນູຍ່ອຍ <?php isVal() ?></label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="sub_name" placeholder="ກະລຸນາປ້ອນຊື່ເມນູຍ່ອຍ" requi#5A3E36>
                      </div>
                      <label>ລິ້ງ <?php isVal() ?></label>
                      <div class="input-group">
                        <input type="text" class="form-control" name="sub_link" placeholder="ກະລຸນາປ້ອນລິ້ງ" requi#5A3E36>
                      </div>
                  <button class="btn btn-outline-primary mt-4" name="onSubmit" type="submit"><i class="fa fa-check-circle"></i> ບັນທຶກ</button>
                  <button class="btn btn-outline-light mt-4" onclick="_back()" type="reset"><i class="fa fa-times-circle"></i> ຍົກເລີກ</button>
                </form>
              </div>
            </div>
          </form>
        </div>
        <div class="col-xl-8 col-md-8 col-sm-8 ms-deletable">
          <div class="ms-card">
            <div class="ms-card-header clearfix">
              <h6 class="ms-card-title"><i class="fa fa-tasks"></i> ເມນູຍ່ອຍ</h6>
            </div>
            <div class="ms-card-body">
              <ul class="ms-list ms-task-block">
                <?php
                $i=1;
                $spaSubMenu=mysqli_query($con,"SELECT*FROM spa_submenu where m_id='$_GET[page]'");
                foreach ($spaSubMenu as $key) {
                  ?>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                <strong><?php echo $i; ?></strong>&nbsp; | &nbsp;&nbsp;&nbsp;
                 <span><?php echo $key['sub_name'] ?></span>
                  <div class="close">
                  <a href="editSub_menu.php?page=<?php echo $key['m_id'];?>&id=<?php echo $key['sub_id'];?>" class="mt-0"><i class="fa fa-edit"> </i> </a> &nbsp;
                  <a href="#" onclick="_deteteSubMenu(<?php echo $key['sub_id'];?>,<?php echo $key['m_id'];?>)" class="mb-0"><i class="fa fa-trash"> </i></a>
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
  $sub_id=$_SETSTRING($con, $_POST['sub_id']);
  $m_id=$_SETSTRING($con, $_POST['m_id']);
  $sub_name=$_SETSTRING($con, $_POST['sub_name']);
  $sub_link=$_SETSTRING($con, $_POST['sub_link']);

  $created=$_SQL($con,"INSERT INTO spa_submenu(sub_id,m_id,sub_name,sub_link)
  VALUES('$sub_id','$m_id','$sub_name','$sub_link')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='sub_menu.php?page=$_GET[page]'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='sub_menu.php?page=$_GET[page]'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_submenu WHERE sub_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='sub_menu.php?page=$_GET[page]'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='sub_menu.php?page=$_GET[page]'});</script>";
  }
}
?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
