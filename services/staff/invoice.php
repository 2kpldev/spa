 <!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../../components/libary/lib.php' ?>
  <style media="screen">
    #product{
      border-left: 4px solid #5A3E36;
      border-bottom: 1px solid #5A3E36;
    }
     .fa-gift{color: #5A3E36}
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
    <div class="ms-content-wrapper">

      <div class="row">
        <div class="col-md-12">
          <div class="ms-panel ms-panel-fh">
            <div class="ms-panel-header">
              <h6>ຜະລິດຕະພັນ
                 <a href="#" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#reminder-modal" style="float: right"><i class="fa fa-plus-circle"></i>&nbsp; ເພີ່ມ</a>
              </h6>
            </div>
            <div class="ms-panel-body">
              <ul class="nav nav-tabs tabs-borde#5A3E36 d-flex nav-justified mb-4" role="tablist">
                <li role="presentation" ><a href="index.php" > ລາຍການ </a></li>
                <li role="presentation" ><a href="orders.php"> ລາຍການທີ່ເລືອກ </a></li>
                <li role="presentation" ><a href="#" class="active" > ລາຍການທີ່ຊື້ </a></li>
              </ul>
              <div class="tab-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="ms-panel">
                      <div class="ms-panel-header header-mini">
                        <div class="d-flex justify-content-between">
                          <h6>Invoice</h6>
                          <h6>#135178</h6>
                        </div>
                      </div>
                      <div class="ms-panel-body">
                        <!-- Invoice To -->
                        <div class="row align-items-center">
                          <div class="col-md-6">
                            <div class="invoice-address">
                              <h3>Reciever: </h3>
                              <h5>Anny Farisha</h5>
                              <p>Anny.123@hotmail.com</p>
                              <p class="mb-0">1642 Cambridge Drive, Phoenix, 85029 Arizona</p>
                              <p class="mb-0">Arizona</p>
                              <p>Phoenix</p>
                            </div>
                          </div>
                          <div class="col-md-6 text-md-right">
                            <ul class="invoice-date">
                              <li>Invoice Date : Saturday, April 07 2019</li>
                              <li>Due Date : Sunday, April 19 2019</li>
                            </ul>
                          </div>
                        </div>
                        <!-- Invoice Table -->
                        <div class="ms-invoice-table table-responsive mt-5">
                          <table class="table table-hover text-right thead-light">
                            <thead>
                              <tr class="text-capitalize">
                                <th class="text-center w-5">id</th>
                                <th class="text-left">description</th>
                                <th>qty</th>
                                <th>Unit Cost</th>
                                <th>total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">Grilled Sandwich</td>
                                <td>1</td>
                                <td>$30</td>
                                <td>$30</td>
                              </tr>
                              <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Fried Egg Sandwich</td>
                                <td>1</td>
                                <td>$69</td>
                                <td>$69</td>
                              </tr>
                              <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Spicy Grilled Burger</td>
                                <td>2</td>
                                <td>$19</td>
                                <td>$38</td>
                              </tr>
                              <tr>
                                <td class="text-center">2</td>
                                <td class="text-left">Peri Peri Fries</td>
                                <td>2</td>
                                <td>$9</td>
                                <td>$18</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="4">Total Cost:</td>
                                <td>$155</td>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                        <div class="invoice-buttons text-right">
                          <a href="#" onclick="print()" class="btn btn-outline-warning mr-2"><i class="fa fa-print"></i> ພິມ</a>
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
      </div>

    </div>

  </main>



  <!-- MODALS -->
  <!-- Quick bar -->
  <?php include ('../../components/layout/quickbar.php') ?>

  <!-- SCRIPTS -->
  <!-- Global required Scripts Start -->
<?php include ('../../components/libary/script.php') ?>

</body>


<!-- Mirro#5A3E36 from slidesigma.com/themes/html/costic/pages/product/productgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:10:07 GMT -->
</html>
