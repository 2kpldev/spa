
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
            <div class="ms-panel-body">
              <div class="row">
                <div class="col-xl-12 col-md-6 pd-0">
						      <h3>>> ລາຍການຄອດ</h3>
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
            
			  <a  href="add_list_course.php" class="btn btn-outline-primary btn-sm has-icon">
              <i class="fa fa-plus-circle"></i> ເພີ່ມ</a>
            </div>
            <div class="ms-card-body">
					
					   <div class="ms-panel-body">
              <div class="table-responsive">
                <table id="data-table" class="table table-striped thead-primary w-100">
						<thead>	
							<tr>
								<th>ລຳດັບ</th>
								<th>ລະຫັດຄອດ</th>
								<th>ຊື່ກຸ່ມຄອດ</th>
								<th>ຊື່ຄອດ</th>
								<th>ລາຍລະອຽດ</th>
								<th>ລາຄາ/ຄັ້ງ</th>
								<th>ລາຄາ/ຄອດ</th>
								<th>ສ່ວນຫລຸດ</th>
								<th>ຈຳນວນ/ຄອດ</th>
								<th>ສະຖານະ</th>
								<th>ໝາຍເຫດ</th>
								<th>ຜູ້ບັນທຶກ</th>
                <th></th>
							</tr>
						
						</thead>
						<tbody>
            <?php
                $spalist=mysqli_query($con,"SELECT*FROM spa_list_course left join spa_group_course on spa_list_course.groupcode=spa_group_course.group_code");
                $i=1;
                foreach ($spalist as $list) {
                  ?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?=$list['list_code'];?></td>
								<td><?=$list['group_name'];?></td>
								<td><?=$list['list_name'];?></td>
								<td><?=$list['list_detail'];?></td>
								<td><?=$list['list_price_once'];?></td>
								<td><?=$list['list_price_course'];?></td>
								<td><?=$list['list_discount'];?></td>
								<td><?=$list['list_qty_course'];?></td>
								<td><?=$list['list_status'];?></td>
								<td><?=$list['list_remark'];?></td>
								<td><?=$list['list_insert'];?></td>
								<td>
                <a href="update_list_course.php?list=<?php echo $list['list_id'];?>" class="mt-0"><i class="fa fa-edit"> </i> </a> &nbsp;
                <a href="#" onclick="_deteteList(<?php echo $list['list_id'];?>)" class="mb-0"><i class="fa fa-trash"> </i></a>
                
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
  </div>

</div>
</div>
</main>

<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
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



if(isset($_GET['del'])){
  $_onDelete=$_SQL($con,"DELETE FROM  spa_list_course WHERE list_id='$_GET[del]'");
  if($_onDelete){
    echo "<script> Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function () {location='detail_list_course.php'});</script>";
  }else {
    echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ການດຳເນີນງານບໍ່ສຳເລັດ !', 'ປິດ',function () {location='detail_list_course.php'});</script>";
  }
}
?>
</body>
<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
