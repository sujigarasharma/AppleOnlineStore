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
$model = $_POST["model"];



$sql = "Select * FROM usercart WHERE Email='$currentusermail'";
$getuserdata = $conn->query($sql);
if ($getuserdata->num_rows > 0)
{
 	$cartid=1;
  	while($row = $getuserdata->fetch_assoc()) 
  	{
	 	 $cartid=$cartid+1;
  	}
}
else
{
	 $cartid=1;
}

	
if($model=="AirPods Pro")
{
	$capacity = "-";
	$finish ="White";
	$price="24000.00";
	$img="gimg/airpodpro.png";
	
}
if($model=="AirPods Max")
{
	$capacity = "-";
	$finish ="White";
	$price="59900.00";
	$img="gimg/airpodmax.png";
	
}
if($model=="AirPods")
{
	$capacity = "-";
	$finish ="White";
	$price="14900.00";
	$img="gimg/airpod.png";
	
}
if($model=="HomePod mini White")
{
	$capacity = "-";
	$finish ="White";
	$price="9900.00";
	$img="gimg/homepodwh.png";
}
if($model=="AirTag")
{
	$capacity = "-";
	$finish ="White";
	$price="3190.00";
	$img="gimg/airtag.png";
}
if($model=="HomePod mini")
{
	$capacity = "-";
	$finish ="Space Grey";
	$price="9900.00";
	$img="gimg/homepodbl.png";
}
if($model=="Apple Pencil")
{
	$capacity = "-";
	$finish ="White";
	$price="10900.00";
	$img="gimg/pencil.png";
}
if($model=="Magic Keyboard for iPad Pro")
{
	$capacity = "-";
	$finish ="White";
	$price="31900.00";
	$img="gimg/magickey.png";
}
if($model=="MagSafe Charger")
{
	$capacity = "-";
	$finish ="White";
	$price="4500.00";
	$img="gimg/MagSafe.png";
}
if($model=="Magic Mouse")
{
	$capacity = "-";
	$finish ="White";
	$price="7500.00";
	$img="gimg/mouse.jpg";
}
if($model=="Pro Display XDR")
{
	$capacity = "-";
	$finish ="White";
	$price="449900.00";
	$img="gimg/dis.png";
}
if($model=="Magic Keyboard")
{
	$capacity = "-";
	$finish ="White";
	$price="14500.00";
	$img="gimg/key.png";
}




$sql = "INSERT INTO usercart (cartid,Email, model, finish,capacity,price,img)
	VALUES ('$cartid','$currentusermail','$model','$finish','$capacity','$price','$img')";


if ($conn->query($sql) === TRUE) 
{
	echo'
	<script>
	
	  if (confirm("Successfully added to cart")) 
	  {
		 
		 history.go(-1);
	   
	  } 
	  else 
	  {
		  history.go(-1);
	  }
	
	</script>';
} 


$conn->close();
?>