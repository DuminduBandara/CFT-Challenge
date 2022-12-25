<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hunter</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

  <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">


  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!--<link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="Style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
  <!-- <link rel="stylesheet" href="main.css"> -->
</head>

<body>
  <div class="bg">


    <div class="background bac-about">
      <img src="./img/logo.jpg" class="logo" style="object-fit: cover; width:250px; height:250px;">
    </div>



    <div class="navigation-bar">
      <ul class="nav-ul">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="story.html">Story</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>


    <div class="sec about-sec" style="background:url('./img/back4.jpg');">
      <div class="content">

        <h2>REGISTER</h2>

        <div class="row  hackerFont" style="width:700px; height:200px; position:relative; margin:0 auto;">
          <div class="col-md-6" style="width:100%; display:grid;">
            <div class="form-group" style="margin-bottom:30px;">
              <input type="text" class="form-control" id="first_name" placeholder="First Name" style="width:100%; padding:20px;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="last_name" placeholder="Last Name" style="width:100%; padding:20px;">
            </div>
            <div class="row">
              <div class="col-xl-12">
                <button id="submit_p1" class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="saveData()">
                  <h4>Register</h4>
                </button>
                <small id="registerHelp"  style="color:#ffffff; font-size:20px; background:#273746; padding:5px;">Already Registered? <a href="loginpage.php"  style="color:#58D68D;">Login here</a></small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>



    <script>
      function saveData() {
        var first_name = document.getElementById('first_name').value;
        var last_name = document.getElementById('last_name').value;

        //alert(first_name+" -> " + last_name);
        if (first_name === '' || last_name === '') {
          alert('Please enter Value');
        } else {
          $.ajax({
            url: "signup.php",
            type: "POST",
            dataType: "Text",
            data: {
              "first": first_name,
              "last": last_name
            },
            success: function(data) {
              if (data === 'statusCode 200') {
                $.ajax({
                  url: "getregistrationdata.php",
                  type: "POST",
                  dataType: "Text",
                  data: {
                    "first": first_name,
                    "last": last_name
                  },
                  success: function(response) {
                    if (response.includes('User Name :')) {
                      alert(response);
                      window.location.replace("http://localhost:8012/TheHunter/loginpage.php");
                    } else {
                      alert(response);
                    }
                  }
                });
              } else {
                alert(data);
              }
            }

          });
        }
      }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->


    <div class="footer">

      <img src="./img/f-logo.jpg" alt="Smiley face" width="200" height="200" style="float:right;margin:50px 70px">

      <div class="line-spacing1"></div>

      <div class="text-align-footer">
      <h3>Created by :- Ayanka Bandara</h3>
     <h4>Email :- ayankanalin95@gmail.com</h4>
      </div>
    </div>


</body>

</html>