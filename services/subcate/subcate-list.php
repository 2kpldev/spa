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
      <div class="ms-panel ms-email-panel">
        <div class="ms-panel-body p-0">
          <div class="ms-email-aside">
            <ul class="ms-list ms-email-list">
              <li class="ms-list-item ms-email-label"><h4> ປະເພດເຄື່ອງ</h4></li>
              <hr>
              <?php 
              $x=1;
              $callData=$_SQL($con,"SELECT*FROM spa_category");
              foreach ($callData as $key) {
               ?>
               <li class="ms-list-item ms-active-email">
                <a href="#"><?php echo $x ?> <?php echo $key['cateName'] ?><span>32</span>
                </a>
              </li>
              <?php $x++; } ?>
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
                  <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#reminder-modal"> <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
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
                <li>
                  <div class="input-group float-right pt-3">
                    <input type="text" class="form-control mr-1" id="search" name="cateId" placeholder="ຄົ້ນຫາ" required>
                    <button class="btn-sm btn-outline-primary"> <i class="fa fa-search"></i> </button>
                  </div>
                </li>
              </ul>
            </div>
            <!-- Email Content -->
            <div class="ms-email-content" id="subMain">

            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- MODALS -->
    <!-- Reminder Modal -->
    <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary">
            <h5 class="modal-title has-icon text-white"> ເພີ່ມລາຍການເຄື່ອງເຂົ້າສາງ</h5>
            <?php _close() ?>
          </div>
          <form action="#" method="post">
            <div class="modal-body">
              <div class="ms-form-group">
                <label>ໝວດເຄື່ອງ <?php isVal() ?></label>
                <select name="cateId" class="form-control" id="" required>
                  <option value="">ເລືອກ</option>
                  <?php 
                  $callData=$_SQL($con,"SELECT*FROM spa_category");
                  foreach ($callData as $key) {
                   ?>
                   <option value="<?php echo $key['cateId'] ?>">
                    <?php echo $key['cateName'] ?></option>
                  <?php } ?>
                 </select>
             </div>
             <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <label>ຊື່ລາຍການເຄື່ອງ</label>
                  <input type="text" class="form-control" name="subCateName" placeholder="ປ້ອນຊື່ລາຍການເຄື່ອງ" required/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <label>ຫົວໜ່ວຍ</label>
                  <input type="text" class="form-control" name="unit" placeholder="ປ້ອນຫົວໜ່ວຍເຄື່ອງ" required/>
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <label>ຂະໜາດ</label>
                  <ul class="ms-list ms-list-display">
                      <li>
                        <label class="ms-checkbox-wrap ms-checkbox-primary">
                          <input type="radio" name="subCatesize" value="ນ້ອຍ" required> 
                          <i class="ms-checkbox-check"></i>
                        </label> <span> ນ້ອຍ </span> &nbsp;&nbsp;
                         <label class="ms-checkbox-wrap ms-checkbox-primary">
                          <input type="radio" name="subCatesize" value="ກາງ" required> 
                          <i class="ms-checkbox-check"></i>
                        </label> <span> ກາງ </span>&nbsp;&nbsp;
                        <label class="ms-checkbox-wrap ms-checkbox-primary">
                          <input type="radio" name="subCatesize" value="ໃຫຍ່" required> 
                          <i class="ms-checkbox-check"></i>
                        </label> <span> ໃຫຍ່ </span>
                      </li>
                    </ul>

                </div>
              </div>
            </div>
            <div class="ms-form-group"> 
              <span class="ms-option-name fs-14">ສະຖານະ</span>
              <label class="ms-switch float-right">
                <input type="checkbox" name="status">
                 <span class="ms-switch-slider round"></span>
              </label>
            </div>
            <div class="ms-form-group">
              <label>ໝາຍເຫດ</label>
              <textarea class="form-control" name="note"></textarea>
            </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-outline-primary btn-sm has-icon" name="onSave">
              <i class="fa fa-check-circle"></i> ບັນທຶກ
            </button>
            <button type="reset" class="btn btn-outline-light btn-sm has-icon" data-dismiss="modal">
              <i class="fa fa-times-circle"></i> ປິດ</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Quick bar -->
    <?php include ('../../components/layout/quickbar.php') ?>
    <!-- Global required Scripts Start -->
    <?php include ('../../components/libary/script.php') ?>
<?php
if(isset($_POST['onSave'])){
  $cateId=$_SETSTRING($con, $_POST['cateId']);
  $subCateName=$_SETSTRING($con, $_POST['subCateName']);
  $unit=$_SETSTRING($con, $_POST['unit']);
  $subCatesize=$_SETSTRING($con, $_POST['subCatesize']);
  $_status=$_SETSTRING($con, $_POST['status']);
  $note=$_SETSTRING($con, $_POST['note']);

  if($_status==""){$status="off";}else{$status="on";}

  $created=$_SQL($con,"INSERT INTO spa_subcate(sub_cateId,cateId,subCateName,unit,subCatesize,status,note,createdAt,createdBy) VALUES('$_AUTO_ID','$cateId','$subCateName','$unit','$subCatesize','$status','$note','$_DATE','$_USER_NAME')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='subcate-list.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='subcate-list.php'});</script>";
  }
}
?>
  </body>

  </html>
