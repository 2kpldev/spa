<?php include "../../connection.php";?>
<!-- Sidebar Navigation Left -->
<?php $con = mysqli_connect('localhost', 'root', '', 'spadb');?>
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
    <?php
    $callMenu=mysqli_query($con,'SELECT*FROM spa_menu');
    foreach ($callMenu as $key) {
      ?>
      <li class="menu-item" id="<?php echo $key['tab_id'] ?>">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#<?php echo $key['tab_id2']; ?>" aria-expanded="false" aria-controls="<?php echo $key['tab_id2']; ?>">
          <span><i class="fa fa-<?php echo $key['m_icon']; ?>"></i>  <?php echo $key['m_name'] ?> </span>
        </a>
        <ul id="<?php echo $key['tab_id2']; ?>" class="collapse" aria-labelledby="<?php echo $key['tab_id2'];?>" data-parent="#side-nav-accordion">
          <?php
          $m_id=$key['m_id'];
          $callSubMenu=mysqli_query($con,"SELECT*FROM spa_submenu WHERE m_id='$m_id'");
          foreach ($callSubMenu as $keys) {
            ?>
            <li> <a href="<?php echo $keys['sub_link'];?>"> <?php echo $keys['sub_name'];?></a>  </li>
          <?php } ?>
        </ul>
      </li>
    <?php } ?>

<!-- restaurants -->
<li class="menu-item" id="settings">
  <a href="../settings/"> <span><i class="fa fa-cogs fs-16"></i> ຕັ້ງຄ່າ</span>
  </a>
</li>
<!-- restaurants end -->
</ul>
</aside>
<!-- Sidebar Right -->
