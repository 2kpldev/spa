
<?php
include '../../connection.php';

$sql_auto=mysqli_query($con,"select max(group_code)+1 as Maxid from spa_group_course");
$check_auto=mysqli_fetch_assoc($sql_auto);
$row_auto=$check_auto['Maxid'];
if($row_auto==''){
  $group_code="0001";
}else{
  $group_code=sprintf("%04d",$row_auto);
}
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
    $detake=mysqli_query($con,"SELECT rank_code from spa_rank where rank_id=(select max(rank_id)from spa_rank)");
    $result=mysqli_fetch_array($detake);
    $id=$result[0]+1;
    ?>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel">
              <div class="ms-panel-header">
                <h6>
                  <i class="fa fa-gift"></i> ຜະລິດຕະພັນ
                  <a href="#" data-toggle="modal" data-target="#group_course" class="btn btn-outline-primary btn-sm" style="float: right"><i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>
                </h6>
              </div>
            <div class="ms-panel-body">
              <div class="table-responsive">
                <table id="display" class="table table-striped thead-primary w-100">
                  <thead>
                    <tr>
                      <th>ລຳດັບ</th>
                      <th>ລະຫັດກຸ່ມຄອດ</th>
                      <th>ຊື່ກຸ່ມຄອດ</th>
                      <th>ໝາຍເຫດ</th>
                      <th>ຜູ້ບັນທຶກ</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $spagroup=mysqli_query($con,"SELECT*FROM spa_group_course");
                    $i=1;
                    foreach ($spagroup as $group) {
                      ?>
                      <tr id="data">
                        <td><?php echo $i;?></td>
                        <td><?=$group['group_code'];?></td>
                        <td><?=$group['group_name'];?></td>
                        <td><?=$group['group_remark'];?></td>
                        <td><?=$group['group_insert'];?></td>
                        <td>
                          <a href="#"  id="<?php echo $group['group_id'];?>" class="mt-0 edit_data"><i class="fa fa-edit"> </i> </a> &nbsp;
                          <a href="#" onclick="_deteteGroup(<?php echo $group['group_id'];?>)" class="mb-0"><i class="fa fa-trash"> </i></a>

                        </td>
                      </tr>
                    </tbody>
                    <?php $i++;} ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</main>

<div class="modal fade" id="group_course" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
  <div class="modal-dialog modal-lg modal-dialog-cente#5A3E36" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title has-icon text-white"> ເພີ່ມກຸ່ມຄອດ</h5>
    </div>
    <form action="" method='post'>
      <div class="modal-body">
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
        <button type="button" id='close' class="btn btn-outline-light btn-sm has-icon" >
          <i class="fa fa-times"></i> ປິດ</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>
<script>

$('#edit').hide();
$(document).on("click","#close",function(){
  window.location='add_group_course.php';
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
if(isset($_POST['onSubmit'])){
  $group_code=$_SETSTRING($con, $_POST['group_code']);
  $group_name=$_SETSTRING($con, $_POST['group_name']);
  $group_remark=$_SETSTRING($con, $_POST['group_remark']);
  $group_insert="ທ້າວ ໄຊວິລິຍະ ວັງນະວົງ";


  $created=$_SQL($con,"INSERT INTO spa_group_course(group_code,group_name,group_remark,group_insert)VALUES('$group_code','$group_name','$group_remark','$group_insert')");
  if($created){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='add_group_course.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='add_group_course.php'});</script>";
  }
}


if(isset($_POST['edit'])){
  $group_code=$_SETSTRING($con, $_POST['group_code']);
  $edit_modal=$_SETSTRING($con, $_POST['edit_modal']);
  $group_name=$_SETSTRING($con, $_POST['group_name']);
  $group_remark=$_SETSTRING($con, $_POST['group_remark']);
  $group_insert="ທ້າວ ໄຊວິລິຍະ ວັງນະວົງ";


  $updated=$_SQL($con,"update spa_group_course set group_name='$group_name',group_remark='$group_remark',group_insert='$group_insert' where group_id='$edit_modal'");
  if($updated){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='add_group_course.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='add_group_course.php'});</script>";
  }
}

if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_group_course WHERE group_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='add_group_course.php'})</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='add_group_course.php'});</script>";
  }
}
?>
</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
