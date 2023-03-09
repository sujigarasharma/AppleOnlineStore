<?php

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
 
    $orgDate = $_POST["dob"];  
    $newDate = date("Y-m-d", strtotime($orgDate));  
   

$sql = "INSERT INTO userinfo (FirstName, LastName, EMail,Contactnumber,Gender,DateOfBirth,Password)
	VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[mail]','$_POST[phone]','$_POST[gender]','$newDate','$_POST[userpassword]')";


if ($conn->query($sql) === TRUE) 
{
	echo'
	<script>
	
	  if (confirm("User created successfully")) 
	  {
		  history.go(-2);
	   
	  } 
	  else 
	  {
	     history.go(-2);
	  }
	
	</script>';
} 
else 
{
	echo'
	<script>
	
	  if (confirm("UserName Already Exits.")) 
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