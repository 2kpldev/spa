<?php
include ("../../connection.php");
$staff_id=$_GET['staff_id'];
$sel_staff=mysqli_query($con,"select*from spa_staff left join spa_rank on spa_staff.rankcode=spa_rank.rank_code where staff_id='$staff_id'");
$staff=mysqli_fetch_assoc($sel_staff);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
  #staffs{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-user{color: #5A3E36}

  label{
    font-weight:bold;
  }
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
              <h6><i class="fa fa-user"></i>&nbsp; ແກ້ໄຂຂໍ້ມູນພະນັກງານໃໝ່</h6>
            </div>
            <a href="staff-list.php" class="btn btn-outline-primary btn-sm has-icon">
              <i class="fa fa-angle-double-left"></i> ຍ້ອນກັບ
            </a>

          </div>
        </div>

        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-body">
            <form class="ms-form-wizard style1-wizard" id="insert_data">

                <input type="hidden" name='staff_id' id="staff_id" value="<?=$staff_id;?>">

              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="fileupload fileupload-new text-center" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 150px; height: 180px;"><img src="img/<?=$staff['staff_img'];?>" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 180px; line-height: 20px;"></div>
                    <div>
                      <span class="btn btn-sm  btn-info  btn-file"><span class="fileupload-new">ເລືອກຮູບ </span><span class="fileupload-exists">ປ່ຽນຮູບ</span>
                      <input type="file" name="staff_img" id="staff_img">
                    </span>


                  </div>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>ຊື່ <?php isVal();?></label>
                <div class="input-group">
                  <input type="text" class="form-control" requi#5A3E36 placeholder="ຊື່"  name='staff_name' id="staff_name" value="<?=$staff['staff_name']?>" requi#5A3E36>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ນາມສະກຸນ</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ນາມສະກຸນ" name='staff_lname' id="staff_lname" value="<?=$staff['staff_lname']?>" requi#5A3E36>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label>ເພດ</label>
                <div class="input-group">

                  <select class="form-control" name='staff_gender' id="staff_gender" requi#5A3E36>
                    <option value="<?=$staff['staff_gender']?>"><?=$staff['staff_gender']?></option>
                    <option value="ທ້າວ">ຊາຍ</option>
                    <option value="ນາງ">ຍິງ</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label>ວັນເດືອນປີເກີດ</label>
                <div class="input-group">
                  <input type="date" class="form-control" value="<?=$staff['staff_dob']?>" name='staff_dob' id="staff_dob" requi#5A3E36>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label>ເບີໂທ</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ເບີໂທ" value="<?=$staff['staff_tel']?>" name='staff_tel' id="staff_tel" requi#5A3E36>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>ຊື່ຜູ້ນຳໃຊ້</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ຊື່ຜູ້ນຳໃຊ້" value="<?=$staff['staff_username']?>" name='staff_username' id="staff_username" requi#5A3E36>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ລະຫັດຜ່ານ</label>
                <div class="input-group">
                  <input type="password" class="form-control" placeholder="ລະຫັດຜ່ານ" value="<?=$staff['staff_password']?>" name='staff_password' id="staff_password" requi#5A3E36>
                </div>
              </div>

              <div class="col-md-4 mb-3">
                <label>ສິດທິນຳໃຊ້</label>
                <div class="input-group">

                  <select class="form-control" name='staff_role' id="staff_role" requi#5A3E36>
                    <option value="<?=$staff['staff_role']?>">
                        <?php
                            if($staff['staff_role']=='on'){echo "ເປີດການນຳໃຊ້";}
                            else if($staff['staff_role']=='off'){echo "ປິດການນຳໃຊ້";}
                            else{
                                echo "plase check form again";
                            }
                        ?>

                    </option>
                    <option value="on">ເປິດການນຳໃຊ້</option>
                    <option value="off">ປິດການນຳໃຊ້</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>ຕຳແໜ່ງ</label>
                <div class="input-group">
                  <select class="form-control" name='rankcode' id="rankcode" requi#5A3E36>
                    <option value="<?=$staff['rank_code']?>"><?=$staff['rank_name'];?></option>

                    <?php
                      $sel_rank="select*from spa_rank";
                      $result=$DB_con->prepare($sel_rank);
                      $result->execute();
                      while($rank=$result->fetch()){
                        echo "<option value='".$rank['rank_code']."'>".$rank['rank_name']."</option>";
                      }
                    ?>



                  </select>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ເງິນເດືອນພື້ນຖານ</label>
                <div class="input-group">
                  <input type="number" class="form-control" value="<?=$staff['staff_salary']?>" placeholder="ເງິນເດືອນພື້ນຖານ" name='staff_salary' id="staff_salary" requi#5A3E36>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ວັນເຂົ້າວຽກ</label>
                <div class="input-group">
                  <input type="date" class="form-control" value="<?=$staff['staff_date_in']?>"  value="<?=date('Y-m-d');?>" name='staff_date_in' id="staff_date_in" requi#5A3E36>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                <hr>
              </div>
              <div class="col-md-12 mb-3">
                <center>
                  <button type="submit" class="btn btn-outline-primary"><i class='fa fa-check-circle'></i> ບັນທຶກ</button>
                  <button type="reset" class="btn btn-outline-light"><i class='fa fa-times-circle'></i> ຍົກເລິກ</button>
                </center>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</main>
<!-- MODALS -->

<!-- Quick bar -->
<?php include ('../../components/layout/quickbar.php') ?>
<!-- SCRIPTS -->
<!-- Global Requi#5A3E36 Scripts Start -->

<?php include ('../../components/libary/script.php') ?>
<!-- <script src="../../assets/js/jquery-3.3.1.min.js"></script> -->

<script>

$('#insert_data').on('submit',function(event){
  event.preventDefault();

  $.ajax({
    url:'save_update_staff.php',
    method:'post',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success: function(dataResult) {
      var dataResult = JSON.parse(dataResult);

      if (dataResult.statusCode == 200) {
        Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ',function(){window.location='staff-list.php';});

        // $("#insert_data")[0].reset();
      }
      else if (dataResult.statusCode == 400) {
        Notiflix.Report.Warning('ຊື່ຜູ້ນຳໃຊ້ຊ້ຳກັນ','ກະລຸນາກວດສອບ...', 'ປິດ');
      }
      else if (dataResult.statusCode == 404) {
        Notiflix.Notify.Failure('ບັນທຶກຂໍ້ມູນບໍ່ສຳເລັດ');
      }
      else {
        Notiflix.Notify.Warning('ກະລຸນາແຈ້ງຜູ້ພັດທະນາ');
      }

    },
  });
});



</script>

</body>
<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
