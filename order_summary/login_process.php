<!DOCTYPE html>
<html lang="en">
    <head>
	</head>
	<body>
		<?php
			include "../config.php";
			session_start();
			
			
			
			$user = trim($_POST['login']);
			$pass = trim($_POST['password']);
			$md5pass = md5($pass);
			$sql = "SELECT COUNT(*) AS bil FROM `tb_login` WHERE login_user = '$user' AND login_pass = '$md5pass' ";
			$res = mysqli_query($con,$sql);
			$arr = mysqli_fetch_array($res);
			if($arr['bil']=='1'){
				echo '<meta http-equiv="refresh" content="0; url=home.php" />';
				
				$_SESSION['login'] =1;
			}
			else
			echo '<meta http-equiv="refresh" content="0; url=login.php?err=1" />';
			
			
		?>
	</body>
</html>