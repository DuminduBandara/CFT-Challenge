
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
    <h2>Level 09</h2>
    <center>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/eWQNltgDWsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </center>
    <form action="Level09.2.php" method="post" id="quiz" style="margin:2rem 5rem;">
    <ol>
    
    <li>
        <div id="example1">
                <p class="fonts">What is the motive of the “cyber-criminal”?</p>
                
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Fame </label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Ideology </label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Money </label>
                </div>
                
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Intimidation </label>
                    <br><br>
                </div>
        </div>
            
    </li>
    <br><br>       
    <li>
        <div id="example1">        
                <p class="fonts"> What is it called when fraudulent email masquerades as a legitimate communication in an attempt to get user to reveal some sensitive information? </p>
                
                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                    <label for="question-2-answers-A">A) Harpooning </label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                    <label for="question-2-answers-B">B) Phishing </label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                    <label for="question-2-answers-C">C) Baselining </label>
                </div>
                
                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                    <label for="question-2-answers-D">D) Trolling </label>
                    <br><br>
                </div>
        </div>    
    </li>
    <br><br>
    <li>
        <div id="example1">       
               <p class="fonts"> What central component is necessary to form a botnet? </p>
                
                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                    <label for="question-3-answers-A">A) Ethernet switch </label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <label for="question-3-answers-B">B) Command & Control (C&C) Serve </label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                    <label for="question-3-answers-C">C) Transformer </label>
                </div>
                
                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                    <label for="question-3-answers-D">D) DNS server </label>
                    <br><br>
                </div>
        </div>    
    </li>
    <br><br>
    <li>
        <div id="example1">        
                <p class="fonts"> What is the name of the malware that takes over computer system and holds hostage the disk drives or other data? </p>
                
                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                    <label for="question-4-answers-A">A) Phishing-ware </label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                    <label for="question-4-answers-B">B) Scareware </label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                    <label for="question-4-answers-C">C) Ransomware </label>
                </div>
                
                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                    <label for="question-4-answers-D">D) Kidnap-ware </label>
                    <br><br>
                </div>
        </div>    
    </li>
    <br><br>
    <li>
        <div id="example1">


                <p class="fonts">Attacking systems exploiting unknown and unpatched vulnerabilities also known as: </p>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                    <label for="question-5-answers-A">A) Phishing </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                    <label for="question-5-answers-B">B) Secret sauce </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                    <label for="question-5-answers-C">C) Zero-day exploits </label>
                </div>
                
                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                    <label for="question-5-answers-D">D) First day exploits </label>
                    <br><br>
                </div>
        </div>    
    </li>
    <br><br>
    </ol>
        <div style="text-align:center">
            <input type="submit" name="Submit" class="submit" value="Submit">
        <!--<input type="submit" value="Submit" class="submitbtn" style="height: 40px; width:120px"/>-->
        <br><br>
</div>

    </form>
  </div>
</body>
</html>