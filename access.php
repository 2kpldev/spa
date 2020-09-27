<?php
 @session_start();
 if($_SESSION['authuser']!=1){
     header('location:login.php');
 }else{
   // header('location:error.php');
    }
?>
