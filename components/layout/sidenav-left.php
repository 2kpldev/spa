<?php include "../../connection.php";?>
<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
  <!-- Logo -->
  <div class="logo-sn ms-d-block-lg">
    <a class="pl-0 ml-0 text-center" href="index.html">
      <img src="../../assets/img/costic/costic-logo-216x62.png" alt="logo">
    </a>
  </div>
  <!-- Navigation -->
  <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
    <!-- index -->
    <li class="menu-item" id="home">
      <a href="../../services/home"> <span><i class="fas fa-home"></i> ໜ້າຫຼັກ</span>
      </a>
    </li>
    <!-- product -->

    <li class="menu-item" id="products">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product">
         <span><i class="fa fa-gift fs-16"></i>  ຜະລິດຕະພັນ </span>
      </a>
      <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li> <a href="../products/product-list.php"> ຜະລິດຕະພັນ 1</a>
        </li>
        <li> <a href="../products/product-list.php">ຜະລິດຕະພັນ 2</a>
        </li>
      </ul>
    </li>

    <!-- services end -->
    <li class="menu-item" id="service">
      <a href="#" class="has-chevron" data-toggle="collapse" data-target="#services" aria-expanded="false" aria-controls="services">
        <span><i class="fa fa-heart fs-16"></i> ການບໍລິການ </span>
      </a>
      <ul id="services" class="collapse" aria-labelledby="services" data-parent="#side-nav-accordion">
        <li> <a href="../service/services-list.php"> ການບໍລິການ</a>
        </li>
        <li> <a href="pages/product/productlist.html"> ການບໍລິການ</a>
        </li>
      </ul>
      </li>

      <!-- customer -->
      <li class="menu-item" id="customers">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#customer" aria-expanded="false" aria-controls="customer">
           <span><i class="fa fa-users fs-16"></i>  ຈັດການລູກຄ້າ </span>
        </a>
        <ul id="customer" class="collapse" aria-labelledby="customer" data-parent="#side-nav-accordion">
          <li><a href="../customer/customer-list.php"> ຂໍ້ມູນລູກ</a> </li>
          <li> <a href="../customer/customer-list.php">ລູກຄ້າ 2</a></li>
        </ul>
      </li>
      <!-- staff -->
      <li class="menu-item" id="staffs">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="staff">
           <span><i class="fa fa-user fs-16"></i>  ຈັດການພະນັກງານ </span>
        </a>
        <ul id="staff" class="collapse" aria-labelledby="staff" data-parent="#side-nav-accordion">
          <li> <a href="../staff/staff-list.php"> ຂໍ້ມູນພະນັກງານ</a></li>
          <li> <a href="../staff/follow-up.php"> ຕິດຕາມພະນັກງານ</a></li>
          <li> <a href="../staff/pay-slip.php"> ເບີກຈ່າຍເງິນເດືອນ</a>
          </li>
        </ul>
      </li>
      <!-- customer -->
      <li class="menu-item" id="stocks">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#stock" aria-expanded="false" aria-controls="stock">
           <span><i class="fa fa-pie-chart fs-16"></i>  ຈັດການສາງເຄື່ອງ </span>
        </a>
        <ul id="stock" class="collapse" aria-labelledby="stock" data-parent="#side-nav-accordion">
          <li> <a href="../stock/put-on.php"> ບ່ອນເກັບມ້ຽນ</a></li>
          <li> <a href="../stock/stock-list.php"> ເອົາເຄື່ອງເຂົ້າສາງ</a></li>
          <li> <a href="../stock/"> ເບີກເຄື່ອງອອກສາງ</a></li>
          </li>
        </ul>
      </li>
      <!-- report -->
      <li class="menu-item"  id="reports">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false" aria-controls="report">
           <span><i class="fa fa-bar-chart fs-16"></i>  ລາຍງານ </span>
        </a>
        <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
          <li> <a href="../report/report-customer.php"> ລາຍງານຂໍ້ມູນລູກຄ້າ</a>
          </li>
          <li> <a href="../report/report-stocks.php">ລາຍງານຂໍ້ມູນເຄື່ອງ</a>
          </li>
        </ul>
      </li>
    <!-- restaurants -->
    <li class="menu-item" id="settings">
      <a href="../settings/"> <span><i class="fa fa-cogs fs-16"></i> ຕັ້ງຄ່າ</span>
      </a>
    </li>
    <!-- restaurants end -->
  </ul>
</aside>
<!-- Sidebar Right -->
