<?php
    include ("../../connection.php");
    // echo json_encode(array("statusCode" => 200));
    // exit;

    $sql_auto=mysqli_query($con,"select max(staff_code)+1 as Maxid from spa_staff");
	$check_auto=mysqli_fetch_assoc($sql_auto);
	$row_auto=$check_auto['Maxid'];
	if($row_auto==''){
		$staff_code="0001";
	}else{
		$staff_code=sprintf("%04d",$row_auto);
	}



    // $staff_code=mysqli_real_escape_string($con,$_POST["staff_code"]);
    $staff_name=mysqli_real_escape_string($con,$_POST["staff_name"]);
    $staff_lname=mysqli_real_escape_string($con,$_POST["staff_lname"]);
    $staff_gender=mysqli_real_escape_string($con,$_POST["staff_gender"]);
    $staff_dob=mysqli_real_escape_string($con,$_POST["staff_dob"]);
    $staff_tel=mysqli_real_escape_string($con,$_POST["staff_tel"]);
    $staff_username=mysqli_real_escape_string($con,$_POST["staff_username"]);
    $staff_password=mysqli_real_escape_string($con,md5($_POST["staff_password"]));
    $staff_role=mysqli_real_escape_string($con,$_POST["staff_role"]);
    $rankcode=mysqli_real_escape_string($con,$_POST["rankcode"]);
    $staff_salary=mysqli_real_escape_string($con,$_POST["staff_salary"]);
    $staff_date_in=mysqli_real_escape_string($con,$_POST["staff_date_in"]);

    @$fileinfo=PATHINFO($_FILES['staff_img']['name']);
	@$newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
    @$location="img/".$newfilename;
    
    if($_FILES['staff_img']['name'] !=""){
		move_uploaded_file($_FILES['staff_img']['tmp_name'],"img/".$newfilename);


    $insert=mysqli_query($con,"insert into spa_staff (
        staff_code,
        staff_name,
        staff_lname,
        staff_gender,
        staff_dob,
        staff_tel,
        staff_username,
        staff_password,
        staff_role,
        staff_salary,
        staff_date_in,
        rankcode,
        staff_img
    )
    values(
        '$staff_code',
        '$staff_name',
        '$staff_lname',
        '$staff_gender',
        '$staff_dob',
        '$staff_tel',
        '$staff_username',
        '$staff_password',
        '$staff_role',
        '$staff_salary',
        '$staff_date_in',
        '$rankcode',
        '$location'
        
    ) ");

    if($insert){
        echo json_encode(array("statusCode" => 200));
    }
    else{
        echo json_encode(array("statusCode" => 404));
    }
 
    }

    else{
        $insert2=mysqli_query($con,"insert into spa_staff (
            staff_code,
            staff_name,
            staff_lname,
            staff_gender,
            staff_dob,
            staff_tel,
            staff_username,
            staff_password,
            staff_role,
            staff_salary,
            staff_date_in,
            rankcode,
            staff_img
        )
        values(
            '$staff_code',
            '$staff_name',
            '$staff_lname',
            '$staff_gender',
            '$staff_dob',
            '$staff_tel',
            '$staff_username',
            '$staff_password',
            '$staff_role',
            '$staff_salary',
            '$staff_date_in',
            '$rankcode',
            'no'
            
        ) ");
    
        if($insert2){
            echo json_encode(array("statusCode" => 200));
        }
        else{
            echo json_encode(array("statusCode" => 404));
        }
    }
?>