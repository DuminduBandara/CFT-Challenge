<?php

$username=$_POST['username']; 
$question=$_POST['question'];
$mark=$_POST['mark'];


$conn=mysqli_connect("localhost","root","","flag");

$sql = "SELECT * FROM `marks` WHERE `user`='$username'"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$sql = "update `marks` set `question`='$question',`marks`='$mark' WHERE `user`='$username' ";
	if (mysqli_query($conn, $sql)) {	
		echo "statusCode 200";
	}else {
		echo "Please contact Website admin";
	}
}else{
	$sql = "INSERT INTO `marks` (`user`, `question`,`marks`) VALUES ('$username', '$question','$mark')";
	if ($conn->query($sql) === TRUE) {
		echo "statusCode 200";
	} else {
		echo "Please contact Website admin";
	}
}
?>