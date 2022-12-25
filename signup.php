<?php

$first=$_POST['first']; 
$last=$_POST['last'];

$conn=mysqli_connect("localhost","root","","registration");

$rows=$conn->query("SELECT * FROM `register` WHERE `last_name`='$last' AND `first_name`='$first' ");

if(list($firstname)=$rows->fetch_row()){
  echo "Given First Name and Last Name already exist. Please try with differnet details.";
  
}else{
	//$conn=mysqli_connect("localhost","root","","registration");

$sql = "update `register` set `last_name`='$last',`first_name`='$first' WHERE `last_name`='' AND `first_name`=''  LIMIT 1";

//echo $sql;
	
	if (mysqli_query($conn, $sql)) {	
		echo "statusCode 200";
	}else {
		echo "Please contact Website admin";
	}
}
?>