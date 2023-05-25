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
 
    $username = $_POST["username"];  
    $userpassword = $_POST["userpassword"];  
	$getusername = "NULL";
	$getuserpassword = "NULL";
   
	$sql = "Select EMail,Password from userinfo WHERE EMail =  '$username'";
	$getuserdata = $conn->query($sql);
	if ($getuserdata->num_rows > 0) {
	  // output data of each row
	  while($row = $getuserdata->fetch_assoc()) 
	  {
		 $getusername=$row["EMail"];
		 $getuserpassword=$row["Password"];
	  }
	} 
	else {
		echo'
		<script>
	
		  if (confirm("Invalid user")) 
		  {
			    history.go(-1);
	   
		  } 
		  else 
		  {
		     history.go(-1);
		  }
	
		</script>';
	 
	}
	
	if($getusername==$username && $getuserpassword==$userpassword)
	{
		
		header("Location: home.html ");
		$_SESSION["username"]=$username;

	}
	else
	{
		echo'
		<script>
	
		  if (confirm("Invalid UserLogin")) 
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