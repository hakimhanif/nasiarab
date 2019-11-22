<!DOCTYPE html>
<html lang="en">
    <head>
	</head>
	<body>
		<?php
			include "../config.php";
			
			if(isset($_GET['order_id']))
			$order_id = $_GET['order_id'];
			else
			die('SORRY SOMETHING WRONG WITH THE SYSTEM!. PLEASE CONTACT ADMINISTRATOR!');
			
			
			if(isset($_GET['status']))
			$status=$_GET['status'];
			else
			die('SORRY SOMETHING WRONG WITH THE SYSTEM!. PLEASE CONTACT ADMINISTRATOR!');
			
			$sql = "UPDATE tb_order SET food_status ='$status'
			WHERE order_id = '$order_id' ";
			$res = mysqli_query($con,$sql);
			
			if($res)
			echo '<meta http-equiv="refresh" content="0; url=home_food.php" />';
			
			
			
			
		?>
	</body>
</html>