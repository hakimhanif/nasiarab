<?php
 session_start();
 session_destroy(); 
 $_SESSION = array(); 
 if(empty($_SESSION['login']))
			echo '<meta http-equiv="refresh" content="0; url=login.php" />';

?>