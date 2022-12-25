<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hunter</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <link rel="stylesheet" href="Style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Chango" rel="stylesheet">
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

        <h2>LOGIN </h2>

        <div class="jumbotron bg-transparent mb-0 pt-3 radius-0" style="width:700px; height:200px; position:relative; margin:0 auto;">

          <div class="row" style="width:700px; height:200px; position:relative; margin:0 auto;">
            <div class="col-xl-8" style="width:100%;">

              <p class="text-grey text-spacey hackerFont lead mb-5">
                Enter your credentials, To go to Battle....
              </p>
              <div class="row hackerFont" style="width:100%;">
                <div class="col-md-6" style="width:100%; display:grid;">
                  <div class="form-group" style="margin-bottom:30px;">
                    <input type="text" class="form-control" id="team_name" placeholder="Username" style="width:100%; padding:20px;">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="password" placeholder="Password" style="width:100%; padding:20px;">
                    <small id="passHelp" class="form-text text-muted">Let sure that there is no one behind you</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <button class="btn btn-outline-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left typewriter" onclick="getLogingDetails()">
                <h4>Login</h4>
              </button>
              <small id="registerHelp" style="color:#ffffff; font-size:20px; background:#273746; padding:5px;">Not Registered? <a href="newregister.php" style="color:#58D68D;">Register here</a></small>
            </div>
          </div>
        </div>

        <script>
          function getLogingDetails() {
            var username = document.getElementById('team_name').value;
            var password = document.getElementById('password').value;
            alert(username);
            //alert(first_name+" -> " + last_name);
            if (username === '' || password === '') {
              alert('Please enter Values.');
            } else {
              $.ajax({
                url: "logingdata.php",
                type: "POST",
                dataType: "Text",
                data: {
                  "username": username,
                  "password": password
                },
                success: function(data) {
                  console.log(data)
                  if (data === 'Success') {
                    window.location.replace('http://localhost:8012/TheHunter/Level01.php?' + username);
                  } else {
                    alert(data);
                  }
                }

              });
            }
          }
        </script>

      </div>

    </div>

    <div class="footer">

       <img src="./img/f-logo.jpg" alt="Smiley face" width="200" height="200" style="float:right;margin:50px 70px">

      <div class="line-spacing1"></div>

      <div class="text-align-footer">
      <h3>Created by :- Ayanka Bandara</h3>
     <h4>Email :- ayankanalin95@gmail.com</h4>
      </div>
 </div>

</body>