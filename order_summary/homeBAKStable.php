<?php
	include "../config.php";
	
	session_start();
	if(empty($_SESSION['login']))
			echo '<meta http-equiv="refresh" content="0; url=login.php" />';
	
	
	$sql = "SELECT * FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status ='2'";
	$res = mysqli_query($con,$sql);
	
	$sql1 = "SELECT COUNT(*) as bil FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status ='2'";
	$res1 = mysqli_query($con,$sql1);
	$arr1 = mysqli_fetch_array($res1); 
	
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Order Summary</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
		<meta http-equiv="refresh" content="10" >
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
			background: #e1c192 url(images/wood_pattern.jpg);
			}
			
			
			.blink {
			animation: blink-animation 1s steps(5, start) infinite;
			-webkit-animation: blink-animation 1s steps(5, start) infinite;
			}
			@keyframes blink-animation {
			to {
			visibility: hidden;
			}
			}
			@-webkit-keyframes blink-animation {
			to {
			visibility: hidden;
			}
			}
		</style>
	</head>
    <body>
        <div class="container">
			
			<!-- Codrops top bar -->
            <div class="codrops-top">
				
			</div><!--/ Codrops top bar -->
			
			<header>
				
				
				<?php  include 'menu.php'; ?>
				
				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
				<form class="form-2" ><center>
				<h1><span class="order_count">ORDER SUMMARY<br/>Total :<?php echo $bil = $arr1['bil']; ?> </br>	</span></h1> </center>
				
				
				</form>​​
				<?php  while($arr = mysqli_fetch_array($res)){ ?>
					<form class="form-2" action="home_proses.php?order_id=<?php echo $arr['order_id'];	?>&payment_status=2" method="post">
						<h1><span class="log-in">Name: <?php	echo $arr['cust_name'];	?>	</span></h1>
						<h1><span class="log-in">Phone: <?php	echo $arr['cust_phone'];	?>	</span></h1>
						<h1><span class="log-in">Email: <?php	echo $arr['cust_email'];	?>	</span></h1>
						<h1><span class="log-in">Remarks: <?php	echo $arr['order_remarks'];	?>	</span></h1>
						<h1><span class="log-in">Order Status: <?php	echo $arr['order_status']==2?'Confirm':'';	?> <a href="order_details.php?order_id=<?php echo $arr['order_id'];	?>" target="_blank" >[Order Details - Click Here]</a>	</span></h1>
						<h1><span class="log-in">Food Status: <?php	echo $arr['food_status']==1?'<span class="blink">Pending</span>':'';	?>
						<?php	echo $arr['food_status']==2?'Complete':'';	?>	</span></h1>
						<h1><span class="log-in">Payment Status (RM <?php	echo $arr['total_bill'];	?>) : <?php	echo $arr['payment_status']==1?'<span class="blink">Pending</span>':'';	?>
						<?php	echo $arr['payment_status']==2?'Complete':'';	?>	</span></h1>
						<h1><span class="log-in">Delivery Status: <?php	echo $arr['delivery_status']==1?'<span class="blink">Pending</span>':'';	?>
						<?php	echo $arr['delivery_status']==2?'Complete':'';	?>	</span></h1>
						
						<?php
							
							
						?>	
						
						<p class="clearfix"> 
							<!--input type="checkbox" name="status" value="food">Food Ready<br>
								<input type="checkbox" name="status" value="payment">Payment Completed <br>
							<input type="checkbox" name="status" value="delivery">Delivery Completed -->
							<br/>
							<?php if($arr['payment_status']==2 AND $arr['food_status']==2 AND $arr['order_status']==2 AND $arr['delivery_status']==2 ) { ?>
								
								<a href="home_proses.php?order_id=<?php echo $arr['order_id'];	?>&order_status=4" class="log-twitter">REMOVE FROM THIS LIST</a> 
								
								<?php	}else{ ?>
								<input type="submit" style="visibility:<?php echo $arr['payment_status']==2?'hidden':'display';	?>" name="submit" value="COMPLETE PAYMENT">
								
								<?php if($arr['food_status']==2){ ?>
								<a style="visibility:<?php	echo $arr['delivery_status']==2?'hidden':'display';	?>" href="home_proses.php?order_id=<?php echo $arr['order_id'];	?>&delivery_status=2" class="log-twitter">COMPLETE DELIVERY</a> 
							<?php	} ?>
							<?php  }  ?>
						</p>
					</form>​​
				<?php }	?>
			</section>
			
		</div>
		<!-- jQuery if needed -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">
			$(function(){
				$(".showpassword").each(function(index,input) {
					var $input = $(input);
					$("<p class='opt'/>").append(
					$("<input type='checkbox' class='showpasswordcheckbox' id='showPassword' />").click(function() {
						var change = $(this).is(":checked") ? "text" : "password";
						var rep = $("<input placeholder='Password' type='" + change + "' />")
						.attr("id", $input.attr("id"))
						.attr("name", $input.attr("name"))
						.attr('class', $input.attr('class'))
						.val($input.val())
						.insertBefore($input);
						$input.remove();
						$input = rep;
					})
					).append($("<label for='showPassword'/>").text("Show password")).insertAfter($input.parent());
				});
				
				$('#showPassword').click(function(){
					if($("#showPassword").is(":checked")) {
						$('.icon-lock').addClass('icon-unlock');
						$('.icon-unlock').removeClass('icon-lock');    
						} else {
						$('.icon-unlock').addClass('icon-lock');
						$('.icon-lock').removeClass('icon-unlock');
					}
				});
			});
		</script>
	</body>
</html>