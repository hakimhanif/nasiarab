<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Restoran Nasi Arab</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<style type="text/css">
		body {
	background: #e1c192 url(images/wood_pattern.jpg);
	}
		body * {
		box-sizing: border-box;
		}
		
		.header {
		background-color: #BA4A00;
		color: white;
		font-size: 1.5em;
		padding: 1rem;
		text-align: center;
		text-transform: uppercase;
		}
		
		img {
		border-radius: 100%;
		height: 100px;
		width: 140px;
		}
		
		.table-users {
		border: 1px solid #327a81;
		border-radius: 10px;
		box-shadow: 3px 3px 0 rgba(0, 0, 0, 0.1);
		max-width: calc(100% - 2em);
		margin: 1em auto;
		overflow: hidden;
		width: 1500px;
		}
		
		table {
		width: 95%;
		}
		table td, table th {
		color: #BA4A00;
		padding: 10px;
		}
		table td {
		text-align: center;
		vertical-align: middle;
		}
		table td:last-child {
		font-size: 0.95em;
		line-height: 1.4;
		text-align: left;
		}
		table th {
		background-color: #EDBB99;
		font-weight: 300;
		}
		table tr:nth-child(2n) {
		background-color: white;
		}
		table tr:nth-child(2n+1) {
		background-color: #FBEEE6;
		}
		
		@media screen and (max-width: 555px) {
		table, tr, td {
		display: block;
		}
		
		td:first-child {
		position: absolute;
		top: 50%;
		-webkit-transform: translateY(-50%);
		transform: translateY(-50%);
		width: 50px;
		}
		td:not(:first-child) {
		clear: both;
		margin-left: 100px;
		padding: 4px 20px 4px 90px;
		position: relative;
		text-align: left;
		}
		td:not(:first-child):before {
		color: #91ced4;
		content: '';
		display: block;
		left: 0;
		position: absolute;
		}
		td:nth-child(2):before {
		content: 'Photo:';
		}
		td:nth-child(3):before {
		content: 'Item:';
		}
		td:nth-child(4):before {
		content: 'Type-Price (RM):';
		}
		td:nth-child(5):before {
		content: 'Quantity:';
		}
		td:nth-child(6):before {
		content: 'Total Price (RM):';
		}
		
		
		tr {
		padding: 10px 0;
		position: relative;
		}
		tr:first-child {
		display: none;
		}
		}
		@media screen and (max-width: 500px) {
		.header {
		background-color: transparent;
		color: white;
		font-size: 2em;
		font-weight: 700;
		padding: 0;
		text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
		}
		
		img {
		border: 3px solid;
		border-color: #EDBB99;
		height: 100px;
		margin: 0.5rem 0;
		width: 100px;
		}
		
		td:first-child {
		background-color: #EDBB99;
		border-bottom: 1px solid #91ced4;
		border-radius: 10px 10px 0 0;
		position: relative;
		top: 0;
		-webkit-transform: translateY(0);
		transform: translateY(0);
		width: 100%;
		}
		td:not(:first-child) {
		margin: 0;
		padding: 5px 1em;
		width: 100%;
		}
		td:not(:first-child):before {
		font-size: .8em;
		padding-top: 0.3em;
		position: relative;
		}
		td:last-child {
		padding-bottom: 1rem !important;
		}
		
		tr {
		background-color: white !important;
		border: 1px solid #873600;
		border-radius: 10px;
		box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
		margin: 0.5rem 0;
		padding: 0;
		}
		
		.table-users {
		border: none;
		box-shadow: none;
		overflow: visible;
		}
		}
		
		@media screen and (max-width: 330px) {
		.header {
		background-color: transparent;
		color: white;
		font-size: 1em;
		font-weight: 700;
		padding: 0;
		text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
		}
		
		img {
		border: 1px solid;
		border-color: #EDBB99;
		height: 100px;
		margin: 0.5rem 0;
		width: 100px;
		}
		
		td:first-child {
		background-color: #EDBB99;
		border-bottom: 1px solid #91ced4;
		border-radius: 10px 10px 0 0;
		position: relative;
		top: 0;
		-webkit-transform: translateY(0);
		transform: translateY(0);
		width: 100% !important;
		}
		td:not(:first-child) {
		margin: 0;
		/* padding: 3px 1em; */
		width: 100% !important;
		}
		td:not(:first-child):before {
		font-size: .8em;
		padding-top: 0.3em;
		position: relative;
		width: 100% !important;
		}
		td:last-child {
		padding-bottom: 1rem !important;
		width: 100% !important;
		}
		
		tr {
		background-color: white !important;
		border: 1px solid #873600;
		border-radius: 10px;
		box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
		margin: 0.5rem 0;
		padding: 0;
		}
		
		.table-users {
		border: none;
		box-shadow: none;
		overflow: visible;
		}
		}
		
		/* @media screen and (min-width: 320px) and (max-width: 500px) and (orientation: landscape) {
		html {
		transform: rotate(-90deg);
		transform-origin: left top;
		width: 100vh;
		overflow-x: hidden;
		position: absolute;
		top: 100%;
		left: 0;
		}
		}
		*/
		
	</style>
	<body>
		<form action="order_info.php" method="post">
			<div class="container">
				<h2><font color="#873600" >Online Ordering Restoran Nasi Arab</font></h2>
				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="pill" href="#home">Nasi Arab</a></li>
					<li><a data-toggle="pill" href="#menu1">Barbeques</a></li>
					<li><a data-toggle="pill" href="#menu2">Special Food</a></li>
					<li><a data-toggle="pill" href="#menu3">Arabic Bread </a></li>
					<li><a data-toggle="pill" href="#menu4">Appetizers</a></li>
					<li><a data-toggle="pill" href="#menu5">Desserts</a></li>
					<li><a data-toggle="pill" href="#menu6">Fresh Juice</a></li>
					<li><a data-toggle="pill" href="#menu7">Hot Drinks</a></li>
					<li><a data-toggle="pill" href="#menu8">Iced Drinks</a></li>
					<li><a data-toggle="pill" href="#menu9">Cold Drinks</a></li>
					<li><a data-toggle="pill" href="#menu10">Special Drinks</a></li>
				</ul>
				
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<div class="container">
							<h1><font color='brown'>Rice</font></h1>
							<table border="1" width="100%">
								<tr>
									<th width="10%">No</th>
									<th>Photo</th>
									<th width="16%">Item</th>
									<th  width="16%">Type-Price (RM)</th>
									<th width="15%">Quantity</th>
									<th width="15%">Total Price (RM)</th>
								</tr>
								<!--BEGIN COPY-->
								<tr>
									<td rowspan="3">1.</td><!--Remove all the image height="120px" -->
									<td  rowspan="3"><img  src="images/rice/Hanith Chicken R-14, L-16.5, Family 54.png" /></td>
									<td rowspan="3">Hanith Chicken Rice (Regular, Large, Family) </td>
									<td>Regular-14 <input type="hidden" name="hanith_chickenR_price" value="14"/></td>
									<td><input type="tel" name="hanith_chickenR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_chickenR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-16.5  <input type="hidden" name="hanith_chickenL_price" value="16.5"/></td>
									<td><input type="tel" name="hanith_chickenL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_chickenL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-54 <input type="hidden" name="hanith_chickenF_price" value="54"/></td>
									<td><input type="tel" name="hanith_chickenF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_chickenF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY-->
								
								<!--BEGIN COPY Hanith Lamb  R-18.5, L-21, Family 72 -->
								<tr>
									<td rowspan="3">2.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Hanith Lamb  R-18.5, L-21, Family 72.png" /></td>
									<td rowspan="3">Hanith Lamb Rice (Regular, Large, Family) </td>
									<td>Regular-18.5 <input type="hidden" name="hanith_LambR_price" value="18.5"/></td>
									<td><input type="tel" name="hanith_LambR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_LambR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-21  <input type="hidden" name="hanith_LambL_price" value="21"/></td>
									<td><input type="tel" name="hanith_LambL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_LambL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-72 <input type="hidden" name="hanith_LambF_price" value="72"/></td>
									<td><input type="tel" name="hanith_LambF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="hanith_LambF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY-->	
								
								<!--BEGIN COPY  Kabsa Chicken R-14, L-16.5, Family 54  -->
								<tr>
									<td rowspan="3">3.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Kabsa Chicken R-14, L-16.5, Family 54.png" /></td>
									<td rowspan="3">Kabsa Chicken Rice (Regular, Large, Family) </td>
									<td>Regular-14 <input type="hidden" name="Kabsa_chickenR_price" value="14"/></td>
									<td><input type="tel" name="Kabsa_chickenR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_chickenR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-16.5  <input type="hidden" name="Kabsa_chickenL_price" value="16.5"/></td>
									<td><input type="tel" name="Kabsa_chickenL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_chickenL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-54 <input type="hidden" name="Kabsa_chickenF_price" value="54"/></td>
									<td><input type="tel" name="Kabsa_chickenF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_chickenF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY-->	
								
								<!--BEGIN COPY  Kabsa Lamb  R-18.5, L-21, Family 72   -->
								<tr>
									<td rowspan="3">4.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Kabsa Lamb  R-18.5, L-21, Family 72.png" /></td>
									<td rowspan="3">Kabsa Lamb Rice (Regular, Large, Family) </td>
									<td>Regular-18.5 <input type="hidden" name="Kabsa_LambR_price" value="18.5"/></td>
									<td><input type="tel" name="Kabsa_LambR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_LambR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-21  <input type="hidden" name="Kabsa_LambL_price" value="21"/></td>
									<td><input type="tel" name="Kabsa_LambL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_LambL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-72 <input type="hidden" name="Kabsa_LambF_price" value="72"/></td>
									<td><input type="tel" name="Kabsa_LambF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Kabsa_LambF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY-->
								
								<!--BEGIN COPY  Magloba Chicken  R-15, L-17.5, Family-58   -->
								<tr>
									<td rowspan="3">5.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Magloba Chicken  R-15, L-17.5, Family-58.png" /></td>
									<td rowspan="3">Magloba Chicken Rice (Regular, Large, Family)</td>
									<td>Regular-15 <input type="hidden" name="Magloba_ChickenR_price" value="15"/></td>
									<td><input type="tel" name="Magloba_ChickenR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_ChickenR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-17.5  <input type="hidden" name="Magloba_ChickenL_price" value="17.5"/></td>
									<td><input type="tel" name="Magloba_ChickenL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_ChickenL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-58 <input type="hidden" name="Magloba_ChickenF_price" value="58"/></td>
									<td><input type="tel" name="Magloba_ChickenF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_ChickenF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY   -->
								
								
								<!--BEGIN COPY  Magloba Lamb  R-19.5, L-22, Family 76   -->
								<tr>
									<td rowspan="3">6.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Magloba Lamb  R-19.5, L-22, Family 76.png" /></td>
									<td rowspan="3">Magloba Lamb Rice (Regular, Large, Family)</td>
									<td>Regular-19.5<input type="hidden" name="Magloba_LambR_price" value="19.5"/></td>
									<td><input type="tel" name="Magloba_LambR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_LambR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-22  <input type="hidden" name="Magloba_LambL_price" value="22"/></td>
									<td><input type="tel" name="Magloba_LambL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_LambL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-76 <input type="hidden" name="Magloba_LambF_price" value="76"/></td>
									<td><input type="tel" name="Magloba_LambF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Magloba_LambF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY   LAMB MOZA R-24, L-26.5, Family-93 -->
								
								
								<!--BEGIN COPY  LAMB MOZA R-24, L-26.5, Family-93   -->
								<tr>
									<td rowspan="3">7.</td>
									<td rowspan="3"><img height="120px" src="images/rice/LAMB MOZA R-24, L-26.5, Family-93.png" /></td>
									<td rowspan="3">Lamb Moza Rice (Regular, Large, Family)</td>
									<td>Regular-24 <input type="hidden" name="Lamb_MozaR_price" value="24"/></td>
									<td><input type="tel" name="Lamb_MozaR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Lamb_MozaR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-26.5  <input type="hidden" name="Lamb_MozaL_price" value="26.5"/></td>
									<td><input type="tel" name="Lamb_MozaL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Lamb_MozaL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family-93 <input type="hidden" name="Lamb_MozaF_price" value="93"/></td>
									<td><input type="tel" name="Lamb_MozaF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="Lamb_MozaF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY  -->
								
								<!--BEGIN COPY  Fish R-19, L-22, Family 76   -->
								<tr>
									<td rowspan="3">8.</td>
									<td rowspan="3"><img height="120px" src="images/rice/Fish R-19, L-22, Family 76.png" /></td>
									<td rowspan="3">Fish Rice (Regular, Large, Family)</td>
									<td>Regular-19 <input type="hidden" name="FishR_price" value="19"/></td>
									<td><input type="tel" name="FishR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="FishR_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Large-22  <input type="hidden" name="FishL_price" value="22"/></td>
									<td><input type="tel" name="FishL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="FishL_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<tr>
									
									<td>Family 76 <input type="hidden" name="FishF_price" value="76"/></td>
									<td><input type="tel" name="FishF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
									onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
									<td><input type="tel" name="FishF_tot" value="0" readonly="readonly" size="4" class="cur"/>
									</td>
								</tr>
								<!--END COPY  -->
							
							</table>
							</div>
							</div>
							
							
							<!---BARBEQUE--->
							
							<div id="menu1" class="tab-pane fade">
							<div class="container">
							<h2><font color='brown'>Barbeque</font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<th>Photo</th>
							<th width="23%">Item</th>
							<th  width="16%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    CHICKEN KABAB RM-15  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<td rowspan="1" width="100"><img height="120px" src="images/barbeques/CHICKEN KABAB RM-15.png" /></td>
							<td rowspan="1">Chicken Kabab </td>
							<td>Regular-15 <input type="hidden" name="Chicken_Kabab_price" value="15"/></td>
							<td><input type="text" name="Chicken_Kabab_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chicken_Kabab_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY Family MIX-GRILL RM-55 --> 
							<tr>
							<td rowspan="1">2.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/Family MIX-GRILL RM-55.png" /></td>
							<td rowspan="1">Family Mix-Grill </td>
							<td>Family-55 <input type="hidden" name="Family_Mix_Grill_price" value="55"/></td>
							<td><input type="text" name="Family_Mix_Grill_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Family_Mix_Grill_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  GRILL CHICKEN (HALF RM-18, FULL RM-34)  --> 
							<tr>
							<td rowspan="2">3.</td>
							<td rowspan="2"><img height="120px" src="images/barbeques/GRILL CHICKEN (HALF RM-18, FULL RM-34).png" /></td>
							<td rowspan="2">Grill Chicken  </td>
							<td>Half-18 <input type="hidden" name="Grill_ChickenH_price" value="18"/></td>
							<td><input type="text" name="Grill_ChickenH_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Grill_ChickenH_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>					
							<td>Full-34  <input type="hidden" name="Grill_ChickenF_price" value="34"/></td>
							<td><input type="text" name="Grill_ChickenF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Grill_ChickenF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  Lamb KABAB RM-18.5   --> 
							<tr>
							<td rowspan="1">4.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/Lamb KABAB RM-18.5.png" /></td>
							<td rowspan="1">Lamb Kabab </td>
							<td>Regular-18.5 <input type="hidden" name="Lamb_Kabab_price" value="18.5"/></td>
							<td><input type="text" name="Lamb_Kabab_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Lamb_Kabab_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  Mix KABAB RM-16.5   --> 
							<tr>
							<td rowspan="1">5.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/Mix KABAB RM-16.5.png" /></td>
							<td rowspan="1">Mix Kabab </td>
							<td>Regular-16.5 <input type="hidden" name="Mix_Kabab_price" value="16.5"/></td>
							<td><input type="text" name="Mix_Kabab_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Kabab_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  MIX-GRILL RM-34   --> 
							<tr>
							<td rowspan="1">6.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/MIX-GRILL RM-34.png" /></td>
							<td rowspan="1">Mix Grill </td>
							<td>Regular-34 <input type="hidden" name="Mix_Grill_price" value="34"/></td>
							<td><input type="text" name="Mix_Grill_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Grill_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  MIX-TIKKA RM-18   -->
							<tr>
							<td rowspan="1">7.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/MIX-TIKKA RM-18.png" /></td>
							<td rowspan="1">Mix Tikka </td>
							<td>Regular-18 <input type="hidden" name="Mix_Tikka_price" value="18"/></td>
							<td><input type="text" name="Mix_Tikka_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Tikka_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							<!--BEGIN COPY  TIKKA CHICKEN RM-15   -->
							
							<tr>
							<td rowspan="1">8.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/TIKKA CHICKEN RM-15.png" /></td>
							<td rowspan="1">Tikka Chicken </td>
							<td>Regular-15 <input type="hidden" name="Tikka_Chicken_price" value="15"/></td>
							<td><input type="text" name="Tikka_Chicken_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Tikka_Chicken_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  TIKKA LAMB RM-21.5   -->
							
							<tr>
							<td rowspan="1">9.</td>
							<td rowspan="1"><img height="120px" src="images/barbeques/TIKKA LAMB RM-21.5.png" /></td>
							<td rowspan="1">Tikka Lamb  </td>
							<td>Regular-21.5 <input type="hidden" name="Tikka_Lamb_price" value="21.5"/></td>
							<td><input type="text" name="Tikka_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Tikka_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							</table>
							</div>
							</div>
							
							<!--Special Menu  -->
							<div id="menu2" class="tab-pane fade">
							<div class="container">
							<h2><font color='brown'>Special Food</font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<th>Photo</th>
							<th width="23%">Item</th>
							<th width="16%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    AKDA CHICKEN RM-15  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<td rowspan="1"  width="100"><img height="120px" src="images/special/AKDA CHICKEN RM-15.png" /></td>
							<td rowspan="1">Akda Chicken </td>
							<td>Regular-15 <input type="hidden" name="Akda_Chicken_price" value="15"/></td>
							<td><input type="text" name="Akda_Chicken_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Akda_Chicken_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN AKDA LAMB RM-18.5.png --> 
							<tr>
							<td rowspan="1">2.</td>
							<td rowspan="1"><img height="120px" src="images/special/AKDA LAMB RM-18.5.png" /></td>
							<td rowspan="1">Akda Lamb </td>
							<td>Regular-18.5 <input type="hidden" name="Akda_Lamb_price" value="18.5"/></td>
							<td><input type="text" name="Akda_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Akda_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BAMIA RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png --> 
							<tr>
							<td rowspan="3">3.</td>
							<td rowspan="3"><img height="120px" src="images/special/BAMIA RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png" /></td>
							<td rowspan="3">Bamia With (Lamb) Or (Chicken) </td>
							<td>Bamia-7.5 <input type="hidden" name="Bamia_price" value="7.5"/></td>
							<td><input type="text" name="Bamia_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Bamia_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Bamia (Lamb)-18.5  <input type="hidden" name="Bamia_with_Lamb_price" value="18.5"/></td>
							<td><input type="text" name="Bamia_with_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Bamia_with_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Bamia (Chicken)-15  <input type="hidden" name="Bamia_with_Chicken_price" value="15"/></td>
							<td><input type="text" name="Bamia_with_Chicken_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Bamia_with_Chicken_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<!--END COPY-->	
							
							<!--BEGIN COPY  BUTTER CHICKEN GRAVY RM-15.png   --> 
							<tr>
							<td rowspan="1">4.</td>
							<td rowspan="1"><img height="120px" src="images/special/BUTTER CHICKEN GRAVY RM-15.png" /></td>
							<td rowspan="1">Butter Chicken Gravy </td>
							<td>Regular-15 <input type="hidden" name="Butter_Chicken_Gravy_price" value="15"/></td>
							<td><input type="text" name="Butter_Chicken_Gravy_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Butter_Chicken_Gravy_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  BUTTER LAMB GRAVY RM-21.png   --> 
							<tr>
							<td rowspan="1">5.</td>
							<td rowspan="1"><img height="120px" src="images/special/BUTTER LAMB GRAVY RM-21.png" /></td>
							<td rowspan="1">Butter Lamb Gravy </td>
							<td>Regular-21 <input type="hidden" name="Butter_Lamb_Gravy_price" value="21"/></td>
							<td><input type="text" name="Butter_Lamb_Gravy_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Butter_Lamb_Gravy_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  CHICKEN SHAWARMA PLATE RM-16.png   --> 
							<tr>
							<td rowspan="1">6.</td>
							<td rowspan="1"><img height="120px" src="images/special/CHICKEN SHAWARMA PLATE RM-16.png" /></td>
							<td rowspan="1">Chicken Shawarma Plate </td>
							<td>Regular-17 <input type="hidden" name="Chicken_Shawarma_Plate_price" value="17"/></td>
							<td><input type="text" name="Chicken_Shawarma_Plate_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chicken_Shawarma_Plate_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  CHICKEN SOUP RM-8.5.png   -->
							<tr>
							<td rowspan="1">7.</td>
							<td rowspan="1"><img height="120px" src="images/special/CHICKEN SOUP RM-8.5.png" /></td>
							<td rowspan="1">Chicken Soup </td>
							<td>Regular-8.5 <input type="hidden" name="Chicken_Soup_price" value="8.5"/></td>
							<td><input type="text" name="Chicken_Soup_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chicken_Soup_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							<!--BEGIN COPY  FAHSA RM-18.5.png   -->
							
							<tr>
							<td rowspan="1">8.</td>
							<td rowspan="1"><img height="120px" src="images/special/FAHSA RM-18.5.png" /></td>
							<td rowspan="1">Fahsa </td>
							<td>Regular-17 <input type="hidden" name="Fahsa_price" value="17"/></td>
							<td><input type="text" name="Fahsa_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Fahsa_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  FASOLIA RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png   -->
							
							<tr>
							<td rowspan="3">9.</td>
							<td rowspan="3"><img height="120px" src="images/special/FASOLIA RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png" /></td>
							<td rowspan="3">Fasolia With (Lamb) Or (Chicken)</td>
							<td>Fasolia-7.5 <input type="hidden" name="Fasolia_price" value="7.5"/></td>
							<td><input type="text" name="Fasolia_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Fasolia_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Fasolia (Lamb)-18.5  <input type="hidden" name="Fasolia_with_Lamb_price" value="18.5"/></td>
							<td><input type="text" name="Fasolia_with_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Fasolia_with_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Fasolia (Chicken)-15  <input type="hidden" name="Fasolia_with_Chicken_price" value="15"/></td>
							<td><input type="text" name="Fasolia_with_Chicken_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Fasolia_with_Chicken_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<!--END COPY  -->
							
							<!--BEGIN COPY  KAJU CHICKEN GRAVY RM-15.png   -->
							
							<tr>
							<td rowspan="1">10.</td>
							<td rowspan="1"><img height="120px" src="images/special/KAJU CHICKEN GRAVY RM-15.png" /></td>
							<td rowspan="1">Kaju Chicken Gravy </td>
							<td>Regular-15 <input type="hidden" name="Kaju_Chicken_Gravy_price" value="15"/></td>
							<td><input type="text" name="Kaju_Chicken_Gravy_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Kaju_Chicken_Gravy_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  KAJU LAMB GRAVY RM-21.png   -->
							
							<tr>
							<td rowspan="1">11.</td>
							<td rowspan="1"><img height="120px" src="images/special/KAJU LAMB GRAVY RM-21.png" /></td>
							<td rowspan="1">Kaju Lamb Gravy </td>
							<td>Regular-21 <input type="hidden" name="Kaju_Lamb_Gravy_price" value="15"/></td>
							<td><input type="text" name="Kaju_Lamb_Gravy_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Kaju_Lamb_Gravy_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  LAMB SHAWARMA PLATE RM-20.png   -->
							
							<tr>
							<td rowspan="1">12.</td>
							<td rowspan="1"><img height="120px" src="images/special/LAMB SHAWARMA PLATE RM-20.png" /></td>
							<td rowspan="1">Lamb Shawarma Plate </td>
							<td>Regular-20 <input type="hidden" name="Lamb_Shawarma_Plate_price" value="20"/></td>
							<td><input type="text" name="Lamb_Shawarma_Plate_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Lamb_Shawarma_Plate_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							<!--BEGIN COPY  LAMB SOUP RM-13.5.png   -->
							
							<tr>
							<td rowspan="1">13.</td>
							<td rowspan="1"><img height="120px" src="images/special/LAMB SOUP RM-13.5.png" /></td>
							<td rowspan="1">Lamb Soup </td>
							<td>Regular-13.5 <input type="hidden" name="Lamb_Soup_price" value="13.5"/></td>
							<td><input type="text" name="Lamb_Soup_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Lamb_Soup_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  MIX-VEG RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png   -->
							
							<tr>
							<td rowspan="3">14.</td>
							<td rowspan="3"><img height="120px" src="images/special/MIX-VEG RM-7.5 (WITH LAMB RM-18.5, WITH CHICKEN RM-15).png" /></td>
							<td rowspan="3">Mix-Veg With (Lamb) Or (Chicken)</td>
							<td>Mix-veg-7.5 <input type="hidden" name="Mix_Veg_price" value="7.5"/></td>
							<td><input type="text" name="Mix_Veg_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Veg_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Mix-veg (Lamb)-18.5  <input type="hidden" name="Mix_Veg_with_Lamb_price" value="18.5"/></td>
							<td><input type="text" name="Mix_Veg_with_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Veg_with_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Mix-veg (Chicken)-15  <input type="hidden" name="Mix_Veg_with_Chicken_price" value="15"/></td>
							<td><input type="text" name="Mix_Veg_with_Chicken_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_Veg_with_Chicken_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<!--END COPY  -->
							
							</table>
							</div>
							</div>
							
							<!--Arabic Bread and Sandwich -->
							<div id="menu3" class="tab-pane fade">
							<h2><font color='brown'> Arabic Bread and Sandwich </font></h2>
							
							<table border="1"  width="100%">
							<tr>
							<th>No</th>
							<th>Photo</th>
							<th>Item</th>
							<th width="15%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    CARABIC CRISBE BREAD RM-3.png  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<td rowspan="1"  width="100"><img height="120px" src="images/sandwich/ARABIC CRISBE BREAD RM-3.png" /></td>
							<td rowspan="1">Arabic Crisbe Bread </td>
							<td>Regular-3 <input type="hidden" name="Arabic_Crisbe_Bread_price" value="3"/></td>
							<td><input type="text" name="Arabic_Crisbe_Bread_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Arabic_Crisbe_Bread_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY CHICKEN SHAWARMA RM-10 --> 
							<tr>
							<td rowspan="1">2.</td>
							<td rowspan="1"><img height="120px" src="images/sandwich/CHICKEN SHAWARMA RM-10.png" /></td>
							<td rowspan="1">Chicken Shawarma </td>
							<td>Regular-10 <input type="hidden" name="Chicken_Shawarma_price" value="10"/></td>
							<td><input type="text" name="Chicken_Shawarma_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chicken_Shawarma_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  LAMB SHAWARMA RM 12  --> 
							<tr>
							<td rowspan="1">3.</td>
							<td rowspan="1"><img height="120px" src="images/sandwich/LAMB SHAWARMA RM 12.png" /></td>
							<td rowspan="1">Lamb Shawarma  </td>
							<td>Regular-12 <input type="hidden" name="Lamb_Shawarma_price" value="12"/></td>
							<td><input type="text" name="Lamb_Shawarma_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Lamb_Shawarma_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  MULAWAH-RM-7   --> 
							<tr>
							<td rowspan="1">4.</td>
							<td rowspan="1"><img height="120px" src="images/sandwich/MULAWAH-RM-7.png" /></td>
							<td rowspan="1">Mulawah </td>
							<td>Regular-7 <input type="hidden" name="Mulawah_price" value="7"/></td>
							<td><input type="text" name="Mulawah_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mulawah_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  RATEB RM-7   --> 
							<tr>
							<td rowspan="1">5.</td>
							<td rowspan="1"><img height="120px" src="images/sandwich/RATEB RM-7.png" /></td>
							<td rowspan="1">Rateb </td>
							<td>Regular-7 <input type="hidden" name="Rateb_price" value="7"/></td>
							<td><input type="text" name="Rateb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rateb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  TAMEEZ BREAD (PLAIN RM3,CHEESER OR GARLIC M6, C&G RM8, SPECIAL RM11)   --> 
							<tr>
							<td rowspan="3">6.</td>
							<td rowspan="3"><img height="120px" src="images/sandwich/TAMEEZ BREAD (PLAIN RM3,CHEESER OR GARLIC M6, C&G RM8, SPECIAL RM11).png" /></td>
							<td rowspan="3">Tameez Bread (Plain) Or (Cheeser/Garlic) Or (Special)  </td>
							<td>Tameez Bread (Plain)-3 <input type="hidden" name="Tameez_BreadP_price" value="3"/></td>
							<td><input type="text" name="Tameez_BreadP_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Tameez_BreadP_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Tameez Bread (Cheeser/Garlic)-6  <input type="hidden" name="Tameez_BreadCG_price" value="6"/></td>
							<td><input type="text" name="Tameez_BreadCG_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Tameez_BreadCG_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<tr>
							<td>Tameez Bread (Special)-11 <input type="hidden" name="Tameez_BreadS_price" value="11"/></td>
							<td><input type="text" name="Tameez_BreadS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Tameez_BreadS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							</table>
							</div>
							
							<!--Appetizers    -->
							
							<div id="menu4" class="tab-pane fade">
							<h2><font color='brown'> Appetizers </font></h2>
							
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<th>Photo</th>
							<th>Item</th>
							<th width="15%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    ARABIC SALAD FATTOUSH RM-13.5  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<td rowspan="1"  width="100"><img height="120px" src="images/appetizers/ARABIC SALAD FATTOUSH RM-13.5.png" /></td>
							<td rowspan="1">Arabic Salad Fattoush </td>
							<td>Regular-13.5 <input type="hidden" name="Arabic_Salad_Fattoush_price" value="13.5"/></td>
							<td><input type="text" name="Arabic_Salad_Fattoush_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Arabic_Salad_Fattoush_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN ARABIC SALAD RM-8.5, WITH YOGURT RM-10.5.png --> 
							<tr>
							<td rowspan="2">2.</td>
							<td rowspan="2"><img height="120px" src="images/appetizers/ARABIC SALAD RM-8.5, WITH YOGURT RM-10.5.png" /></td>
							<td rowspan="2">Arabic Salad </td>
							<td>Plain-8.5 <input type="hidden" name="Arabic_Salad_price" value="8.5"/></td>
							<td><input type="text" name="Arabic_Salad_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Arabic_Salad_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>With Yogurt-10.5  <input type="hidden" name="Arabic_SaladY_price" value="10.5"/></td>
							<td><input type="text" name="Arabic_SaladY_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Arabic_SaladY_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->	
							
							<!--  CHILI  BLENDER S-RM-1.5, L-RM-2.5, F-RM-5 (FREE WITH RICE MEAL).png --> 
							<tr>
							<td rowspan="3">3.</td>
							<td rowspan="3"><img height="120px" src="images/appetizers/CHILI  BLENDER S-RM-1.5, L-RM-2.5, F-RM-5 (FREE WITH RICE MEAL).png" /></td>
							<td rowspan="3">Chili  Blender  </td>
							<td>Small-1.5 <input type="hidden" name="Chili_BlenderS_price" value="1.5"/></td>
							<td><input type="text" name="Chili_BlenderS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chili_BlenderS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Large-2.5  <input type="hidden" name="Chili_BlenderL_price" value="2.5"/></td>
							<td><input type="text" name="Chili_BlenderL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chili_BlenderL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Family-5  <input type="hidden" name="Chili_BlenderF_price" value="5"/></td>
							<td><input type="text" name="Chili_BlenderF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Chili_BlenderF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<!--END COPY-->	
							
							<!--BEGIN COPY  Arabic Zitown Salad RM-13.5.png   --> 
							<tr>
							<td rowspan="1">4.</td>
							<td rowspan="1"><img height="120px" src="images/appetizers/Arabic Zitown Salad RM-13.5.png" /></td>
							<td rowspan="1">Arabic Zitown Salad </td>
							<td>Regular-13.5 <input type="hidden" name="Arabic_Zitown_Salad_price" value="13.5"/></td>
							<td><input type="text" name="Arabic_Zitown_Salad_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Arabic_Zitown_Salad_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  FOUL RM-7.5.png   --> 
							<tr>
							<td rowspan="1">5.</td>
							<td rowspan="1"><img height="120px" src="images/appetizers/FOUL RM-7.5.png" /></td>
							<td rowspan="1">Foul </td>
							<td>Regular-7.5 <input type="hidden" name="FOUL_price" value="7.5"/></td>
							<td><input type="text" name="FOUL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="FOUL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  FRENCH FRIES RM-6.5.png   --> 
							<tr>
							<td rowspan="1">6.</td>
							<td rowspan="1"><img height="120px" src="images/appetizers/FRENCH FRIES RM-6.5.png" /></td>
							<td rowspan="1"> French Fries </td>
							<td>Regular-6.5 <input type="hidden" name="French_Fries_price" value="6.5"/></td>
							<td><input type="text" name="French_Fries_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="French_Fries_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  HUMUS R-RM-7.5, L-RM-12.png   -->
							<tr>
							<td rowspan="2">7.</td>
							<td rowspan="2"><img height="120px" src="images/appetizers/HUMUS R-RM-7.5, L-RM-12.png" /></td>
							<td rowspan="2">Humus </td>
							<td>Regular-7.5 <input type="hidden" name="HumusR_price" value="7.5"/></td>
							<td><input type="text" name="HumusR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="HumusR_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Large-12  <input type="hidden" name="HumusL_price" value="12"/></td>
							<td><input type="text" name="HumusL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="HumusL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY  -->
							
							<!--BEGIN COPY  HUMUS WITH LAMB RM-16.png   -->
							
							<tr>
							<td rowspan="1">8.</td>
							<td rowspan="1"><img height="120px" src="images/appetizers/HUMUS WITH LAMB RM-16.png" /></td>
							<td rowspan="1">Humus With Lamb </td>
							<td>Regular-16 <input type="hidden" name="Humus_With_Lamb_price" value="16"/></td>
							<td><input type="text" name="Humus_With_Lamb_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Humus_With_Lamb_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  RICE KABSA OR HANITH R-RM-6.5, L-RM-8.5, FAMILY-RM-25.png     "Rice_Kabsa_HanithR","Rice_Kabsa_HanithL","Rice_Kabsa_HanithF"  -->
							
							<tr>
							<td rowspan="3">9.</td>
							<td rowspan="3"><img height="120px" src="images/appetizers/RICE KABSA OR HANITH R-RM-6.5, L-RM-8.5, FAMILY-RM-25.png" /></td>
							<td rowspan="3">Rice Kabsa Or Hanith </td>
							<td>Regular-6.5 <input type="hidden" name="Rice_Kabsa_HanithR_price" value="6.5"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithR_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Large-8.5  <input type="hidden" name="Rice_Kabsa_HanithL_price" value="8.5"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							
							<td>Family-25  <input type="hidden" name="Rice_Kabsa_HanithF_price" value="25"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_Kabsa_HanithF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<!--END COPY  -->
							
							<!--BEGIN COPY  RICE MAGLOBA R-RM8, L-RM10, FAMILY32.png   -->
							
							<tr>
							<td rowspan="3">10.</td>
							<td rowspan="3"><img height="120px" src="images/appetizers/RICE MAGLOBA R-RM8, L-RM10, FAMILY32.png" /></td>
							<td rowspan="3">Rice Magloba </td>
							<td>Regular-8 <input type="hidden" name="Rice_MaglobaR_price" value="8"/></td>
							<td><input type="text" name="Rice_MaglobaR_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_MaglobaR_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Large-10  <input type="hidden" name="Rice_MaglobaL_price" value="10"/></td>
							<td><input type="text" name="Rice_MaglobaL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_MaglobaL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<tr>
							<td>Family-32  <input type="hidden" name="Rice_MaglobaF_price" value="32"/></td>
							<td><input type="text" name="Rice_MaglobaF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Rice_MaglobaF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  SOUP S-RM-2, L-RM-4, F-RM-6 (FREE WITH RICE MEAL).png   -->
							
							<tr>
							<td rowspan="3">11.</td>
							<td rowspan="3"><img height="120px" src="images/appetizers/SOUP S-RM-2, L-RM-4, F-RM-6 (FREE WITH RICE MEAL).png" /></td>
							<td rowspan="3">Soup - Free With Rice Meal </td>
							<td>Small-2 <input type="hidden" name="SoupS_price" value="2"/></td>
							<td><input type="text" name="SoupS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SoupS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Large-4  <input type="hidden" name="SoupL_price" value="4"/></td>
							<td><input type="text" name="SoupL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SoupL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<tr>
							<td>Family-6  <input type="hidden" name="SoupF_price" value="6"/></td>
							<td><input type="text" name="SoupF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SoupF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY  -->
							
							
							<!--BEGIN COPY  TIMUN SALAD S-RM-1.5, L-RM-2.5, F-RM-5 (FREE WITH RICE MEAL).png   -->
							
							<tr>
							<td rowspan="3">12.</td>
							<td rowspan="3"><img height="120px" src="images/appetizers/TIMUN SALAD S-RM-1.5, L-RM-2.5, F-RM-5 (FREE WITH RICE MEAL).png" /></td>
							<td rowspan="3">Timun Salad  </td>
							<td>Small-1.5 <input type="hidden" name="Timun_SaladS_price" value="1.5"/></td>
							<td><input type="text" name="Timun_SaladS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Timun_SaladS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Large-2.5  <input type="hidden" name="Timun_SaladL_price" value="2.5"/></td>
							<td><input type="text" name="Timun_SaladL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Timun_SaladL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<tr>
							<td>Family-5  <input type="hidden" name="Timun_SaladF_price" value="5"/></td>
							<td><input type="text" name="Timun_SaladF_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Timun_SaladF_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY  -->
							
							<!--BEGIN COPY  YOGURT RM-7.5.png   -->
							
							<tr>
							<td rowspan="1">13.</td>
							<td rowspan="1"><img height="120px" src="images/appetizers/YOGURT RM-7.5.png" /></td>
							<td rowspan="1">Yogurt </td>
							<td>Regular-7.5 <input type="hidden" name="Yogurt_price" value="7.5"/></td>
							<td><input type="text" name="Yogurt_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Yogurt_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY  -->
							
							</table>
							
							</div>
							
							<!--Desserts   -->
							
							<div id="menu5" class="tab-pane fade">
							<h2><font color='brown'> Desserts </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<th>Photo</th>
							<th>Item</th>
							<th width="15%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>
							<td rowspan="1">Baklawa-Small </td>
							<td>Small-5 <input type="hidden" name="BaklawaS_price" value="5"/></td>
							<td><input type="text" name="BaklawaS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BaklawaS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="1">2.</td>
							<td rowspan="1" width="100"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>
							<td rowspan="1">Baklawa-Large </td>
							<td>Large-16 <input type="hidden" name="BaklawaL_price" value="16"/></td>
							<td><input type="text" name="BaklawaL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BaklawaL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="1">3.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>
							<td rowspan="1">Basbosa-Small  </td>
							<td>Small-3 <input type="hidden" name="BasbosaS_price" value="3"/></td>
							<td><input type="text" name="BasbosaS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BasbosaS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-L 15   --> 
							<tr>
							<td rowspan="1">4.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/BASBOSA-L 15.png" /></td>
							<td rowspan="1">Basbosa-Large </td>
							<td>Large-15 <input type="hidden" name="BasbosaL_price" value="15"/></td>
							<td><input type="text" name="BasbosaL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BasbosaL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  CHEESECAKE RM5   --> 
							<tr>
							<td rowspan="1">5.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/CHEESECAKE RM5.png" /></td>
							<td rowspan="1">Cheesecake </td>
							<td>Regular-5 <input type="hidden" name="Cheesecake_price" value="5"/></td>
							<td><input type="text" name="Cheesecake_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Cheesecake_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  Cream Caramel RM 3.5   --> 
							
							<tr>
							<td rowspan="1">6.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/Cream Caramel RM 3.5.png" /></td>
							<td rowspan="1">Cream Caramel  </td>
							<td>Regular-3.5 <input type="hidden" name="CreamCaramel_price" value="3.5"/></td>
							<td><input type="text" name="CreamCaramel_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="CreamCaramel_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  Labania RM-3   --> 
							<tr>
							<td rowspan="1">7.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/Labania RM-3.png" /></td>
							<td rowspan="1">Labania </td>
							<td>Regular-3 <input type="hidden" name="Labania_price" value="3"/></td>
							<td><input type="text" name="Labania_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Labania_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  MIX RM5.5   --> 
							<tr>
							<td rowspan="1">8.</td>
							<td rowspan="1"><img height="120px" src="images/desserts/MIX RM5.5.png" /></td>
							<td rowspan="1">Mix </td>
							<td>Regular-5.5 <input type="hidden" name="Mix_price" value="5.5"/></td>
							<td><input type="text" name="Mix_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Mix_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							</table>
							</div>
							
							<!--Fresh Juice -->
							
							<div id="menu6" class="tab-pane fade">
							<h2><font color='brown'>Fresh Juice  </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<!-- <th>Photo</th> -->
							<th>Item</th>
							<th width="15%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="2">1.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>-->
							<td rowspan="2">Mango</td>
							<td>Glass-8.5 <input type="hidden" name="MANGO_price" value="8.5"/></td>
							<td><input type="text" name="MANGO_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MANGO_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<tr>
							<td>Jug-32  <input type="hidden" name="MangoJug_price" value="32"/></td>
							<td><input type="text" name="MangoJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MangoJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->
							
							<!--start COPY-->
							
							
							
							<!--end COPY-->
							
							
							
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="2">2.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>-->
							<td rowspan="2">Mango Lasse </td>
							<td>Glass-9.5 <input type="hidden" name="MANGO_LASSE_price" value="9.5"/></td>
							<td><input type="text" name="MANGO_LASSE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MANGO_LASSE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-36<input type="hidden" name="MANGO_LASSEJug_price" value="36"/></td>
							<td><input type="text" name="MANGO_LASSEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MANGO_LASSEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="2">3.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="2">Mango Shake</td>
							<td>Glass-9.5 <input type="hidden" name="MANGO_SHAKE_price" value="9.5"/></td>
							<td><input type="text" name="MANGO_SHAKE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MANGO_SHAKE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-36  <input type="hidden" name="MANGO_SHAKEJug_price" value="36"/></td>
							<td><input type="text" name="MANGO_SHAKEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MANGO_SHAKEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-L 15   --> 
							<tr>
							<td rowspan="2">4.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/BASBOSA-L 15.png" /></td>-->
							<td rowspan="2">Carrot </td>
							<td>Glass-8.5 <input type="hidden" name="CARROT_price" value="8.5"/></td>
							<td><input type="text" name="CARROT_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="CARROT_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-32  <input type="hidden" name="CARROTJug_price" value="32"/></td>
							<td><input type="text" name="CARROTJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="CARROTJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  HONEYDEW RM5   --> 
							<tr>
							<td rowspan="2">5.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/HONEYDEW RM5.png" /></td>-->
							<td rowspan="2">Honeydew </td>
							<td>Glass-7.5 <input type="hidden" name="HONEYDEW_price" value="7.5"/></td>
							<td><input type="text" name="HONEYDEW_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="HONEYDEW_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-28  <input type="hidden" name="HONEYDEWJug_price" value="28"/></td>
							<td><input type="text" name="HONEYDEWJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="HONEYDEWJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  Cream Caramel RM 3.5   --> 
							
							<tr>
							<td rowspan="2">6.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/Cream Caramel RM 3.5.png" /></td>-->
							<td rowspan="2">Orange </td>
							<td>Glass-7 <input type="hidden" name="ORANGE_price" value="7"/></td>
							<td><input type="text" name="ORANGE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="ORANGE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-26  <input type="hidden" name="ORANGEJug_price" value="26"/></td>
							<td><input type="text" name="ORANGEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="ORANGEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  LEMON RM-3   --> 
							<tr>
							<td rowspan="2">7.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/LEMON RM-3.png" /></td>-->
							<td rowspan="2">Lemon </td>
							<td>Glass-6 <input type="hidden" name="LEMON_price" value="6"/></td>
							<td><input type="text" name="LEMON_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMON_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-22  <input type="hidden" name="LEMONJug_price" value="22"/></td>
							<td><input type="text" name="LEMONJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMONJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
														
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   --> 
							<tr>
							<td rowspan="2">8.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Orange & Lemon</td>
							<td>Glass-8.5 <input type="hidden" name="ORANGE_LEMON_price" value="8.5"/></td>
							<td><input type="text" name="ORANGE_LEMON_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="ORANGE_LEMON_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-32  <input type="hidden" name="ORANGE_LEMONJug_price" value="32"/></td>
							<td><input type="text" name="ORANGE_LEMONJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="ORANGE_LEMONJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->
							
							<!---BEGIN COPY  ORANGE_LEMON RM5.5--> 
							<tr>
							<td rowspan="2">9.</td>
							<!-- <td rowspan="1"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Lemon With Mint </td>
							<td>Glass-7.5 <input type="hidden" name="LEMON_MINT_price" value="7.5"/></td>
							<td><input type="text" name="LEMON_MINT_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMON_MINT_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-28  <input type="hidden" name="LEMON_MINTJug_price" value="28"/></td>
							<td><input type="text" name="LEMON_MINTJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMON_MINTJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   LEMON_GINGER --> 
							<tr>
							<td rowspan="2">10.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Lemon With Ginger</td>
							<td>Glass-7.5 <input type="hidden" name="LEMON_GINGER_price" value="7.5"/></td>
							<td><input type="text" name="LEMON_GINGER_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMON_GINGER_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-28  <input type="hidden" name="LEMON_GINGERJug_price" value="28"/></td>
							<td><input type="text" name="LEMON_GINGERJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LEMON_GINGERJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   APPLE --> 
							<tr>
							<td rowspan="2">11.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Apple</td>
							<td>Glass-7 <input type="hidden" name="APPLE_price" value="7"/></td>
							<td><input type="text" name="APPLE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="APPLE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-26  <input type="hidden" name="APPLEJug_price" value="26"/></td>
							<td><input type="text" name="APPLEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="APPLEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   PINEAPLE --> 
							<tr>
							<td rowspan="2">12.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Pineaple</td>
							<td>Glass-7 <input type="hidden" name="PINEAPLE_price" value="7"/></td>
							<td><input type="text" name="PINEAPLE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="PINEAPLE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-26  <input type="hidden" name="PINEAPLEJug_price" value="26"/></td>
							<td><input type="text" name="PINEAPLEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="PINEAPLEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">13.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Watermelon</td>
							<td>Glass-7 <input type="hidden" name="WATERMELON_price" value="7"/></td>
							<td><input type="text" name="WATERMELON_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="WATERMELON_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-26  <input type="hidden" name="WATERMELONJug_price" value="26"/></td>
							<td><input type="text" name="WATERMELONJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="WATERMELONJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">14.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Banana Milkshake</td>
							<td>Glass-8 <input type="hidden" name="BANANA_MILKSHAKE_price" value="8"/></td>
							<td><input type="text" name="BANANA_MILKSHAKE_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BANANA_MILKSHAKE_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-30  <input type="hidden" name="BANANA_MILKSHAKEJug_price" value="30"/></td>
							<td><input type="text" name="BANANA_MILKSHAKEJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="BANANA_MILKSHAKEJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">15.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Yogurt Drink</td>
							<td>Glass-8 <input type="hidden" name="YOGURT_DRINK_price" value="8"/></td>
							<td><input type="text" name="YOGURT_DRINK_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="YOGURT_DRINK_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-30  <input type="hidden" name="YOGURT_DRINKJug_price" value="30"/></td>
							<td><input type="text" name="YOGURT_DRINKJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="YOGURT_DRINKJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">16.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Cocktail </td>
							<td>Glass-10 <input type="hidden" name="COCKTAIL_price" value="10"/></td>
							<td><input type="text" name="COCKTAIL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="COCKTAIL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-38  <input type="hidden" name="COCKTAILJug_price" value="38"/></td>
							<td><input type="text" name="COCKTAILJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="COCKTAILJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
														
							</tr>
							
							<!--END COPY   -->	
							
							
							
							</table>
							</div>
							
							<!--Hot Drink   -->	
							<div id="menu7" class="tab-pane fade">
							
							<h2><font color='brown'>Hot Drinks  </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<!-- <th>Photo</th> -->
							<th>Item</th>
							<th width="15%">Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>-->
							<td rowspan="1">Teh Tarik </td>
							<td>3 <input type="hidden" name="TehTarik_price" value="3"/></td>
							<td><input type="text" name="TehTarik_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehTarik_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="1">2.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>-->
							<td rowspan="1">Teh Panas </td>
							<td>3 <input type="hidden" name="Teh_Panas_price" value="3"/></td>
							<td><input type="text" name="Teh_Panas_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Teh_Panas_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="1">3.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="1">Teh  (O)  </td>
							<td>2.5 <input type="hidden" name="TehO_price" value="2.5"/></td>
							<td><input type="text" name="TehO_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehO_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-L 15   --> 
							<tr>
							<td rowspan="1">4.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-L 15.png" /></td>-->
							<td rowspan="1">Sirap </td>
							<td>2.5 <input type="hidden" name="Sirap_price" value="2.5"/></td>
							<td><input type="text" name="Sirap_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Sirap_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  Cream Caramel RM 3.5   --> 
							
							<tr>
							<td rowspan="1">5.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/Cream Caramel RM 3.5.png" /></td>-->
							<td rowspan="1">Nescafe (O)  </td>
							<td>3 <input type="hidden" name="NescafeO_price" value="3"/></td>
							<td><input type="text" name="NescafeO_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="NescafeO_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  LEMON RM-3   --> 
							<tr>
							<td rowspan="1">6.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/LEMON RM-3.png" /></td>-->
							<td rowspan="1">Nescafe </td>
							<td>3.5 <input type="hidden" name="Nescafe_price" value="3.5"/></td>
							<td><input type="text" name="Nescafe_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Nescafe_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   --> 
							<tr>
							<td rowspan="1">7.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Kopi (O) </td>
							<td>3 <input type="hidden" name="KopiO1_price" value="3"/></td>
							<td><input type="text" name="KopiO1_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiO1_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   --> 
							<tr>
							<td rowspan="1">8.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Kopi </td>
							<td>3.5 <input type="hidden" name="Kopi_price" value="3.5"/></td>
							<td><input type="text" name="Kopi_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Kopi_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   LEMON_GINGER --> 
							<tr>
							<td rowspan="1">9.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Tea Arab (Purdina)</td>
							<td>3 <input type="hidden" name="TeaArab_price" value="3"/></td>
							<td><input type="text" name="TeaArab_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArab_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   APPLE --> 
							<tr>
							<td rowspan="1">10.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Tea Arab (Purdina) Pot Small </td>
							<td>6 <input type="hidden" name="TeaArabPS_price" value="6"/></td>
							<td><input type="text" name="TeaArabPS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabPS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   PINEAPLE --> 
							<tr>
							<td rowspan="1">11.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Tea Arab (Purdina) Pot Large </td>
							<td>11 <input type="hidden" name="TeaArabPL_price" value="11"/></td>
							<td><input type="text" name="TeaArabPL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabPL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">12.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Tea Arab (Milk) </td>
							<td>3.5 <input type="hidden" name="TeaArabM_price" value="3.5"/></td>
							<td><input type="text" name="TeaArabM_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabM_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">13.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Green Tea </td>
							<td>3 <input type="hidden" name="GreenTea_price" value="3"/></td>
							<td><input type="text" name="GreenTea_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="GreenTea_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">14.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Green Tea Pot Small </td>
							<td>6 <input type="hidden" name="GreenTeaPS_price" value="6"/></td>
							<td><input type="text" name="GreenTeaPS_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="GreenTeaPS_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">15.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Green Tea Pot Large  </td>
							<td>11 <input type="hidden" name="GreenTeaPL_price" value="11"/></td>
							<td><input type="text" name="GreenTeaPL_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="GreenTeaPL_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">16.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Milo (O)  </td>
							<td>3 <input type="hidden" name="MiloO_price" value="3"/></td>
							<td><input type="text" name="MiloO_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MiloO_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">17.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Milo  </td>
							<td>3.5 <input type="hidden" name="Milo_price" value="3.5"/></td>
							<td><input type="text" name="Milo_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Milo_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">18.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Limau Panas </td>
							<td>2.5 <input type="hidden" name="Limau_Panas_price" value="2.5"/></td>
							<td><input type="text" name="Limau_Panas_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Limau_Panas_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="1">19.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="1">Teh (O) Limau Panas </td>
							<td>3 <input type="hidden" name="Teh_Limau_Panas_price" value="3"/></td>
							<td><input type="text" name="Teh_Limau_Panas_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Teh_Limau_Panas_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->	
							
							</table>
							</div>
							
							<!--Iced Drink   -->
							
							<div id="menu8" class="tab-pane fade">
							<h2><font color='brown'>Iced Drinks  </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<!-- <th>Photo</th> -->
							<th>Item</th>
							<th width="15%">Type-Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="2">1.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>-->
							<td rowspan="2">Teh Ice </td>
							<td>Glass-4 <input type="hidden" name="TehIce_price" value="4"/></td>
							<td><input type="text" name="TehIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="TehIceJug_price" value="18"/></td>
							<td><input type="text" name="TehIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="2">2.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>-->
							<td rowspan="2">Teh  (O) Ice </td>
							<td>Glass-3 <input type="hidden" name="TehOIce_price" value="3"/></td>
							<td><input type="text" name="TehOIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehOIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-13  <input type="hidden" name="TehOIceJug_price" value="13"/></td>
							<td><input type="text" name="TehOIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehOIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="2">3.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="2">Nescafe (O) Ice  </td>
							<td>Glass-4 <input type="hidden" name="NescafeOIce_price" value="4"/></td>
							<td><input type="text" name="NescafeOIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="NescafeOIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="NescafeOIceJug_price" value="18"/></td>
							<td><input type="text" name="NescafeOIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="NescafeOIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-L 15   --> 
							<tr>
							<td rowspan="2">4.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-L 15.png" /></td>-->
							<td rowspan="2">Nescafe Ice </td>
							<td>Glass-4.5 <input type="hidden" name="NescafeIce_price" value="4.5"/></td>
							<td><input type="text" name="NescafeIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="NescafeIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-20  <input type="hidden" name="NescafeIceJug_price" value="20"/></td>
							<td><input type="text" name="NescafeIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="NescafeIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY-->
							
							<!--BEGIN COPY  HONEYDEW RM5   --> 
							<tr>
							<td rowspan="2">5.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/HONEYDEW RM5.png" /></td>-->
							<td rowspan="2">Sirap Ice </td>
							<td>Glass-3 <input type="hidden" name="SirapIce_price" value="3"/></td>
							<td><input type="text" name="SirapIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-13  <input type="hidden" name="SirapIceJug_price" value="13"/></td>
							<td><input type="text" name="SirapIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  Cream Caramel RM 3.5   --> 
							
							<tr>
							<td rowspan="2">6.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/Cream Caramel RM 3.5.png" /></td>-->
							<td rowspan="2">Sirap Limau Ice  </td>
							<td>Glass-4 <input type="hidden" name="SirapLimauIce_price" value="4"/></td>
							<td><input type="text" name="SirapLimauIce_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapLimauIce_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18 <input type="hidden" name="SirapLimauIceJug_price" value="18"/></td>
							<td><input type="text" name="SirapLimauIceJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapLimauIceJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							
							<!--BEGIN COPY  LEMON RM-3   --> 
							<tr>
							<td rowspan="2">7.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/LEMON RM-3.png" /></td>-->
							<td rowspan="2">Sirap Bandung </td>
							<td>Glass-4.5 <input type="hidden" name="SirapBandung_price" value="4.5"/></td>
							<td><input type="text" name="SirapBandung_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapBandung_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-20  <input type="hidden" name="SirapBandungJug_price" value="20"/></td>
							<td><input type="text" name="SirapBandungJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SirapBandungJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   --> 
							<!--tr>
							<td rowspan="1">8.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<!--td rowspan="1">Kopi (O) </td>
							<td>3 <input type="hidden" name="KopiO2_price" value="3"/></td>
							<td><input type="text" name="KopiO2_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiO2_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr-->
							
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   --> 
							<tr>
							<td rowspan="2">8.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Kopi (O) Ice </td>
							<td>Glass-3.5 <input type="hidden" name="KopiOIc_price" value="3.5"/></td>
							<td><input type="text" name="KopiOIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiOIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-16 <input type="hidden" name="KopiOIcJug_price" value="16"/></td>
							<td><input type="text" name="KopiOIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiOIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   LEMON_GINGER --> 
							<tr>
							<td rowspan="2">9.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Kopi Ice</td>
							<td>Glass-4.5 <input type="hidden" name="KopiIc3_price" value="4.5"/></td>
							<td><input type="text" name="KopiIc3_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiIc3_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-20  <input type="hidden" name="KopiIc3Jug_price" value="20"/></td>
							<td><input type="text" name="KopiIc3Jug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="KopiIc3Jug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   APPLE --> 
							<tr>
							<td rowspan="2">10.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Green Tea Ice </td>
							<td>Glass-4 <input type="hidden" name="GreenTeaIc_price" value="4"/></td>
							<td><input type="text" name="GreenTeaIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="GreenTeaIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="GreenTeaIcJug_price" value="18"/></td>
							<td><input type="text" name="GreenTeaIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="GreenTeaIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   PINEAPLE --> 
							<tr>
							<td rowspan="2">11.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Milo (O) Ice </td>
							<td>Glass-4 <input type="hidden" name="MiloOIc_price" value="4"/></td>
							<td><input type="text" name="MiloOIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MiloOIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="MiloOIcJug_price" value="18"/></td>
							<td><input type="text" name="MiloOIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MiloOIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">12.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Milo Ice</td>
							<td>Glass-4.5 <input type="hidden" name="MiloIc_price" value="4.5"/></td>
							<td><input type="text" name="MiloIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MiloIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-20  <input type="hidden" name="MiloIcJug_price" value="20"/></td>
							<td><input type="text" name="MiloIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MiloIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">13.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Limau Ice </td>
							<td>Glass-3.5 <input type="hidden" name="LimauIc_price" value="3.5"/></td>
							<td><input type="text" name="LimauIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LimauIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-16  <input type="hidden" name="LimauIcJug_price" value="16"/></td>
							<td><input type="text" name="LimauIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LimauIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">14.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Teh (O) Limau Ice </td>
							<td>Glass-4 <input type="hidden" name="TehOLimauIc_price" value="4"/></td>
							<td><input type="text" name="TehOLimauIc_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehOLimauIc_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="TehOLimauIcJug_price" value="18"/></td>
							<td><input type="text" name="TehOLimauIcJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TehOLimauIcJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">15.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Tea Arab (Milk) Ice </td>
							<td>Glass-4.5 <input type="hidden" name="TeaArabMK_price" value="4.5"/></td>
							<td><input type="text" name="TeaArabMK_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabMK_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-20  <input type="hidden" name="TeaArabMKJug_price" value="20"/></td>
							<td><input type="text" name="TeaArabMKJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabMKJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							
							
							<!--BEGIN COPY  ORANGE_LEMON RM5.5   WATERMELON --> 
							<tr>
							<td rowspan="2">16.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/ORANGE_LEMON RM5.5.png" /></td>-->
							<td rowspan="2">Tea Arab (Purdina) Ice </td>
							<td>Glass-4 <input type="hidden" name="TeaArabPU_price" value="4"/></td>
							<td><input type="text" name="TeaArabPU_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabPU_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							<tr>
							<td>Jug-18  <input type="hidden" name="TeaArabPUJug_price" value="18"/></td>
							<td><input type="text" name="TeaArabPUJug_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaArabPUJug_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							
							</tr>
							<!--END COPY   -->	
							</table>
							</div>
							
							
							<!--Cold Drink-->	
							
							<div id="menu9" class="tab-pane fade">
							<h2><font color='brown'>Cold Drinks  </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<!-- <th>Photo</th> -->
							<th>Item</th>
							<th width="15%">Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>-->
							<td rowspan="1">Malt Drinks </td>
							<td>4 <input type="hidden" name="MaltDrinks_price" value="4"/></td>
							<td><input type="text" name="MaltDrinks_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MaltDrinks_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="1">2.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>-->
							<td rowspan="1"> 1 Liter Juice </td>
							<td>7.5 <input type="hidden" name="LargeJuice_price" value="7.5"/></td>
							<td><input type="text" name="LargeJuice_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="LargeJuice_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="1">3.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="1">Bottled Juices (Small)  </td>
							<td>3 <input type="hidden" name="Juices_price" value="3"/></td>
							<td><input type="text" name="Juices_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Juices_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-L 15   --> 
							<tr>
							<td rowspan="1">4.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-L 15.png" /></td>-->
							<td rowspan="1">Cade and Mountain Dew </td>
							<td>4 <input type="hidden" name="CadeMountainDew_price" value="4"/></td>
							<td><input type="text" name="CadeMountainDew_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="CadeMountainDew_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY  HONEYDEW RM5   --> 
							<tr>
							<td rowspan="1">5.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/HONEYDEW RM5.png" /></td>-->
							<td rowspan="1">Soft Drinks </td>
							<td>3 <input type="hidden" name="SoftDrinks_price" value="3"/></td>
							<td><input type="text" name="SoftDrinks_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="SoftDrinks_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							
							<!--BEGIN COPY  Cream Caramel RM 3.5   --> 
							
							<tr>
							<td rowspan="1">6.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/Cream Caramel RM 3.5.png" /></td>-->
							<td rowspan="1">Mineral Water (Small)  </td>
							<td>2 <input type="hidden" name="MineralWater_price" value="2"/></td>
							<td><input type="text" name="MineralWater_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="MineralWater_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY   -->
							
							</table>
							</div>
							
							
							<div id="menu10" class="tab-pane fade">
							<h2><font color='brown'>Special Restaurant Drinks  </font></h2>
							<table border="1" width="100%">
							<tr>
							<th>No</th>
							<!-- <th>Photo</th> -->
							<th>Item</th>
							<th width="15%">Price (RM)</th>
							<th>Quantity</th>
							<th>Total Price (RM)</th>
							</tr>
							<!--    BAKLAWA-S RM5.png  BEGIN COPY--> 
							<tr>
							<td rowspan="1">1.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-S RM5.png" /></td>-->
							<td rowspan="1">Arabic Coffee Shake </td>
							<td>8 <input type="hidden" name="ArabicCoffeeShake_price" value="8"/></td>
							<td><input type="text" name="ArabicCoffeeShake_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="ArabicCoffeeShake_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->
							
							<!--BEGIN COPY BAKLAWA-L RM 16 --> 
							<tr>
							<td rowspan="1">2.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BAKLAWA-L RM 16.png" /></td>-->
							<td rowspan="1">Tea Adani </td>
							<td>3.5 <input type="hidden" name="TeaAdani_price" value="3.5"/></td>
							<td><input type="text" name="TeaAdani_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="TeaAdani_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="1">3.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="1">Pre-Mixed Coffee  </td>
							<td>3.5 <input type="hidden" name="PreMixedCoffee_price" value="3.5"/></td>
							<td><input type="text" name="PreMixedCoffee_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="PreMixedCoffee_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							<!--BEGIN COPY  BASBOSA-S RM3  --> 
							<tr>
							<td rowspan="1">4.</td>
							<!-- <td rowspan="3"><img height="120px" src="images/desserts/BASBOSA-S RM3.png" /></td>-->
							<td rowspan="1">Vimto  </td>
							<td>4 <input type="hidden" name="Vimto_price" value="4"/></td>
							<td><input type="text" name="Vimto_qty" value="0" size="4" class="cur" pattern="[0-9]+" placeholder="0" onchange="getProductTotal(this)" 
							onclick="checkValue(this)" onblur="reCheckValue(this)"/></td>
							<td><input type="text" name="Vimto_tot" value="0" readonly="readonly" size="8" class="cur"/>
							</td>
							</tr>
							
							<!--END COPY-->	
							
							</table>
							
							
							<br/>
							</div>
							
							
							</div>
							<br/><br/><center>
							<table border="1">
							<tr>
							<td align="right" width="30%"><b>Total Price:</b>				</td>
							<td >
							RM <input type="text" name="total" value="0" readonly="readonly" size="8"  />
							<font color="red" ><b><i> Price is included 6% GST </i></b></font></td>
							</tr>
							</table>
							</div> <br/><br/></center><center>
							<table border="1">
							<tr>
							<td colspan="2" align="center"><b>Customer Information:</b>				</td>					
							</tr>
							<tr>
							<td width="40%" ><b>Name:</b>				</td>
							<td >
							<input type="text" name="name" value="" required size="40"  />
							</td>
							
							</tr>
							<tr>
							<td ><b>Phone No./ Wassap:</b>				</td>
							<td >
							<input type="text" name="phone" required value=""  size="40"  />
							</td>
							
							</tr>
							<tr>
							<td  ><b>Email:</b>				</td>
							<td >
							<input type="email" name="email" value="" placeholder="example: youremail@gmail.com"  size="40"  />
							</td>
							
							</tr>
							<tr>
							<td ><b>Remarks(Please tell us your preferences):<br/>
							1.Take-away<br/>
							2.Free Delivery <font color="red">(Coming Soon)</font><br/><!-- ("Bangi & Kajang area only. Other places please call us." Price must be more than RM100)-->
							3.Booking Table for Function (e.g Kahwin/Birthday Party n etc)<br/></b>				</td>
							<td>
							<textarea name="order_remarks" cols="42" rows="10" placeholder="example: take-away , booking, delivery, eating at resturant" ></textarea>
							</td>
							
							</tr>
							<tr>
							<td colspan="3" align="center" ><center> <input type="submit" class="button_blue" value="Confirm Order"  /></center></td>
							</tr>
							
							</table></center>
							</form>
							</center><br/><br/>
							<span class="clearfix"></span>
							
							<!--################################################-->
							<footer>
							<center>Copyright &copy; 2017 by <b>Hakikat Jati Resources Sdn. Bhd.</b>, all rights reserved 
							</center>
							</footer>		
							
							</body>
							</html>
							
							<script type="text/javascript">
							var PRODUCT_ABBRS = ["hanith_chickenR","hanith_chickenL","hanith_chickenF","hanith_LambL","hanith_LambR","hanith_LambF","Kabsa_chickenR","Kabsa_chickenL","Kabsa_chickenF","Kabsa_LambR","Kabsa_LambL","Kabsa_LambF","Magloba_ChickenR","Magloba_ChickenL","Magloba_ChickenF","Magloba_LambR","Magloba_LambL","Magloba_LambF","Lamb_MozaR","Lamb_MozaL","Lamb_MozaF","FishR","FishL","FishF","Chicken_Kabab","Family_Mix_Grill","Grill_ChickenH","Grill_ChickenF","Lamb_Kabab","Mix_Kabab","Mix_Grill","Mix_Tikka","Tikka_Chicken","Tikka_Lamb","Akda_Chicken","Akda_Lamb","Bamia","Bamia_with_Lamb","Bamia_with_Chicken","Butter_Chicken_Gravy","Butter_Lamb_Gravy","Chicken_Shawarma_Plate","Chicken_Soup","Fahsa","Fasolia","Fasolia_with_Lamb","Fasolia_with_Chicken","Kaju_Chicken_Gravy","Kaju_Lamb_Gravy","Lamb_Shawarma_Plate","Lamb_Soup","Mix_Veg","Mix_Veg_with_Lamb","Mix_Veg_with_Chicken","Arabic_Crisbe_Bread","Chicken_Shawarma","Lamb_Shawarma","Grill_ChickenF","Mulawah","Rateb","Tameez_BreadP","Tameez_BreadCG","Tameez_BreadS","Arabic_Salad_Fattoush","Arabic_Salad","Arabic_SaladY","Chili_BlenderS","Chili_BlenderL","Chili_BlenderF","Arabic_Zitown_Salad","FOUL","French_Fries","HumusR","HumusL","Humus_With_Lamb","Rice_Kabsa_HanithR","Rice_Kabsa_HanithL","Rice_Kabsa_HanithF","Rice_MaglobaR","Rice_MaglobaL","Rice_MaglobaF","SoupS","SoupL","SoupF","Timun_SaladS","Timun_SaladL","Timun_SaladF","Yogurt","BaklawaS","BaklawaL","BasbosaS","BasbosaL","Cheesecake","CreamCaramel","Labania","Mix","MANGO","MANGO_LASSE","MANGO_SHAKE","CARROT","HONEYDEW","ORANGE","LEMON","ORANGE_LEMON","LEMON_MINT","LEMON_GINGER","APPLE","PINEAPLE","WATERMELON","BANANA_MILKSHAKE","YOGURT_DRINK","COCKTAIL","TehTarik","Teh_Panas","TehO","Sirap","NescafeO","Nescafe","KopiO1","Kopi","TeaArab","TeaArabPS","TeaArabPL","TeaArabM","GreenTea","GreenTeaPS","GreenTeaPL","MiloO","Milo","Limau_Panas","Teh_Limau_Panas","TehIce","TehOIce","NescafeOIce","NescafeIce","SirapIce","SirapLimauIce","SirapBandung","KopiOIc","KopiIc3","GreenTeaIc","MiloOIc","MiloIc","LimauIc","TehOLimauIc","TeaArabMK","TeaArabPU","MaltDrinks","LargeJuice","Juices","CadeMountainDew","SoftDrinks","MineralWater","ArabicCoffeeShake","TeaAdani","PreMixedCoffee","Vimto","MangoJug","MANGO_LASSEJug","MANGO_SHAKEJug","CARROTJug","HONEYDEWJug","ORANGEJug","LEMONJug","ORANGE_LEMONJug","LEMON_MINTJug","LEMON_GINGERJug","APPLEJug","PINEAPLEJug","WATERMELONJug","BANANA_MILKSHAKEJug","YOGURT_DRINKJug","COCKTAILJug","TeaArabPUJug","TeaArabMKJug","TehOLimauIcJug","LimauIcJug","MiloIcJug","MiloOIcJug","GreenTeaIcJug","KopiIc3Jug","KopiOIcJug","SirapBandungJug","SirapLimauIceJug","SirapIceJug","NescafeIceJug","NescafeOIceJug","TehOIceJug","TehIceJug"];
							</script>
							<script type="text/javascript">
							,
							//var PRODUCT_ABBRS = ["Chicken_Kabab","Family_Mix_Grill","Grill_ChickenH","Grill_ChickenF","Lamb_Kabab","Mix_Kabab","Mix_Grill","Mix_Tikka","Tikka_Chicken","Tikka_Lamb"];
							</script>
							
							<!--BEGIN COPY**** -->	
							
							<!--END COPY**** -->	
							<script type="text/javascript">	
							// php order form
							// http://www.dyn-web.com/code/order_form/
							
							function checkSubmit(form) {
							if ( form.total.value === '0' ) {
							alert( 'You haven\'t order anything.' );
							return false;
							} else {
							return true;
							} 
							}
							
							function doTotals(form) {
							
							var total = 0;
							for (var i=0; PRODUCT_ABBRS[i]; i++) {
							var cur_field = form.elements[ PRODUCT_ABBRS[i] + "_qty" ]; 
							if ( !isPosInt(cur_field.value) ) {
							return;
							}
							total += parseFloat(cur_field.value) * parseFloat( form.elements[ PRODUCT_ABBRS[i] + "_price" ].value );
							}
							form.total.value = formatDecimal(total);
							}
							
							// onchange of qty field entry
							function getProductTotal(field) {
							var form = field.form;
							
							if (field.value === "") {
							field.value = 0;
							}
							
							if ( !isPosInt(field.value) ) {
							field.value = 0;
							} else {
							var product = field.name.slice(0, field.name.lastIndexOf("_") ); 
							var price = form.elements[product + "_price"].value;
							var amt = field.value * price;
							form.elements[product + "_tot"].value = formatDecimal(amt);
							doTotals(form);
							}
							}
							
							// onclick
							function checkValue(field) {
							if (field.value == 0) {
							field.value = "";
							}
							}
							
							// onblur
							function reCheckValue(field) {
							if (field.value == "") {
							field.value = 0;
							}
							}
							
							function isPosInt(val) {
							var re = /^\d+$/;
							if ( !re.test(val) ) {
							return false;
							}
							return true;
							}
							
							// format val to n number of decimal places
							// modified version of Danny Goodman's (JS Bible)
							function formatDecimal(val, n) {
							n = n || 2;
							var str = "" + Math.round ( parseFloat(val) * Math.pow(10, n) );
							
							while (str.length <= n) {
							str = "0" + str;
							}
							var pt = str.length - n;
							return str.slice(0,pt) + "." + str.slice(pt);
							}
							</script>	
														