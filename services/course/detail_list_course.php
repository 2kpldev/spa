
<?php
include '../../connection.php';

$sql_auto = mysqli_query($con, "select max(group_code)+1 as Maxid from spa_group_course");
$check_auto = mysqli_fetch_assoc($sql_auto);
$row_auto = $check_auto['Maxid'];
if ($row_auto == '') {
  $group_code = "0001";
} else {
  $group_code = sprintf("%04d", $row_auto);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php'?>
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
  <?php include '../../components/layout/loading.php'?>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <?php include '../../components/layout/sidenav-left.php'?>
  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <?php include '../../components/layout/navbar-top.php'?>
    <!-- Body Content Wrapper -->
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="ms-panel ms-widget ms-panel-fh">
        <div class="ms-panel-header">
          <div class="d-flex justify-content-between">
            <div class="align-self-center align-left">
              <h5> <?php _back();?> ລາຍການຄອດໃໝ່</h5>
            </div>
            </div>
          </div>
          <div class="ms-card-body">
            <?php
            $get_resultset = mysqli_query($con, "SELECT*FROM spa_list_course");
            $rested = mysqli_num_rows($get_resultset);
            if($rested < 1 ){
              isEmpty();
            }else{
              ?>
            <ul class="ms-list ms-task-block">
                <?php
                $spalist = mysqli_query($con, "SELECT*FROM spa_list_course left join spa_group_course on spa_list_course.groupcode=spa_group_course.group_code");
                $i = 1;
                foreach ($spalist as $list) {
                  ?>
                  <li class="ms-list-item ms-to-do-task ms-deletable">
                    <strong><?php echo $i; ?></strong>&nbsp; | &nbsp;&nbsp;&nbsp;
                    <span> <?php echo $list['list_name'] ?></span>
                    <div class="close">
                      <a href="#" id="<?php echo $list['list_id'] ?>" class="mt-0 edit_data"><i class="fa fa-edit"> </i> </a> &nbsp;
                      <a href="#" onclick="_deteteGroup(<?php echo $list['list_id'] ?>)" class="mb-0"><i class="fa fa-trash"> </i></a>
                    </div>
                  </li>
                  <?php $i++;} ?>
                </ul>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</main>

<div class="modal fade" id="group_course" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title has-icon text-white"> ເພີ່ມກຸ່ມຄອດ</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
      </button> -->
    </div>
    <form action="" method='post'>
      <div class="modal-body">
        <div class="ms-form-group">
          <label>ລະຫັດຄອດ</label>
          <input type="text" class="form-control" readonly name="group_code" name='group_code' value="<?=$group_code;?>" />
        </div>
        <div class="ms-form-group">
          <label>ລະຫັດກຸ່ມຄອດ</label>
          <input type="text" class="form-control" readonly name="group_code" name='group_code' value="<?=$group_code;?>" />
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="ms-form-group">
              <label>ຊື່ກຸ່ມຄອດ</label>
              <input type="text" class="form-control" name="group_name" id="group_name" required="required" />
            </div>
            <div class="ms-form-group">
              <label>ໝາຍເຫດ</label>
              <textarea name="group_remark" id="group_remark" class="form-control" rows="3" ></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <input type="hidden" id="edit_modal" name="edit_modal">
        <button type="submit" class="btn btn-outline-primary btn-sm has-icon" id="edit" name="edit"><i class="fa fa-check"></i> ແກ້ໄຂ</button>
        <button type="submit" name='onSubmit' id='onSubmit' class="btn btn-outline-primary btn-sm has-icon">
          <i class="fa fa-check"></i> ບັນທຶກ
        </button>
        <button type="button" data-dismiss="modal" class="btn btn-outline-light btn-sm has-icon" >
          <i class="fa fa-times"></i> ປິດ</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Quick bar -->
<?php include '../../components/layout/quickbar.php'?>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<?php include '../../components/libary/script.php'?>
<script>
$('#edit').hide();
$(document).on("click","#close",function(){
  window.location='detail_list_course.php';
});

$(document).on("click",".edit_data",function(){
  var edit_modal=$(this).attr("id");
  $.ajax({
    url:"query_group_update.php",
    method:"POST",
    data:{edit_modal:edit_modal},
    dataType:"json",
    success:function(data){
      $("#group_code").val(data.group_code);
      $("#group_name").val(data.group_name);
      $("#group_remark").val(data.group_remark);
      $("#edit_modal").val(data.group_id);

      $('#group_course').modal('show');
      $('#onSubmit').hide();
      $('#edit').show();
    }
  });
});
</script>
<?php
if (isset($_POST['onSubmit'])) {
  $group_code = $_SETSTRING($con, $_POST['group_code']);
  $group_name = $_SETSTRING($con, $_POST['group_name']);
  $group_remark = $_SETSTRING($con, $_POST['group_remark']);
  $group_insert = "ທ້າວ ໄຊວິລິຍະ ວັງນະວົງ";

  $created = $_SQL($con, "INSERT INTO spa_group_course(group_code,group_name,group_remark,group_insert)VALUES('$group_code','$group_name','$group_remark','$group_insert')");
  if ($created) {
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='detail_list_course.php'})</script>";
  } else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='detail_list_course.php'});</script>";
  }
}

if (isset($_POST['edit'])) {
  $group_code = $_SETSTRING($con, $_POST['group_code']);
  $edit_modal = $_SETSTRING($con, $_POST['edit_modal']);
  $group_name = $_SETSTRING($con, $_POST['group_name']);
  $group_remark = $_SETSTRING($con, $_POST['group_remark']);
  $group_insert = "ທ້າວ ໄຊວິລິຍະ ວັງນະວົງ";

  $updated = $_SQL($con, "update spa_group_course set group_name='$group_name',group_remark='$group_remark',group_insert='$group_insert' where group_id='$edit_modal'");
  if ($updated) {
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {<loc</loca>tion='detail_list_course.php'})</script>";
  } else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {<loc</loca>tion='detail_list_course.php'});</script>";
  }
}

if (isset($_GET['del'])) {
  $_onDelete = $_SQL($con, "DELETE FROM  spa_group_course WHERE group_id='$_GET[del]'");
  if ($_onDelete) {
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {<loc</loca>tion='detail_list_course.php'})</script>";
  } else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {<loc</loca>tion='detail_list_course.php'});</script>";
  }
}
?>
</body>
<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
