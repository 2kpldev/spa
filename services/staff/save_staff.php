<?php
    include ("../../connection.php");

    $staff_code=mysqli_real_escape_string($con,$_POST["staff_code"]);
    $staff_name=mysqli_real_escape_string($con,$_POST["staff_name"]);
    $staff_lname=mysqli_real_escape_string($con,$_POST["staff_lname"]);
    $staff_gender=mysqli_real_escape_string($con,$_POST["staff_gender"]);
    $staff_dob=mysqli_real_escape_string($con,$_POST["staff_dob"]);
    $staff_tel=mysqli_real_escape_string($con,$_POST["staff_tel"]);
    $staff_username=mysqli_real_escape_string($con,$_POST["staff_username"]);
    $staff_password=mysqli_real_escape_string($con,md($_POST["staff_password"]));
    $staff_role=mysqli_real_escape_string($con,$_POST["staff_role"]);
    $rankcode=mysqli_real_escape_string($con,$_POST["rankcode"]);
    $staff_salary=mysqli_real_escape_string($con,$_POST["staff_salary"]);
    $staff_date_in=mysqli_real_escape_string($con,$_POST["staff_date_in"]);

    @$fileinfo=PATHINFO($_FILES['staff_img']['name']);
	@$newfilename=$fileinfo['filename']."_".time().".".$fileinfo['extension'];
    @$location="img/".$newfilename;
    
    if($_FILES['staff_img']['name'] !=""){
		move_uploaded_file($_FILES['staff_img']['tmp_name'],"img/".$newfilename);


    $insert=mysqli_query($conn,"insert into spa_staff (
        staff_code,
        staff_name,
        staff_lname,
        staff_gender,
        staff_dob,
        staff_tel,
        std_lname_eng,
        std_sex,
        std_dob,
        std_village_born,
        std_district_born,
        std_province_born,
        std_village_stay,
        std_district_stay,
        std_province_stay,
        std_job,
        std_company,
        std_rank,
        std_tel,
        std_whatsapp,
        std_username,
        std_password,
        std_apply,
        std_status,
        std_date_study,
        std_time_study,
        std_img
    
    )
    values(
        '$std_number_in',
        '$std_date_in',
        '$std_number',
        '$std_name_lao',
        '$std_lname_lao',
        '$std_name_eng',
        '$std_lname_eng',
        '$std_sex',
        '$std_dob',
        '$std_village_born',
        '$std_district_born',
        '$std_proivce_born',
        '$std_village_stay',
        '$std_district_stay',
        '$std_proivce_stay',
        '$std_job',
        '$std_company',
        '$std_rank',
        '$std_tel',
        '$std_whatsapp',
        '$std_username',
        '$std_password',
        '$date',
        '2',
        '$std_date_study',
        '$std_time_study',
        '$newfilename'
        
    ) ");




      
    }


?>