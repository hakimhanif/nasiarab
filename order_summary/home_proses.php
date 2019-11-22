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
			
			
			if(isset($_GET['payment_status'])){
				$status=$_GET['payment_status'];
				$colum_name = 'payment_status'	;			
			}
			else if(isset($_GET['delivery_status'])){
				$status=$_GET['delivery_status'];
				$colum_name = 'delivery_status'	;			
			}
			else if(isset($_GET['order_status'])){
				$status=$_GET['order_status'];
				$colum_name = 'order_status';				
			}
			else
			die('SORRY SOMETHING WRONG WITH THE SYSTEM!. PLEASE CONTACT ADMINISTRATOR!');
			
			$sql = "UPDATE tb_order SET $colum_name ='$status'
			WHERE order_id = '$order_id' ";
			$res = mysqli_query($con,$sql);
			
			if($res)
			echo '<meta http-equiv="refresh" content="0; url=home.php" />';
			
			
			
			
		?>
	</body>
</html>