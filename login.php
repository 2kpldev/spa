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
<?php include 'connection.php' ?>
<body>
  <div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6" style="margin-top: 10%">
    <div class="ms-panel ms-panel-fh">
      <div class="ms-panel-header" align="center">
        <h6><i class="fa fa-lock"></i> ເຂົ້າສູ່ລະບົບ</h6>
      </div>
      <div class="ms-panel-body">
        <form class="needs-validation" action="services/home" novalidate>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom08">ຊື <?php isVal() ?></label>
              <div class="input-group">
                <input type="email" class="form-control" id="validationCustom08" autofocus placeholder="ກະລຸນາປ້ອນຊື່" required>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationCustom09">ລະຫັດຜ່ານ <?php isVal() ?></label>
              <div class="input-group">
                <input type="password" class="form-control" id="validationCustom09" placeholder="ກະລຸນາປ້ອນລະຫັດຜ່ານ" required>
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
          <button class="btn btn-primary mt-4 d-block w-100" type="submit">ລອັກອີນ</button>
        </form>
      </div>
    </div>
</div>
<div class="col-md-3"></div>
</body>
</html>