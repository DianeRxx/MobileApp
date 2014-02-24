<?php

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
	$answer6 = $_POST['question-6-answers'];
	$answer7 = $_POST['question-7-answers'];
	$answer8 = $_POST['question-8-answers'];

    $totalCorrect = 0;
    
    if ($answer1 == "B") { $totalCorrect++; }
    if ($answer2 == "A") { $totalCorrect++; }
    if ($answer3 == "D") { $totalCorrect++; }
    if ($answer4 == "B") { $totalCorrect++; }
	if ($answer5 == "C") { $totalCorrect++; }
	if ($answer6 == "D") { $totalCorrect++; }
	if ($answer7 == "C") { $totalCorrect++; }
	if ($answer8 == "A") { $totalCorrect++; }
    
    echo "<div id='results'>$totalCorrect / 5 correct</div>";
    
?>