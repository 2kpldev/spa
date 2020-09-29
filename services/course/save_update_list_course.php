<?php
include ("../../connection.php");
// echo json_encode(array("statusCode" => 200));
// exit;

// $sql_auto=mysqli_query($con,"select max(list_code)+1 as Maxid from spa_list_course");
// $check_auto=mysqli_fetch_assoc($sql_auto);
// $row_auto=$check_auto['Maxid'];
// if($row_auto==''){
//   $list_code="0001";
// }else{
//   $list_code=sprintf("%04d",$row_auto);
// }

// $staff_code=mysqli_real_escape_string($con,$_POST["staff_code"]);
$list_id=mysqli_real_escape_string($con,$_POST["list_id"]);
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


    $selimg=mysqli_query($con,"select list_img from spa_list_course where list_id='$list_id'");
    $img=mysqli_fetch_assoc($selimg);



if($_FILES['list_img']['name'] !=""){
  @unlink("img/".$img['list_img']);
  move_uploaded_file($_FILES['list_img']['tmp_name'],"img/".$newfilename);


  $update=mysqli_query($con,"update spa_list_course set
    groupcode='$groupcode',
    list_name='$list_name',
    list_detail='$list_detail',
    list_price_once='$list_price_once',
    list_price_course='$list_price_course',
    list_qty_course='$list_qty_course',
    list_discount='$list_discount',
    list_status='$list_status',
    list_remark='$list_remark',
    list_insert='$list_insert',
    list_img='$newfilename' where list_id='$list_id'
 ");

      if($update){
        echo json_encode(array("statusCode" => 200));
      }
      else{
        echo json_encode(array("statusCode" => 404));
      }

    }
    else{
        $update1=mysqli_query($con,"update spa_list_course set
        groupcode='$groupcode',
        list_name='$list_name',
        list_detail='$list_detail',
        list_price_once='$list_price_once',
        list_price_course='$list_price_course',
        list_qty_course='$list_qty_course',
        list_discount='$list_discount',
        list_status='$list_status',
        list_remark='$list_remark',
        list_insert='$list_insert' where list_id='$list_id'
     ");

          if($update1){
            echo json_encode(array("statusCode" => 200));
          }
          else{
            echo json_encode(array("statusCode" => 404));
          }
        }

    //   }
        ?>
