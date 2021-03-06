<?php
include "../../connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php'?>
  <style media="screen">
  #products{
    border-left: 4px solid #5A3E36;
    border-bottom: 1px solid #5A3E36;
  }
  .fa-gift{color: #5A3E36}
  label{
    font-weight:bold;
  }
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
              <h5><?php _back();?> ເພີ່ມຂໍ້ມູນລາຍການຄອດໃໝ່</h5>
            </div>
          </div>
        </div>

        <div class="ms-panel ms-panel-fh">
          <div class="ms-panel-body">
            <form class="ms-form-wizard style1-wizard" id="insert_data">
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <div class="fileupload fileupload-new text-center" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 150px; height: 180px;"><img src='img/photo.jpg' alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 150px; max-height: 180px; line-height: 20px;"></div>
                    <div>
                      <span class="btn btn-sm  btn-primary btn-file">
                        <span class="fileupload-new"  style="color:white">ເລືອກຮູບ </span>
                        <span class="fileupload-exists"  style="color:white">ປ່ຽນຮູບ</span>
                      <input type="file" name="list_img" id="list_img">
                    </span>


                  </div>
                </div>
              </div>
            </div>
            <div class="form-row">
            <div class="col-md-6 mb-3">
                <label>ກຸ່ມຄອດ <?php isVal();?></label>
                <div class="input-group">

                  <select class="form-control" name='groupcode' id="groupcode" required>
                    <option value="">ກະລຸນາເລືອກກຸ່ມຄອດ</option>

                    <?php
                        $sel_group = mysqli_query($con, "select*from spa_group_course");

                        foreach ($sel_group as $group) {

                            echo "<option value='" . $group['group_code'] . "'>" . $group['group_name'] . "</option>";
                        }

                        ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label>ຊື່ຄອດ <?php isVal();?></label>
                <div class="input-group">
                  <input type="text" class="form-control" required placeholder="ຊື່ຄອດ"  name='list_name' id="list_name" required>
                </div>
              </div>

            </div>
            <div class="form-row">
            <div class="col-md-12 mb-3">
                <label>ລາຍລະອຽດຄອດ</label>
                <div class="input-group">

                  <textarea name="list_detail" id="list_detail" class="form-control" rows="3" placeholder='ລາຍລະອຽດ'></textarea>

                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label>ລາຄາ/ຄັ້ງ <?php isVal();?></label>
                <div class="input-group">
                  <input type="number" class="form-control" name='list_price_once' id="list_price_once" required>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ລາຄາ/ຄອດ <?php isVal();?></label>
                <div class="input-group">
                  <input type="number" class="form-control" placeholder="ລາຄາ/ຄອດ" name='list_price_course' id="list_price_course" required>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label>ສ່ວນຫຼຸດ</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ສ່ວນຫຼຸດ" name='list_discount' id="list_discount" value="0">
                </div>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label>ຈຳນວນຄັ້ງ/ຄອດ <?php isVal();?></label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="ຈຳນວນຄັ້ງ/ຄອດ" name='list_qty_course' id="list_qty_course" required>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label>ສະຖານະ <?php isVal();?></label>
                <select class="form-control" name='list_status' id="list_status" required>
                    <option value="">ກະລຸນາເລືອກສະຖານະ</option>
                    <option value="on">ເປີດບໍລິການ</option>
                    <option value="off">ປິດບໍລິການ</option>
                  </select>
              </div>

              <div class="col-md-12 mb-3">
                <label>ໝາຍເຫດ</label>
                <div class="input-group">

                    <textarea name="list_remark" id="list_remark" class="form-control" rows="3"></textarea>

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
<?php include '../../components/layout/quickbar.php'?>
<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->

<?php include '../../components/libary/script.php'?>
<!-- <script src="../../assets/js/jquery-3.3.1.min.js"></script> -->

<script>

$('#insert_data').on('submit',function(event){
  event.preventDefault();

  $.ajax({
    url:'save_list_course.php',
    method:'post',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success: function(dataResult) {
      var dataResult = JSON.parse(dataResult);

      if (dataResult.statusCode == 200) {
        Notiflix.Report.Success('ສຳເລັດ','ການດຳເນີນງານສຳເລັດ...', 'ປິດ');

        $("#insert_data")[0].reset();
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
<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
