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
$finish = $_POST["selectcolor"];
$capacity = $_POST["selectcap"];

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

	
if($model=="iPhone12mini")
{
	if($capacity=="64gb")
	{
		$price="69000.00";
	}
	else if($capacity=="128gb")
	{
		$price="79000.00";
	}
	else if($capacity=="256gb")
	{
		$price="89000.00";
	}
	if($finish=="White")
	{
		$img="gimg/ip12w.png";
	}
	else if($finish=="Black")
	{
		$img="gimg/ip12b.png";
	}
	else if($finish=="Blue")
	{
		$img="gimg/ip12bl.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/ip12g.png";
	}
	else if($finish=="Purple")
	{
		$img="gimg/ip12p.png";
	}
	else if($finish=="Red")
	{
		$img="gimg/ip12r.png";
	}
}
else if($model=="iPhone12")
{
	if($capacity=="64gb")
	{
		$price="79000.00";
	}
	else if($capacity=="128gb")
	{
		$price="89000.00";
	}
	else if($capacity=="256gb")
	{
		$price="99000.00";
	}
	if($finish=="White")
	{
		$img="gimg/ip12w.png";
	}
	else if($finish=="Black")
	{
		$img="gimg/ip12b.png";
	}
	else if($finish=="Blue")
	{
		$img="gimg/ip12bl.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/ip12g.png";
	}
	else if($finish=="Purple")
	{
		$img="gimg/ip12p.png";
	}
	else if($finish=="Red")
	{
		$img="gimg/ip12r.png";
	}
}
if($model=="iPhone12pro")
{
	if($capacity=="64gb")
	{
		$price="119000.00";
	}
	else if($capacity=="128gb")
	{
		$price="129000.00";
	}
	else if($capacity=="256gb")
	{
		$price="139000.00";
	}
	if($finish=="Graphite")
	{
		$img="gimg/ip12pg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/ip12ps.png";
	}
	else if($finish=="Gold")
	{
		$img="gimg/ip12pgo.png";
	}
	else if($finish=="Pacific Blue")
	{
		$img="gimg/ip12pb.png";
	}

}
else if($model=="iPhone12Pro Max")
{
	if($capacity=="64gb")
	{
		$price="129000.00";
	}
	else if($capacity=="128gb")
	{
		$price="139000.00";
	}
	else if($capacity=="256gb")
	{
		$price="149000.00";
	}
	if($finish=="Graphite")
	{
		$img="gimg/ip12pg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/ip12ps.png";
	}
	else if($finish=="Gold")
	{
		$img="gimg/ip12pgo.png";
	}
	else if($finish=="Pacific Blue")
	{
		$img="gimg/ip12pb.png";
	}

}

if($model=="iPhone11")
{
	if($capacity=="64gb")
	{
		$price="54000.00";
	}
	else if($capacity=="128gb")
	{
		$price="64000.00";
	}
	else if($capacity=="256gb")
	{
		$price="74000.00";
	}
	if($finish=="White")
	{
		$img="gimg/ip11wh.png";
	}
	else if($finish=="Black")
	{
		$img="gimg/ip11bl.png";
	}
	else if($finish=="Yellow")
	{
		$img="gimg/ip11ye.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/ip11gr.png";
	}
	else if($finish=="Purple")
	{
		$img="gimg/ip11pu.png";
	}
	else if($finish=="Red")
	{
		$img="gimg/ip11re.png";
	}
}
if($model=="iPhone SE")
{
	if($capacity=="64gb")
	{
		$price="39000.00";
	}
	else if($capacity=="128gb")
	{
		$price="49000.00";
	}
	else if($capacity=="256gb")
	{
		$price="59000.00";
	}
	if($finish=="White")
	{
		$img="gimg/ipsewh.png";
	}
	else if($finish=="Black")
	{
		$img="gimg/ipsebl.png";
	}
	else if($finish=="Red")
	{
		$img="gimg/ipsere.png";
	}
}

if($model=="MacBook Air")
{
	if($capacity=="256gb")
	{
		$price="92900.00";
	}
	else if($capacity=="512gb")
	{
		$price="112900.00";
	}
	else if($capacity=="1tb")
	{
		$price="132900.00";
	}
	if($finish=="SpaceGray")
	{
		$img="gimg/mbasg13l.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/mba13sill.png";
	}

}
else if($model=="MacBook Pro 13")
{
	if($capacity=="256gb")
	{
		$price="129900.00";
	}
	else if($capacity=="512gb")
	{
		$price="149900.00";
	}
	else if($capacity=="1tb")
	{
		$price="169900.00";
	}
	if($finish=="SpaceGray")
	{
		$img="gimg/mbp13sgl.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/mbp13sill.png";
	}

}
else if($model=="MacBook Pro 16")
{
	if($capacity=="256gb")
	{
		$price="174900.00";
	}
	else if($capacity=="512gb")
	{
		$price="194900.00";
	}
	else if($capacity=="1tb")
	{
		$price="214900.00";
	}
	if($finish=="SpaceGray")
	{
		$img="gimg/mbp16sgl.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/mbp16sill.png";
	}

}

if($model=="iMac 24 7-Core")
{
	if($capacity=="256gb")
	{
		$price="119900.00";
	}
	else if($capacity=="512gb")
	{
		$price="139900.00";
	}
	else if($capacity=="1tb")
	{
		$price="159900.00";
	}
	if($finish=="Blue")
	{
		$img="gimg/im24blul.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/im24grel.png";
	}
	else if($finish=="Orange")
	{
		$img="gimg/im24oral.png";
	}
	else if($finish=="Pink")
	{
		$img="gimg/im24pinl.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/im24sill.png";
	}
	else if($finish=="Yellow")
	{
		$img="gimg/im24yell.png";
	}

}
else if($model=="iMac 24 8-Core")
{
	if($capacity=="256gb")
	{
		$price="139900.00";
	}
	else if($capacity=="512gb")
	{
		$price="159900.00";
	}
	else if($capacity=="1tb")
	{
		$price="169900.00";
	}
	if($finish=="Blue")
	{
		$img="gimg/im24blul.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/im24grel.png";
	}
	else if($finish=="Orange")
	{
		$img="gimg/im24oral.png";
	}
	else if($finish=="Pink")
	{
		$img="gimg/im24pinl.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/im24sill.png";
	}
	else if($finish=="Yellow")
	{
		$img="gimg/im24yell.png";
	}

}

if($model=="iMac 21.5")
{
	if($capacity=="256gb")
	{
		$price="99900.00";
	}
	else if($capacity=="512gb")
	{
		$price="119900.00";
	}
	else if($capacity=="1tb")
	{
		$price="139900.00";
	}
	if($finish=="Silver")
	{
		$img="gimg/im21l.png";
	}

}
else if($model=="iMac 27")
{
	if($capacity=="256gb")
	{
		$price="169900.00";
	}
	else if($capacity=="512gb")
	{
		$price="189900.00";
	}
	else if($capacity=="1tb")
	{
		$price="199900.00";
	}
	if($finish=="Silver")
	{
		$img="gimg/im27l.png";
	}

}

if($model=="Mac Pro")
{
	if($capacity=="256gb")
	{
		$price="499900.00";
	}
	else if($capacity=="512gb")
	{
		$price="519900.00";
	}
	else if($capacity=="1tb")
	{
		$price="539900.00";
	}
	if($finish=="Silver")
	{
		$img="gimg/mpl.png";
	}

}
else if($model=="Mac Mini")
{
	if($capacity=="256gb")
	{
		$price="64900.00";
	}
	else if($capacity=="512gb")
	{
		$price="84900.00";
	}
	else if($capacity=="1tb")
	{
		$price="99900.00";
	}
	if($finish=="Silver")
	{
		$img="gimg/mml.png";
	}

}

if($model=="iPad Air")
{
	if($capacity=="64gb")
	{
		$price="54900.00";
	}
	else if($capacity=="128gb")
	{
		$price="64900.00";
	}
	else if($capacity=="256gb")
	{
		$price="74900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/ipasg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/ipasil.png";
	}
	else if($finish=="Rose Gold")
	{
		$img="gimg/iparg.png";
	}
	else if($finish=="Green")
	{
		$img="gimg/ipagre.png";
	}
	else if($finish=="Sky Blue")
	{
		$img="gimg/ipabl.png";
	}

}

if($model=="iPad Pro")
{
	if($capacity=="64gb")
	{
		$price="71900.00";
	}
	else if($capacity=="128gb")
	{
		$price="81900.00";
	}
	else if($capacity=="256gb")
	{
		$price="91900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/ippsg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/ippsil.png";
	}

}
else if($model=="iPad")
{
	if($capacity=="64gb")
	{
		$price="29900.00";
	}
	else if($capacity=="128gb")
	{
		$price="39900.00";
	}
	else if($capacity=="256gb")
	{
		$price="49900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/ipsg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/ipsil.png";
	}

}

if($model=="Apple Watch Series 6")
{
	if($capacity=="44mm")
	{
		$price="44900.00";
	}
	else if($capacity=="42mm")
	{
		$price="42900.00";
	}
	else if($capacity=="40mm")
	{
		$price="40900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/aws6sg.png";
	
	}
	else if($finish=="Silver")
	{
		$img="gimg/aws6sil.png";
	}

}

else if($model=="Apple Watch SE")
{
	if($capacity=="44mm")
	{
		$price="31900.00";
	}
	else if($capacity=="42mm")
	{
		$price="30900.00";
	}
	else if($capacity=="40mm")
	{
		$price="29900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/awsesg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/awsesil.png";
	}

}

else if($model=="Apple Watch Series 3")
{
	if($capacity=="44mm")
	{
		$price="23900.00";
	}
	else if($capacity=="42mm")
	{
		$price="22900.00";
	}
	else if($capacity=="40mm")
	{
		$price="20900.00";
	}
	if($finish=="Space Gray")
	{
		$img="gimg/aws3sg.png";
	}
	else if($finish=="Silver")
	{
		$img="gimg/aws3sil.png";
	}

}

$sql = "INSERT INTO usercart (cartid,Email, model, finish,capacity,price,img)
	VALUES ('$cartid','$currentusermail','$model','$finish','$capacity','$price','$img')";


if ($conn->query($sql) === TRUE) 
{
	echo'
	<script>
	
	  if (confirm("Successfully added to cart")) 
	  {
		 
		 history.go(-2);
	   
	  } 
	  else 
	  {
		  history.go(-2);
	  }
	
	</script>';
} 


$conn->close();
?>