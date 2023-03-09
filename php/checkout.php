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
$totalamo=$_SESSION["totalamo"];
$tax=$_SESSION["tax"];
$gtotal=$_SESSION["gtotal"];
$orderid=rand();



$sql = "INSERT INTO orderproduct(order_id,Email,model,finish,capacity,price) Select $orderid,Email,model,finish,capacity,price FROM usercart WHERE Email='$currentusermail'";
$getuserdata = $conn->query($sql);

$sql4 = "INSERT INTO orderproduct(order_id) VALUES ('$orderid')";
$getuserdata = $conn->query($sql4);



$sql2 = "INSERT INTO orderdetail (order_id, usermail, FullName,Email,Address,City,State, ZIP,Nameoncard, cardnumber, totalamount, tax, grandtotal)
	VALUES ('$orderid','$currentusermail','$_POST[fullname]','$_POST[mail]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[cardname]','$_POST[creditcardnumber]','$totalamo','$tax','$gtotal')";

if ($conn->query($sql2) === TRUE) 
{
	$sql3 = "Delete FROM usercart WHERE Email='$currentusermail'";
	$getuserdata = $conn->query($sql3);
    echo'
   <script> 
   		alert("Ordered successfully."); 
   		window.open("http://localhost:8080/AppleOnlineStore/home.html","_self");
    </script>
    ';
} 
else
{
	echo "ERROR: Could not able to proceed $sql_query. "
	        .$conn->error; 
}

$conn->close();
?>