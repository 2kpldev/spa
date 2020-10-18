<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <?php include '../../connection.php' ?>
  <style media="screen">
  #stocks{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-industry{color: #5A3E36}
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
      $get_resultset=mysqli_query($con,"SELECT*FROM spa_category");
      $rested=mysqli_num_rows($get_resultset);
      $detake=mysqli_query($con,"SELECT cateId from spa_category where cateId=(select max(cateId)from spa_category)");
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
                <div class="col-xl-12 col-md-12 pd-0">
                  <form action="#" method="post">
                    <div class="form-group d-flex m-0 fs-14 clearfix">
                     <input type="<?php if($rested>=1){echo "hidden";}else{echo "text";} ?>" class="form-control mr-2 fs-20"
                      name="cateId" value="<?php if($rested>=1){echo $id;}else{echo "";} ?>" placeholder="ປ້ອນລະຫັດໝວດເຄື່ອງ" required>
                      <div class="input-group">
                      <input type="text" class="form-control mr-2" name="cateName" placeholder="ປ້ອນຊື່ໝວດເຄື່ອງ" required>
                      <button type="submit" name="onSubmit" class="btn-sm btn-outline-primary float-right">
                        <i class="fa fa-check-circle"> </i> ບັນທຶກ
                      </button>
                    </div>
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
              <h6 class="ms-card-title">ໝວດເຄື່ອງທັງໝົດ</h6>
            </div>
            <div class="ms-card-body">
              <ul class="ms-list ms-task-block">
                <?php 
                  $x=1;
                  $callData=$_SQL($con,"select*from spa_category");
                  foreach ($callData as $key) {
                 ?>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                  <label class="ms-checkbox-wrap ms-todo-complete">
                    <?php echo $x; ?>
                  </label> <span> <?php echo $key['cateName'] ?> </span>
                  
                  <div class="close">
                    <a href="category-edit.php?id=<?php echo $key['cateId'];?>">
                      <i class="fa fa-edit mr-2"></i>
                    </a>
                    <a href="#" onclick="_deletCategory(<?php echo $key['cateId'];?>)">
                      <i class="fa fa-trash"></i>
                    </a>
                  </div>
                </li>
              <?php } ?>
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
<!-- Global required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>

<?php
if(isset($_POST['onSubmit'])){
  $cateId=$_SETSTRING($con, $_POST['cateId']);
  $cateName=$_SETSTRING($con, $_POST['cateName']);

  $created=$_SQL($con,"INSERT INTO spa_category VALUES('$cateId','$cateName','')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='category-list.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='category-list.php'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_category WHERE cateId='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='category-list.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='category-list.php'});</script>";
  }
}
?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
