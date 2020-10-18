
<?php
include '../../connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
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
      $get_resultset=mysqli_query($con,"SELECT*FROM spa_rank");
      $rested=mysqli_num_rows($get_resultset);
      $detake=mysqli_query($con,"SELECT rank_id from spa_rank where rank_id=(select max(rank_id)from spa_rank)");
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
                <div class="col-xl-12 col-md-2 pd-0">
                  <form action="" method="post">
                    <div class="form-group d-flex m-0 fs-14 clearfix">
                    <?php _back('../settings/index.php') ?> 

                     <input type="<?php if($rested>=1){echo "hidden";}else{echo "text";} ?>" class="form-control mr-2 fs-20"
                      name="rank_id" value="<?php if($rested>=1){echo $id;}else{echo "";} ?>" required>
                      <div class="input-group">
                      <input type="text" class="form-control mr-2 fs-20"  name="rank_name" placeholder="ປ້ອນຕຳແໜ່ງ" required>
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
              <h6 class="ms-card-title"><i class="fa fa-tasks"></i> ເພີ່ມຂໍ້ມູນຕຳແໜ່ງ</h6>
            </div>
            <div class="ms-card-body">
              <ul class="ms-list ms-task-block">
                <?php
                $sparank=mysqli_query($con,"SELECT*FROM spa_rank");
                $i=1;
                foreach ($sparank as $rank) {
                  ?>
                <li class="ms-list-item ms-to-do-task ms-deletable">
                <strong><?php echo $i; ?></strong>&nbsp; | &nbsp;&nbsp;&nbsp;
                 <span><?php echo $rank['rank_name'] ?></span>
                  <div class="close">
                  <a href="update_rank.php?rank_id=<?php echo $rank['rank_id'];?>" class="mt-0"><i class="fa fa-edit"> </i> </a> &nbsp;
                  <a href="#" onclick="_deteteRank(<?php echo $rank['rank_id'];?>)" class="mb-0"><i class="fa fa-trash"> </i></a>
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
<!-- Global required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
<?php
if(isset($_POST['onSubmit'])){
  $rank_id=$_SETSTRING($con, $_POST['rank_id']);
  $rank_name=$_SETSTRING($con, $_POST['rank_name']);


  $created=$_SQL($con,"INSERT INTO spa_rank(rank_id,rank_name)VALUES('$rank_id','$rank_name')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='add_rank.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='add_rank.php'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_rank WHERE rank_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='add_rank.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='add_rank.php'});</script>";
  }
}
?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
