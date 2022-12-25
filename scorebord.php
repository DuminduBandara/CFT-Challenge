
<!DOCTYPE html>

<html>
<head>
  <title>~Scoreboard~</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Goggle Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>

  <!-- Font Css -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Animation Css -->
  <link rel="stylesheet" href="css/animate.css">
<style>

table {
  width: 65%;
  text-align:center;
  opacity: 0.8;
}

th {
  height: 70px;
  text-align:center;
  border-bottom: 2px solid #ddd;
  background-color: #794D25 ;
  color: white;
  font-size: 22px;
}

td {
  height: 50px;
  text-align:center;
  border-bottom: 2px solid #ddd;
  background-color: #94785F;
  color: black;
  font-size: 22px;
}

td:hover {background-color: #f5f5f5;}

</style>

</head>


<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$db=mysqli_connect("localhost","root","","registration");
// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM marks";
$result = $db->query($sql);

echo "<table border='2'>
<tr>
<td align=center> <b>User Name</b></td>
<td align=center><b>Current Level</b></td>
<td align=center><b>Current Marks</b></td> </tr>";



if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td align=center>$row[user]</td>";
    echo "<td align=center>$row[question]</td>";
    echo "<td align=center>$row[marks]</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$db->close();
?>

</body>
</html>