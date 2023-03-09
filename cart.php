
<html>
<head>
	<title> Cart-Apple </title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@150&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@1,200&display=swap');
		body
		{
			margin: 0;
			

		}
		.hfra
		{
	
			font-family: 'Open Sans', sans-serif;
			color: black;
			font-size:20px;
			margin-left: 120px;
			margin-right: 120px;
	
		}


		.tas
		{
			font-family: 'Nunito Sans', sans-serif;
			color: #595858;
			font-size:15px;
	
		}
		.tal
		{
			font-family: 'Nunito Sans', sans-serif;
			color: black;
			font-size:18px;
	
		}
		.tf2
		{
			font-family: 'Nunito Sans', sans-serif;
			color: black;
			font-size:17px;
	
		}
		.dbut {
			
		  background-image:url("img/delete.png");
		  background-size: 20px 20px;
		  background-color: #ffffff;
		  border: #ffffff;
		  background-repeat: no-repeat;
		  border-radius: 20px;
		  cursor: pointer;
		  height:25;
		  width:25;
  
		}

		.cartbutton {
		  border: solid black;
		  background-color: black;
		  text-align: center;
		  font-family: 'Nunito Sans', sans-serif;
		  color: #FFFFFF;
		  font-size:15px;
		  width: 120px;
		  height:40px;
		  cursor: pointer;
  
		}
		.cartbutton:hover {
		 	border: solid #595858;
			background-color: #595858;
		}
		.carttable
		{
			 border-bottom: 1px solid #595858;
		}
		.carttablepro
		{
			 border-bottom: 1px solid #EBEBEB;
			 background:#FFFFFF;
		}
		th
		{
			 height: 100px;
		}
		
		</style>
		
	
</head>
	<iframe  src = topop.html scrolling ="no" height =8% width =100% style="border:0px;position: fixed;">
	</iframe>
	
	<?php
	session_start();

	$servername = "localhost";
	$username = "root";
	$password =  NULL;
	$dbname = "AppleUsers";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	} 

	$currentusermail=$_SESSION["username"];
	 $totalamo=0;
	
	$sql = "Select * FROM usercart WHERE Email='$currentusermail'";
	
	
			  echo
				  '
					<br><br><br><br><br>
			  		<div class="hfra">Cart<hr></div>';
	  			  
		
	$getuserdata = $conn->query($sql);
	if ($getuserdata->num_rows > 0) {
		
	  echo
		  '
		<center>
		<form method="post">
		<table class ="carttable"  width=50%>
			<tr>
				<th class ="carttablepro" colspan=3  align="center">
					<div class="tal"> Product </div>
				</th>
				<th class ="carttablepro" colspan=2 align="center">
					<div class="tal"> Price </div>
				</th>
			</tr>
						
		';
	  // output data of each row
	  while($row = $getuserdata->fetch_assoc()) 
	  {
		  $cartid=$row["cartid"];
		 $getmodel=$row["model"];
		  $getfinish=$row["finish"];
		   $getcapacity=$row["capacity"];
		    $getprice=$row["price"];
			  $getimg=$row["img"];
			  $totalamo=$totalamo+ $getprice;
			  $tax=$totalamo*(2/100);
			  $gtotal=$totalamo+$tax;
			  $_SESSION["totalamo"]=$totalamo;
			  $_SESSION["tax"]=$tax;
			   $_SESSION["gtotal"]=$gtotal;
			  
  echo
	  '
	
		<tr>
			<td align="center" class ="carttablepro"  width= 40px;>
				<div class="tas">';echo $cartid; echo'</div>
			</td>
			<td align="center" class ="carttablepro">
				<img src= ';echo $getimg; echo' width=150 height=180> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			</td>
			<td class ="carttablepro">
				<table align="center">
				<tr>
				<td>
					<table align="center">
					<tr>
						<td>
						<div class="tas"> Model </div>
						</td>
						<td>
							<div class="tf2">';echo $getmodel; echo'</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="tas"> Capacity &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </div>
						</td>
						<td>
							<div class="tf2">';echo $getcapacity; echo'</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="tas"> Color</div> 
						</td>
						<td>
							<div class="tf2">';echo $getfinish; echo'</div>
						</td>
					</tr>
					</table>
				</td>
				</tr>
				</table>
			</td>
			<td class ="carttablepro" align="right" width= 150px;>
				<div class="tf2">';echo number_format($getprice,2); echo'</div>
			</td>
		</tr>
		</td>
			';
			
			
	  }
	
	
    echo
  	  '
		
		</tr>
		<tr>
		<td><br><br></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<div class="tas"> Subtotal </div> 
			</td>
			<td align="right">
				<div class="tf2">';echo number_format($totalamo,2); echo'</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<div class="tas"> Tax(2%) </div> 
			</td>
			<td align="right">
				<div class="tf2">';echo number_format($tax,2); echo'</div>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td align="right">
				<div class="tas">Grandtotal</div> 
			</td>
			<td align="right">
				<div class="tf2">';echo number_format($gtotal,2); echo'</div>
			</td>
		</tr>
		</table>
		<table width=50%>
		<tr>
			<td><br><br><br><br><br></td>
			<td>
			</td>
			<td align="right">
				<input  class="cartbutton" name="clear" type="submit" value="Clear card">
				<input  class="cartbutton" name="Checkout" type="submit" value="Checkout">	
			</td>
		</tr>
		</td>
</table>
<br><br><br>
<iframe  src = bottom.html scrolling ="no" height =45% width =100% style="border:0px">
</iframe>
';


if(array_key_exists('clear', $_POST)) 
{
         $sql = "Delete FROM usercart WHERE Email='$currentusermail'";
	 	$getuserdata = $conn->query($sql);
	 echo'
	<script> 
			alert("Your Card was Empty."); 
			history.go(-2);
	 </script>
	 ';
			 
}
if(array_key_exists('Checkout', $_POST)) 
{
	 echo'
	<script> 
			window.open("checkout.html","_self");
	 </script>
	 ';
			 
}


} 
else{
 echo'
<script> 
		alert("Your Card was Empty."); 
		history.go(-1);
 </script>
 ';
}
	$conn->close();
	
?>

</html>