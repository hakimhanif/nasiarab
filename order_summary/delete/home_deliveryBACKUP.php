<?php
	include "../config.php";
	
	session_start();
	
	
	$sql = "SELECT * FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status ='1'";
	$res = mysqli_query($con,$sql);
	
	$sql1 = "SELECT COUNT(*) as bil FROM tb_order a
	LEFT JOIN tb_customer b ON a.cust_id = b.cust_id
	WHERE a.order_status ='1'";
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
		<meta http-equiv="refresh" content="60" >
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/modernizr.custom.63321.js"></script>
        <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			body {
				/* background: red url(images/truck_delivery.png); */
			}
		</style>
    </head>
    <body>
        <div class="container">
		
			<!-- Codrops top bar -->
            <div class="codrops-top">
               
            </div><!--/ Codrops top bar -->
			
			<header>
			
				
				<!--h2>Creative and modern form design with CSS magic</h2>
				
				<nav class="codrops-demos">
					<a href="index.html">Demo 1</a>
					<a class="current-demo" href="index2.html">Demo 2</a>
					<a href="index3.html">Demo 3</a>
					<a href="index4.html">Demo 4</a>
					<a href="index5.html">Demo 5</a>
				</nav-->

				<div class="support-note">
					<span class="note-ie">Sorry, only modern browsers.</span>
				</div>
				
			</header>
			
			<section class="main">
			<form class="form-2" >
					<h1><span class="order_count"><center>PENDING DELIVERY: <?php	echo $bil = $arr1['bil'];
						if(@$_SESSION['count']!=$bil){
							$_SESSION['count'] = $bil;
							echo "<script>alert('New Order Alert!');</script>";
						}
						?>	</center></span></h1>
					
					
				</form>​​
			<?php  while($arr = mysqli_fetch_array($res)){ ?>
				<form class="form-2" action="proses_order.php?order_id=" method="post">
					<h1><span class="log-in">Name: <?php	echo $arr['cust_name'];	?>	</span></h1>
					<h1><span class="log-in">Phone: <?php	echo $arr['cust_phone'];	?>	</span></h1>
					<h1><span class="log-in">Email: <?php	echo $arr['cust_email'];	?>	</span></h1>
					<h1><span class="log-in">Remarks: <?php	echo $arr['order_remarks'];	?>	</span></h1>
				
					<?php
					echo $arr['order_details'];
					
					?>	
										 
					<p class="clearfix"> 
					<input type="checkbox" name="status" value="food">Food Ready<br>
<input type="checkbox" name="status" value="payment">Payment Completed <br>
<input type="checkbox" name="status" value="delivery">Delivery Completed 
						 <br/>
						<input type="submit" name="submit" value="COMPLETE">
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