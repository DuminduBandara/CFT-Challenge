<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hunter</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    header{
      background:#000;
      width: 100%;
      height:75px;
      
    }

    h1{
      color:#fff;
      text-align: center;
      line-height:2;
      font-size:40px;
    }
    
    .l-content{
      width: 100%;
      padding:40px;
      background:#D5D8DC;
    }

    .l-content h2{
      text-align: center;
      font-size:30px;
    }

    .l-list{
      list-style:upper-alpha;
      padding:20px 100px;
    }

    .l-list li{
      font-size:22px;
      letter-spacing:1.5px;
    }

    .list-01 li span{
      font-weight:1000;
    }

    .l-para{
      font-size:23px;
      text-align: center;
      line-height: 3;
      color: #0B2950;
      font-weight: 1000;
    }

    .hint{
      text-align: center;
      line-height:4;
      font-size:22px;
      letter-spacing:2px;
    }

    .hint-img{
      width:600px;
      display: flex;
      justify-content: center;
    }

  </style>
</head>
<body>
  <header>
    <h1>The Hunter</h1>
  </header>
  <div class="l-content">
    <h2>Level 02</h2>
    <div class="hint-img" style="width: 100%; align-items:center;" >
      <img src="./img/level02-hint.jpg" alt="hint image" class="h-img" width="70%">
    </div>
    <p class="l-para">Go to the previous page to submit the answer to get the flag</p>
    <h3 class="hint">Hint: <span style="color:red;">TheHunter{ANSWER}</span></h3>
  </div>
</body>
</html>