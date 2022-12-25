<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpaceX</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="Style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">


  <style>
    table {
      width: 65%;
      text-align: center;
      background:#273746;
    }

    th {
      height: 70px;
      text-align: center;
      border-bottom: 2px solid #ddd;
      background-color: #273746;
      color: white;
      font-size: 22px;
    }

    td {
      height: 50px;
      text-align: center;
      border-bottom: 2px solid #ddd;
      color: #FFFFFF;
      font-size: 22px;
    }

    td:hover {
      background-color: #566573;
    }
  </style>

</head>

<body>
  <div class="bg">

    <div class="background bac-about" style="background:url('./img/i9.jpg')">
      <img src="./img/logo.jpg" class="logo" style="object-fit: cover; width:250px; height:250px; opacity:0.7;">
    </div>



    <div class="navigation-bar">
      <ul class="nav-ul">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="story.html">Story</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>


    <div class="containerSD" style="background:url('./img/back6.jpg'); background-position: top; background-repeat: no-repeat; background-size: cover; height:100%; width:100%;">

      <div class="content">

        <h2>SCOREBOARD</h2>

        <br>
        <br>

        <center>
          <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "registration";

          // Create connection
          $db = mysqli_connect("localhost", "root", "", "registration");
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
            while ($row = $result->fetch_assoc()) {
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
      </div>
    </div>

    </center>

    <div class="footer">

      <img src="./img/f-logo.jpg" alt="Smiley face" width="200" height="200" style="float:right;margin:50px 70px">

      <div class="line-spacing1"></div>

      <div class="text-align-footer">
      <h3>Created by :- Ayanka Bandara</h3>
     <h4>Email :- ayankanalin95@gmail.com</h4>
      </div>
    </div>
  </div>

</body>