<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <!-- Iconic Fonts -->
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
include './connection.php';
?>

<body background="assets/img/bg.jpg" style="background-size:cover">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="margin-top: 15%">
      <div class="ms-panel ms-panel-fh" style="border-radius:20px">
        <div class="ms-panel-header" align="center">
          <h3><strong>ລາວປາຍຸກຄວາມງາມ</strong></h3>
        </div>
        <div class="ms-panel-body">
          <form action="#" method="post">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom08">ຊື່ ຫຼື ເບີໂທ<?php isVal() ?></label>
                <div class="input-group">
                  <input type="text" class="form-control" name="username" autofocus placeholder="ກະລຸນາປ້ອນຊື່ ຫຼື ເບີໂທ" required>
                </div>
              </div>
              <div class="col-md-6 mb-2">
                <label for="validationCustom09">ລະຫັດຜ່ານ <?php isVal() ?></label>
                <div class="input-group">
                  <input type="password" name="password" class="form-control" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="ms-checkbox-wrap">
                <input class="form-check-input" type="checkbox" value="">
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
    <script>
      window.history.forward()
    </script>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/AIO/notiflix-aio-2.0.0.min.js"></script>

    <?php
    if (isset($_POST['onLogin'])) {
      @session_start();
      @$username = $_POST['username'];
      @$pass = md5($_POST['password']);

        $Data_users = mysqli_query($con, "SELECT * FROM spa_staff WHERE staff_username='$username' and staff_password='$pass'");
        $count = mysqli_num_rows($Data_users);
        
        if ($count == 1) {
          $row = mysqli_fetch_array($Data_users);
          $userid = $_SESSION['staff_id'] = $row['staff_id'];
          $_SESSION['staff_name'] = $row['staff_name'];
          $_SESSION['staff_lname'] = $row['staff_lname'];
          $_SESSION['staff_username'] = $row['staff_username'];
          $_SESSION['staff_role'] = $row['staff_role'];
          $_SESSION['staff_img'] = $row['staff_img'];
          $_SESSION['loggedin'] = 1;
          echo "<script>Notiflix.Loading.Standard('ກຳລັງດຳເນີນງານ...');setInterval(function () {window.location='./services/home/index.php'}, 500);</script>";
        } else {
          echo "<script> Notiflix.Report.Failure('ຜິດພາດ','ຊື່ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ກະລຸນາລອງໃໝ່ອີກຄັ້ງ !', 'ປິດ',function () {location='login.php'});</script>";
        }
      }
    ?>
</body>

</html>