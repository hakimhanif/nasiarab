<?php
	
	
	
	function insert_customer($con,$name,$phone,$email,$addr){
		
		if(empty($addr))
		$addr=NULL;
		
		$sql = "INSERT INTO tb_customer  
		(`cust_name`, `cust_phone`, `cust_email`, `cust_addr`)
		VALUES ( '$name', '$phone', '$email', '$addr');";
		
		mysqli_query( $con,$sql);
		return	mysqli_insert_id($con);
		
	}
	function insert_order($con,$order_details,$order_remarks,$cust_id,$total_bill){
		
		if(empty($addr))
		$addr=NULL;
		$date_order = date('Y-m-d H:i:s');
		$sql = "INSERT INTO tb_order (`order_details`, `order_remarks`, `cust_id`,`total_bill`,date_order) 
		VALUES ('$order_details','$order_remarks','$cust_id','$total_bill','$date_order')";
		
		mysqli_query( $con,$sql);
		return	mysqli_insert_id($con);
		
	}
	
	function menu_name($con,$key){
		
		
	$sql = "SELECT * FROM `tb_menu_name` WHERE `m_n_code` LIKE '$key' "; 
		//echo $key.'<br>';
		$res = mysqli_query( $con,$sql);
		$arr=mysqli_fetch_assoc($res);
		if(!empty($arr['m_n_desc'])){
		
		$m_n_desc =strtolower($arr['m_n_desc']);
		$m_n_desc =ucwords($m_n_desc);
		
		return $m_n_desc;
		
		
		}
		else
		return $key;
				
	}	
	
?>

