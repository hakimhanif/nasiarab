<?php
	
	/* 	$host = "localhost";
		$user = "root";
		$pass = "";
	$db_name = "db_nasi_arab"; */
	date_default_timezone_set('Asia/Kuala_Lumpur');
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "restoran_nasi_arab";
	
	$con = mysqli_connect($host,$user,$pass,$db_name)or die(mysqli_error());
?>