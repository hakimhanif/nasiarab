<?php
	include "../config.php";
	
	session_start();
	if(empty($_SESSION['login'])){
			echo '<meta http-equiv="refresh" content="0; url=login.php" />';
	exit;
	}
	
	$sql = "SELECT * FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status >'1' ";
	$res = mysqli_query($con,$sql);
	
	$sql1 = "SELECT COUNT(*) as bil FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status >'1'";
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
			
			
				<style>
			table { width: 680px;
			bgcolor: black;

			
			}
			td,th { border: 1px solid #000;
			font-size:14px;
			}
			.button_blue{
			border:none;
			color:white;
			padding:15px 32px;
			text-align:center;
			text-decoration:none;
			display:inline-block;
			font-size:16px;
			margin:4px 2px;
			cursor:pointer;
			
			
			background-color:#008CBA
			
			}
		</style>
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
				<form class="form-2"  method="post">
					<table>
						<tr>
							<td>Bil</td>
							<td>Name </td>
							<td>Phone</td>
							<td>Email </td>
							
							<td>Order Status </td>
							
							<td>Payment Status</td>
							
						</tr>
						
						<?php  
							$i = 1;
							while($arr = mysqli_fetch_array($res)){ ?>
							
							
							<tr <?php	echo $arr['order_status']==3?'style="color: red"':'style="color: green"';	?> >
								<td><?php echo $i++; ?></td>
								<td><?php	echo $arr['cust_name'];	?>	 </td>
								<td> <?php	echo $arr['cust_phone'];	?></td>
								<td><?php	echo $arr['cust_email'];	?></td>
								
								<td><?php	echo $arr['order_status']==2?'Confirm':'';	?><?php	echo $arr['order_status']==3?'Canceled':'';	?><?php	echo $arr['order_status']==4?'Completed':'';	?> <a href="order_details.php?order_id=<?php echo $arr['order_id'];	?>" target="_blank" >[Order Details - Click Here]</a></td>
								
								<td><?php	//echo $arr['total_bill'];	?>  <?php	echo $arr['payment_status']==1?($arr['order_status']==3?'Canceled':'Pending') :'';	?>
								<?php	echo $arr['payment_status']==2?'Completed':'';	?> </td>
								
							</tr>
							
						<?php }	?>
					</form>​​
				</table>
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