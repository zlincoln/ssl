<?php

function determineLetterGrade($points){
	if($points <= 100 && $points >= 90){
		return 'A';
	}elseif($points < 90 && $points >= 80){
		return 'B';
	}elseif($points < 80 && $points >= 70){
		return 'C';
	}elseif($points < 70 && $points >= 60){
		return 'D';
	}elseif($points < 60){
		return 'F';
	}else{
		return 'Invalid Score';
	}
}

echo determineLetterGrade(94).'<br>';
echo determineLetterGrade(54).'<br>';
echo determineLetterGrade(89.9).'<br>';
echo determineLetterGrade(60.01).'<br>';
echo determineLetterGrade(102.1);

?>