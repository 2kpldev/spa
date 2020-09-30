<?php include ('../../connection.php') ?>
<?php
$spalist = mysqli_query($con, "SELECT*FROM spa_list_course
  LEFT JOIN spa_group_course ON spa_list_course.groupcode=spa_group_course.group_code
  WHERE list_id='$_GET[e]'");
  $res=$_ASSOC($spalist);
?>
<div class="ms-card-img">
  <img src="../../assets/img/spa2.jpg" alt="card_img">
</div>
<div class="ms-card-body">
  <div class="new">
    <h4 class="mb-0"><?php echo $res['list_name'] ?></h4>
    <h6 class="ms-text-primary mb-0"><?php echo $res['list_insert'] ?></h6>
  </div>
  <div class="new meta">
    <p><?php echo $res['group_name'] ?></p>
  </div>
  <hr>
</hr>
<div class="new meta">
  <p>ລາຄາ/ຄັ້ງ</p>
  <span class=""><?php echo number_format($res['list_price_once']). $_KIP ?></span>
</div>
<div class="new meta">
  <p>ລາຄາ/ຄອດ</p>
  <span class=""><?php echo number_format($res['list_price_course']). $_KIP ?></span>
</div>
<div class="new meta">
  <p>ສ່ວນຫລຸດ</p>
  <span class=""><?php echo $res['list_discount']. $_PERCEN ?></span>
</div>
<div class="new meta">
  <p>ຈຳນວນ/ຄອດ</p>
  <span class=""><?php echo $res['list_qty_course'] ?></span>
</div>
<div class="new meta">
  <p>ສະຖານະ</p>
  <span class=""><?php echo $res['list_status'] ?></span>
</div>
<div class="new meta">
  <p>ໝາຍເຫດ</p>
  <span class=""><?php echo $res['list_remark'] ?></span>
</div>
  <hr>
  <h6>ລາຍລະອຽດ</h6>
  <p><?php echo $res['list_detail']; ?></p>
  <hr>
  <div class="new mb-0">
    <button type="button" data-dismiss="modal" class="btn grid-btn ml-1 btn-sm btn-outline-light">
      <i class="fa fa-times-circle"></i> ປິດ</button>
  </div>
</div>
