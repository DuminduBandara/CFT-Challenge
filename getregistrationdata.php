<?php

$first=$_POST['first']; 
$last=$_POST['last'];

$conn=mysqli_connect("localhost","root","","registration");

$rows=$conn->query("SELECT * FROM `register` WHERE `last_name`='$last' AND `first_name`='$first' ");

if(list($firstname,$lastname,$username, $password)=$rows->fetch_row()){ 
  echo nl2br('User Name : '.$username. '    Password : '.$password.' ');
  
}else{
	echo "Please contact Website admin";
}
?>