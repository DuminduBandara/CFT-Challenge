<?php

$username=$_POST['username']; 
$password=$_POST['password'];

$db=mysqli_connect("localhost","root","","registration");

//$rows=$conn->query("SELECT * FROM `register` WHERE `username`='$username' AND `password`='$password' ");
$sql = "SELECT * FROM register WHERE username=?;";
$stmt = mysqli_stmt_init($db);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'sqlError';
} else {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
    	if($password = $row['password']) {
            session_start();
            $_SESSION['username'] = $row['username'];
            echo 'Success';
        } else {
            echo 'wrongPwd';
        }
    } else {
        echo 'noUser';
    }
}


//  if(list($firstname)=$rows->fetch_row()){
//    echo 'Success';
  
// }else{
// 	echo "Please try with valid credintials";
// }
?>