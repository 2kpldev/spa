<?php
    include '../../connection.php';

    if(isset($_POST["edit_modal"])){
        $sel=mysqli_query($con,"select * from spa_group_course where group_id='".$_POST['edit_modal']."' ");
		$row=mysqli_fetch_array($sel);
		echo json_encode($row);
		
	}
?>