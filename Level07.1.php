<!DOCTYPE html>
<html>
<head>
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

section {
  width: 500px;
  height: 200px;
  position: relative;
  animation-name: example;
  animation-duration: 10s;
  animation-iteration-count: 1000;
}

@keyframes example {
  0%   {background-color:#0054; left:0px; top:0px;}  
  25%  {background-color:#006F; left:200px; top:0px;}
  50%  {background-color:#0073; left:200px; top:200px;}
  75%  {background-color:#0063; left:0px; top:200px;}
  100% {background-color:#0097; left:0px; top:0px;}
}
</style>
</head>
<body style="background-color: #315c5a;">

		<header>
    <h1>The Hunter</h1>
  </header>
  <div class="l-content">
    <h2>Level 07</h2>
		<center> <section class="keyframes"></section> </center>

		<br>
   			 <br>
    			<br>
    				<br>
    					<br>
    				<br>
				<br>
    		<br>
    	<br>
    <br>
    	<br>
    <br>

		  	<center>

		  		<center> <img src="./img/back2.jpg" alt="hunt" width="650" height="400"> </center>

		  		 <br>
    				<br>
  			
  			</center>


  		<!-- Initial Four => Hex   -->
  		<!-- last one :(    -->

    <p class="l-para">Go to the previous page to submit the answer to get the flag</p>
    <h3 class="hint">Hint: TheHunter{Word}</h3>
  </div>

</body>
</html>