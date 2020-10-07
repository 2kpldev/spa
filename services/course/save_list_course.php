<?php
include ("../../connection.php");
// echo json_encode(array("statusCode" => 200));
// exit;

$sql_auto=mysqli_query($con,"select max(list_code)+1 as Maxid from spa_list_course");
$check_auto=mysqli_fetch_assoc($sql_auto);
$row_auto=$check_auto['Maxid'];
if($row_auto==''){
  $list_code="0001";
}else{
  $list_code=sprintf("%04d",$row_auto);
}

// $staff_code=mysqli_real_escape_string($con,$_POST["staff_code"]);
$groupcode=mysqli_real_escape_string($con,$_POST["groupcode"]);
$list_name=mysqli_real_escape_string($con,$_POST["list_name"]);
$list_detail=mysqli_real_escape_string($con,$_POST["list_detail"]);
$list_price_once=mysqli_real_escape_string($con,$_POST["list_price_once"]);
$list_price_course=mysqli_real_escape_string($con,$_POST["list_price_course"]);
$list_discount=mysqli_real_escape_string($con,$_POST["list_discount"]);
$list_qty_course=mysqli_real_escape_string($con,$_POST["list_qty_course"]);
$list_status=mysqli_real_escape_string($con,$_POST["list_status"]);
$list_remark=mysqli_real_escape_string($con,$_POST["list_remark"]);
$list_insert="ທ້າວ ໄຊວິລິຍະ ວັງນະວົງ";


@$fileinfo=PATHINFO($_FILES['list_img']['name']);
@$newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
@$location="img/".$newfilename;



// $selCount=mysqli_query($con,"select*from spa_staff where list_qty_course='$list_qty_course'");
// $Count=mysqli_fetch_assoc($selCount);

// if($Count['list_qty_course']==$list_qty_course){
//   echo json_encode(array("statusCode" => 400));
// }



// else{


if($_FILES['list_img']['name'] !=""){
  move_uploaded_file($_FILES['list_img']['tmp_name'],"img/".$newfilename);


  $insert=mysqli_query($con,"insert into spa_list_course (
    list_code,
    groupcode,
    list_name,
    list_detail,
    list_price_once,
    list_price_course,
    list_qty_course,
    list_discount,
    list_status,
    list_remark,
    list_insert,
    list_img
    )
    values(
      '$list_code',
      '$groupcode',
      '$list_name',
      '$list_detail',
      '$list_price_once',
      '$list_price_course',
      '$list_qty_course',
      '$list_discount',
      '$list_status',
      '$list_remark',
      '$list_insert',
      '$newfilename'

      ) ");

      if($insert){
        echo json_encode(array("statusCode" => 200));
      }
      else{
        echo json_encode(array("statusCode" => 404));
      }

    }
    else{
      $insert2=mysqli_query($con,"insert into spa_list_course (
        list_code,
        groupcode,
        list_name,
        list_detail,
        list_price_once,
        list_price_course,
        list_qty_course,
        list_discount,
        list_status,
        list_remark,
        list_insert,
        list_img
        )
        values(
          '$list_code',
          '$groupcode',
          '$list_name',
          '$list_detail',
          '$list_price_once',
          '$list_price_course',
          '$list_qty_course',
          '$list_discount',
          '$list_status',
          '$list_remark',
          '$list_insert',
          'no'

          ) ");

          if($insert2){
            echo json_encode(array("statusCode" => 200));
          }
          else{
            echo json_encode(array("statusCode" => 404));
          }
        }

    //   }
        ?>
