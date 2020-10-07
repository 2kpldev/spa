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
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/datatables.min.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/font/font-style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>
<?php include 'helper/index.php' ?>
<?php include 'connection.php' ?>
<body>
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6" style="margin-top: 10%">
    <div class="ms-panel ms-panel-fh">
      <div class="ms-panel-header" align="center">
        <h3><strong>ລາວປາຍຸກຄວາມງາມ</strong></h3>
      </div>
      <div class="ms-panel-body">
        <form class="needs-validation" action="" method="post">
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom08">ຊື <?php isVal() ?></label>
              <div class="input-group">
                <input type="text" class="form-control" name="username" autofocus placeholder="ກະລຸນາປ້ອນຊື່" required>
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
          <button class="btn btn-primary mt-4 d-block w-100" name="onLogin" type="submit">ລອ໊ກອີນ</button>
        </form>
      </div>
    </div>
</div>
<div class="col-md-3"></div>
<?php
include 'connection.php';
if(isset($_POST['login'])){
@session_start();
@$username=$_POST['username'];
@$pass=md5($_POST['password']);

$Data_users=mysqli_query($con,"SELECT * FROM tb_users where user_name='$username' or user_email='$username' and user_password='$pass'");
$count=mysqli_num_rows($Data_users);
if($count==1){
  $row=mysqli_fetch_array($Data_users);
  $userid=$_SESSION['user_id']=$row['user_id'];
  $_SESSION['user_fname']=$row['user_fname'];
  $_SESSION['user_lname']=$row['user_lname'];

header("services/home");
}
else {
  echo $val_none;
}
}
 ?>
 <script>
   window.history.forward()
 </script>
</body>
</html>
