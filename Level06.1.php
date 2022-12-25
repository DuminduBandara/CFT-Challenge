
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
      letter-spacing:1px;
      padding:3px 0;
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

    .hint-images{
      width: 70%;
      display:grid;
      grid-gap:1rem;
      align-items: center;
      justify-content: center;
      margin:0 auto;
    }
    .hint-images img{
      width:100%;
    }

  </style>
</head>
<body>
  <header>
    <h1>The Hunter</h1>
  </header>
  <div class="l-content">
    <h2>Level 06</h2>
    <img src="./img/l6-hint.jpg" alt="Puzzel" width="400" height="550" style="margin-left:35%;">
    <p class="l-para">Go to the previous page to submit the answer to get the flag</p>
    <h3 class="hint">Hint: TheHunter{Answer}</h3>
  </div>
</body>
</html>