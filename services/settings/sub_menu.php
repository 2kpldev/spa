<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <?php include '../../helper/index.php' ?>
  <style media="screen">
  #settings{
    border-left: 4px solid red;
    border-bottom: 1px solid red;
  }
  .fa-cog{color: red}
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
      $get_resultset=mysqli_query($con,"SELECT*FROM sp_submenu");
      $rested=mysqli_num_rows($get_resultset);
      $detake=mysqli_query($con,"SELECT sub_id from sp_submenu where sub_id=(select max(sub_id)from sp_submenu)");
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
                <h6>ຈັດການເມນູຍ່ອຍ</h6>
              </div>
              <div class="ms-panel-body">
                <form class="needs-validation" action="" novalidate>

                      <label for="validationCustom08">ລະຫັດ <?php isVal() ?></label>
                      <div class="input-group">
                        <input type="text" class="form-control"
                        <?php if($rested>=1){echo "readonly";}else{echo "";} ?>
                         autofocus value="<?php if($rested>=1){echo $id;}else{echo "";} ?>" required>
                      </div>

                      <label for="validationCustom09">ລະຫັດຜ່ານ <?php isVal() ?></label>
                      <div class="input-group">
                        <input type="password" class="form-control" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required>
                      </div>
                  <button class="btn btn-outline-primary mt-4" type="submit"><i class="fa fa-check-circle"></i> ບັນທຶກ</button>
                  <button class="btn btn-outline-light mt-4" type="reset"><i class="fa fa-times-circle"></i> ຍົກເລີກ</button>
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
                $spaMenu=mysqli_query($con,"SELECT*FROM sp_submenu where m_id=$_GET['page']");
                $i=1;
                foreach ($spaMenu as $key) {
                  ?>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                <strong><?php echo $i; ?></strong>&nbsp; | &nbsp;&nbsp;&nbsp;
                 <span><?php echo $key['m_icon'] ?> <?php echo $key['m_name'] ?></span>
                  <div class="close">
                  <a href="" class="mt-0"><i class="fa fa-plus-circle"> </i> </a> &nbsp;
                  <a href="" class="mt-0"><i class="fa fa-edit"> </i> </a> &nbsp;
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
<!-- Global Required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
<?php
if(isset($_POST['onSubmit'])){
  $m_id=$_SETSTRING($con, $_POST['m_id']);
  $m_icon=$_SETSTRING($con, $_POST['m_icon']);
  $m_name=$_SETSTRING($con, $_POST['m_name']);
  $tab_id=$_SETSTRING($con, $_POST['tab_id']);

  $created=$_SQL($con,"INSERT INTO sp_menu(m_id,m_icon,m_nameມtab_id)VALUES('$m_id','$m_icon','$m_name','$tab_id')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='menu.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='menu.php'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  sp_menu WHERE m_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='menu.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='menu.php'});</script>";
  }
}
?>
</body>
<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
