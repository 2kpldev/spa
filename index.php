<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/AIO/notiflix-2.4.0.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/font/font-style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>
<?php
@session_start();
if ($_SESSION['loggedin'] != 1) {
    header('location:login.php');
} else {
}
function isVal()
{echo "<font style='color:red'>*</font>";}
?>

<body background="assets/img/splash.png" style="background-size:100%;">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top: 15%">
      <div class="ms-panel ms-panel-fh" style="border-radius:20px">
        <div class="ms-panel-header" align="center">
          <h3><strong>ຍິນດີຕ້ອນຮັບເຂົ້າສູ່ລະບົບ</strong></h3>
        </div>
        <div class="ms-panel-body">
          <form action="" method="post">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom08">ຊື່<?php isVal() ?></label>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" autofocus placeholder="ກະລຸນາປ້ອນຊື່ ຫຼື ເບີໂທ" required>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <label for="validationCustom09">ລະຫັດຜ່ານ <?php isVal() ?></label>
                <div class="input-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="ms-checkbox-wrap">
                <input class="form-check-input" onclick="_view()" type="checkbox" value="">
                <i class="ms-checkbox-check"></i>
              </label>
              <span> ສະແດງລະຫັດຜ່ານ </span>
            </div>
            <button class="btn btn-primary mt-4 d-block w-100" name="onLogin" type="submit"><strong>ລອ໊ກອີນ</strong></button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/AIO/notiflix-aio-2.0.0.min.js"></script>
    <?php
    include 'connection.php';
    if (isset($_POST['onLogin'])) {
      @session_start();
      @$username = $_SETSTRING($con,$_POST['username']);
      @$pass = $_SETSTRING($con,md5($_POST['password']));

      $DATA_USERS = mysqli_query($con, "SELECT * FROM spa_staff WHERE staff_username='$username' AND staff_password='$pass'");
      $count = mysqli_num_rows($DATA_USERS);

      if ($count == 1) {
        $row = mysqli_fetch_array($DATA_USERS);
        $userid = $_SESSION['staff_id'] = $row['staff_id'];
        $_SESSION['staff_name'] = $row['staff_name'];
        $_SESSION['staff_lname'] = $row['staff_lname'];
        $_SESSION['staff_username'] = $row['staff_username'];
        $_SESSION['staff_role'] = $row['staff_role'];
        $_SESSION['staff_img'] = $row['staff_img'];
        $_SESSION['loggedin'] = 1;
        echo "<script>Notiflix.Loading.Standard('ກຳລັງດຳເນີນງານ...');setInterval(function () {window.location='services/home/index.php'}, 500);</script>";
      } else {
        echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !', 'ປິດ',function () {window.location='index.php'});</script>";
      }
    }
    ?>
    <!-- show password  -->
    <script>
      function _view() {
        const newLocal = "password";
        var temp = document.getElementById(newLocal);
        if (temp.type === "password") {
          temp.type = "text";
        } else {
          temp.type = "password";
        }
      }
    </script>
  </body>
  </html>
