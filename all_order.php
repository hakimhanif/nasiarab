<!--BEGIN COPY**** -->	
<?php
	// echo '<pre>';
	// print_r($_POST);
	if(isset($_GET['email'])){
		
		$order_info="<p class='message'><h4><font color='red'> We already receive your order. We will contact you ($_GET[phone]) shortly for confirmation.<br/>
		<a href='order_summary/order_details_customer.php?order_id=$_GET[order_id]' target='_blank' >Click Here</a>
		for payment and your order details. Thank You</font></h4></p>";
		
	}
?>
<style>
	body {
	background: #e1c192 url(images/wood_pattern.jpg);
	}
</style>
<style type="text/css">
	.jumbotron {
	background-image: url("images/8.jpg");
	background-size: 100%;cover;
	color: white;}
</style>
<html>
	<!-- <meta charset="utf-8"> -->
	<title>Restoran Nasi Arab</title>
	<div class="jumbotron"><center><br/><br/>
		<br/><br/><br/><h1>Restoran Nasi Arab</h1><br/><br/><br/><br/><br/><br/><br/>
	</div></center>
	
	<div class="container">
		<center>
			<?php 
				echo $order_info;
			?>
		</center>
	</div>
	
	</br></br></br></br></br></br></br></br></br></br></br></br></br></br>
	<footer>
		<center>Copyright &copy; 2017 by <b>Hakikat Jati Resources Sdn. Bhd.</b>, all rights reserved 
		</center>
	</footer>
	
	
</html>	

