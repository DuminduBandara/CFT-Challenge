<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <style>
  
  @import "http://fonts.googleapis.com/css?family=Raleway";
   @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400&display=swap');
   body{
    background:url("./img/back5.jpg") no-repeat center fixed; 
    background-size: cover;
}
  .inside{
  display:;
  position: absolute;
  top: 50px;
  bottom: 50px;
  left: 0;
  right: 0;
  margin-top: auto; 
  margin-left: auto;
  width: 620px;
  height: 250px;
  margin: auto;
  background-color: rgba(0,0,0,0.5);
  padding: 40px;
  margin:auto;
  opacity: 1;
  /* border-radius:80px 0 80px 0; */
}

.float{
  background-color:#2C3E50;
  border-radius:50px;
  border:none;
  padding:10px 25px;
  color:#FFF;
  font-family:'Poppins-Bold',sans-serif;
  text-shadow:1px 1px 1px #949494;
  margin-left:275px;
  margin-right:-25px;
  margin:20px 65px 25px 100px;
}


.float1{
  background-color:#2C3E50;
  border-radius:50px;
  border:none;
  padding:10px 25px;
  color:#FFF;
  font-family:'Poppins-Bold',sans-serif;
  text-shadow:1px 1px 1px #949494;
  margin-left:275px;
  margin-right:-25px;
  margin:20px 65px 25px 100px;
}
.contact{
  background-position:6px;
  border:1px solid #FFF;
  margin:20px 65px 25px -210px;
  padding-left:5px;
  width:315px;
  height:30px;
  font-size:14px;
  color: rgba(0,0,0,0.5);
  font-family: 'Helvetica', FontAwesome, sans-serif;
  margin:20px 65px 25px 100px;
  
}
.float:hover{
  background-color:#fff;
  color:#000;
}

input.float1:hover{
  background-color:#fff;
  color:#000;
}
/*my work*/
.container{
  position: relative;
   
  opacity: 1;
  color:#F2FE03;
  width: 270px;
  padding: 0px;
  text-align: center;
font-family: sans-serif;
  border-width: 2px;
  background-color: #273746;
  border-radius:500px;
}

.right {
  
  transform-style: preserve-3d;
  float: left;
  margin-left: 120px;
  transform: translateY(-50%) translateX(-30%);
}


html, body{
 
  font-family: 'Oswald', sans-serif;
  color: #CCC;
  text-shadow: 1px 1px 5px black;
 
}
.center {
  
  transform-style: preserve-3d;
  float: right;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
}

#score {
  transform-style:preserve-3d;
  font-size:40px;
  line-height: 80px;
  position: relative;
  font-family:sans-serif;
}
#tag {
  transform-style: preserve-3d;
  display: none;
  position:relative;
  top: -55px;
  left:50%;
  transform: translateX(-50%);
  font-size:30px;
  line-height: 50px;
}
#title1{
  transform-style: preserve-3d;
  position:relative;

  left:50%;
  transform: translateX(-50%);
  font-size:30px;
  line-height: 50px;
}

#circleBar{
        margin-top: 180px;
        text-align: center;
        font-family: tahoma;
        

    }
    #cicleBar .round{
        min-height: 255px;
        margin-top: 30px;
        position: relative;
        margin-bottom: 20px;
        

    }
    .round{
        position: fixed;
        bottom: 0;
        right: 0;
        margin-right: 50px;
    }

    #circleBar .round strong{
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -50px;
        transform: translate(-50%);
        font-size: 40px;
        color: #212121;
        font-weight: 100;

    }

    #circleBar span{
        display: block;
        color: #999;
        font-size: 17px;
        margin-top: 10px;

    }

    #circleBar span i{
        color: ff5c5c;
        font-size: 22px;
        margin-right: 7px;

    }

    section button: hover{
        background-color: #ff5c5c;

    }
</style>

</head>

<body onload="go(760);">
<!-- url blocker -->
 <?php 
  session_start();
  if(isset($_SESSION["LEVEL"])){
     if(($_SESSION["LEVEL"] == 9) && ( $_SESSION["MARKS"] == 900)){
       $_SESSION["LEVEL"] = 10;
     }
     else if($_SESSION["LEVEL"] ==10){
     
     }
     else{
       header("location: Level09.php");
     }
  }
  else{
    header("location: Level09.php");
  }
?>  


  
<!-- Flag checker -->
<?php
  if(isset($_POST['submit'])){
    $flag = "TheHunter{FANTASY}";

   
    $db=mysqli_connect("localhost","root","","registration");

    $flag_entered = $_POST['pswd'];
    $userName = $_SESSION['username'];

    if($flag == $flag_entered){

      $sql = "UPDATE marks set question=11, marks=880 WHERE user='$userName'";
                
      if ($db->query($sql)) {
          echo "OK";
      } else {
          echo "Error";
      }

      $_SESSION["MARKS"] = 1000;
      session_write_close();

      header("location: s10.php");
    }
    else{
?>
      <script>
        alert('The flag is incorrect');
      </script>
<?php

  }  
  }
?>
<div class="login">
  <div class="heading">
    <br>
    <br>
    <br>
    <center><h1 style="font-family:Times New Roman, Times, seri; font-weight: 900; color: #FFFFFF">LEVEL 10 </h1></center>
    <div class="inside">


      <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" >
        <div class="input">
          
          <input type="name" class="contact" name="pswd" placeholder="Enter the Flag to go to next level">
        </div>

        <button type="submit" name="submit"  class="float">Submit</button>


         <!-- <input type"button" class="float1" value="Show Scores!" onClick="go(100);"> -->


         <center><h4 style="font-family:Times New Roman, Times, seri; font-weight: 900; font-size: 20px; color: #DAF7A6">Hint :- Go to this <a href="Level10.1.php" style="color: #E51010">page</a> :) </h4></center>

       </form>
 		</div>
  </div>
 </div>

 <div class="right">
<!-- partial:index.partial.html -->

      <div class="container" >
       <div id="title1">
         SCORE:
         <br>
         <br>
         </div> 
        <div id="tag">
          +180
        </div> 
      <div id="score">
        000
      </div>
      </div>
      
  </div>
  <section id="circleBar">
      <div class="container1">
        <div class="row justify-content-end">
          <div class="col-md-3">
            <!--add values here to differ the precentage(use decimal)-->
              <div class="round" data-value="0.63" data-size="200" data-thickness="12">
                <strong class="text-white"></strong>
              </div>
              <br>
              
          </div>
        </div>
      </div>
  </section>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js">
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.0/circle-progress.js"></script>

<script>
    function Circlle(el)
    {
        $(el).circleProgress({fill: {color:'#F2FE03'}})
        .on('circle-animation-progress', function(event, progress, strpValue)
            {
                $(this).find('strong').text(String(strpValue.toFixed(2)).substr(2)+'%');
            });
    };

    Circlle('.round');
</script>

<script type="text/javascript">
 score = 0;

function go(x){
  $({score: 0}).animate({score: x},{
    duration: 1000,
    easing:"linear",
    step: function(now, fx){
      $("#score").html(score + Math.floor(now));
    },
    queue:false,
    complete: function(now, fx){
      score += 0;
    }
  });
  $("#tag").fadeIn({
    duration:700,
    easing:"linear",
    step:function(now, fx){
      $(this).css("top", -55 * now  +"px");
    }
  }).fadeOut({
    duration:300,
    step:function(now, fx){
      $(this).css("top",-55 * ( 2 - now) + "px");
    }
  });

}
</script>

</body>
</html>
