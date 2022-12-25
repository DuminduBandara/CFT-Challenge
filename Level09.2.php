<html>
 
<head>
    <h1 style="text-align:center;">Your Results</h1>
</head>
 
<body style="background-color: #D5D8DC; text-align: center;">
 

        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "C") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo "<div id='Level10.2'>$totalCorrect / 5 correct</div>";

            if ($totalCorrect != 5) {echo "You lost the chance, try again :( .";}
             else {echo "VGhlSHVudGVye0NvcnJlY3R9";}
            
        ?>
	
	</div>
 
</body>
 
</html>