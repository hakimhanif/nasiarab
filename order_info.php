<?php
/*   	echo '<pre>';
	print_r($_POST);   die; */
	// $debug=1;
	include "config.php";
	include "order_save.php";
	
	if(empty($_POST['name']))
		die("Sorry Wrong Page");
	
	$table="<table border=1>";
	$table.="<tr><td>Item</td><td>Quantity</td><td>Price</td><td>Total Price</td></td>";
	
	foreach($_POST as $key => $value)
	{
	$value = htmlentities($value);

		$pattern ="price";
		$pattern1 ="hone";
		// $pattern1 ="total";
		// $pattern2 ="phone";OR (strpos($key, $pattern1)) OR (strpos($key, $pattern2))
		if ((strpos($key, $pattern)) OR (strpos($key, $pattern1)) ){
			continue;
		}
		else{
			
			if($value==0){
				//echo $value; //die('19');
				continue;
			}
			else{
				$pattern ="qty";
				if (strpos($key, $pattern)){
					// echo "POST Quantity '$key' has '$value' <br/>";
						$key = menu_name($con,$key);
					$table.="<tr><td>$key</td><td>$value</td>";
					}else{
					
					// continue;
					

					// echo "POST Price '$key' has '$value' <br/>";
					$table.="<td>$value</td></td>";
					
				}
				
				
				
				
			}
		}
		
		
		
		
		
		
	}
		$table.="</table>";
	// echo $table;	die;
	
	
	/* INSERT TO DATABASE */
 
	$cust_id = insert_customer($con,$_POST['name'],$_POST['phone'],$_POST['email'],'');
	$order_id = insert_order($con,$table,$_POST['order_remarks'],$cust_id,$_POST['total']);
	// include 'email.php';
	require 'PHPMailer/PHPMailerAutoload.php';		
	$mail = new PHPMailer();
	
	// $mail->SMTPDebug = 3;                               // Enable verbose debug output
	
	// begin comment for server hosting
  /*$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.restorannasiarab.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'order@restorannasiarab.com';                 // SMTP username
		$mail->Password = '123456@';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
 	// end comment for server hosting */ 
	
	
	$mail->setFrom('no-reply@restorannasiarab.com', 'Restoran Nasi Arab');
	// $mail->addAddress($email, $name);     // Add a recipient
	$mail->addAddress('orderrestorannasiarab@gmail.com', 'Order by Customer Name');     // Add a recipient
	$mail->addAddress('order@restorannasiarab.com', 'Order by Customer Name');     // Add a recipient
	//$mail->addAddress('hakimhanif.work@gmail.com', 'Order by Customer Name');     // Add a recipient
	// $mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('no-reply@restorannasiarab.com', 'Restoran Nasi Arab');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('ghassanxyz@gmail.com');
	// $mail->addBCC('support@mptg.com.my');
	// $mail->addBCC('mar1.hadid@gmail.com');
	// $mail->addBCC('order@restorannasiarab.com');
	
	
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                    
	
	// $name = $_POST[];
	
	$subject = "Restoran Nasi Arab : Customer Order  " ;
	 $message =" 
	Dear  Sir<br/><br/>
	
	Customer Details:<br/><br/>
	Name: $_POST[name] <br/>
	Phone No: $_POST[phone] <br/>
	Email: $_POST[email] <br/>
	Total Price: $_POST[total] <br/>
	
	Below are order details:<br/><br/>
 $table<br/>
 
	
	Thanks
	
	<br/><br/>
	Regards,<br/>
	order@restorannasiarab.com
	<br/><br/>
	<b>#This is an automated email. Do not reply to this email.#</b><br/>
	";
	
	
	$mail->Subject =$subject ;
	$mail->Body =$message ;
	/* $mail->AddAddress("$email","$name");
	$mail->AddReplyTo("no-reply@inspen.gov.my","No-Reply"); */
	
	if (!$mail->Send()) {
		$err = "Check Internet Connection OR SMTP settings";
		// email_log($email,$name,$subject,$message,2,$err);
		
		//echo 'email send failed';
		echo " <meta http-equiv='refresh' content='0; url=all_order.php?email=error&phone=".$_POST['phone']."&order_id=".$order_id."' />";
	}
	else{	
		$err = "No error";
		// header('menu.php');
		echo " <meta http-equiv='refresh' content='0; url=all_order.php?email=success&phone=".$_POST['phone']."&order_id=".$order_id."' />";
		// email_log($email,$name,$subject,$message,1,$err);
		//echo
		//update tbl_pegawai
		// $sql = "UPDATE tbl_user SET password = '".md5($pwd_new)."' WHERE username = '$username' ";
		// $res=mysqli_query($con,$sql);
		/* echo '<div class="alert alert-success">
			<h5>Forget Password ?</h5>
			<strong>New pasword already send to tour email '.$email.' .<br>Please check your email. </strong> 
		</div>'; */
		// echo "<input type='hidden' value='a".$pwd_new."z' /> ";
	}
	
 
	
	?>	