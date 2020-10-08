<?php
@session_start();
$con = mysqli_connect('localhost', 'root', '', 'spadb');
@mysqli_query($con, "SET NAMES UTF8");
// if($con){echo "dbx_connect";} else {  echo "no dbx_connect";}
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'spadb';
try {
 $DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS);
 $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $DB_con->exec("SET CHARACTER SET utf8");
} catch (PDOException $e) {
 echo $e->getMessage();
}

date_default_timezone_set("Asia/Bangkok");
@$_TIMESTAM = date("Y-m-d H:m");
@$_GEN_ID = date("YmdHm");
@$_DATE = date("Y-m-d");
@$_YEAR = date("Y");
@$_MONTH = date("m");
$_WEEK_DAY=date('D');
@$_AUTO_ID = rand(10000000, 3000);
@$_CODE = md5(1000000030005000);
@$_SETSTRING = "mysqli_real_escape_string";
@$_SQL = "mysqli_query";
@$_ARRAY = "mysqli_fetch_array";
@$_ASSOC = "mysqli_fetch_assoc";

@$_KIP = "<font style='color:red;font-size:15px'>.₭</font>";
@$_HOUR = "<font style='color:#086B68;font-weight:bold;font-size:15px'> 'h</font>";
@$_PERCEN = "<font style='color:#F40C3D;font-weight:bold;font-size:15px'> %</font>";
?>
