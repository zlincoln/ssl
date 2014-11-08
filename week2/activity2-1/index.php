<?php

echo '<h2>Goodfellas Result</h2><br>';

$apiContent = file_get_contents("http://www.omdbapi.com/?t=goodfellas");

$apiDecoded = json_decode($apiContent);

foreach($apiDecoded as $key => $value){
	echo "$key: $value <br>";
}

echo '<br><h2>Dictionary Content Results</h2><br>';

$dictContent = file_get_contents('./dictionary.txt');
$dictArray = explode(' ', $dictContent);

print_r($dictArray);

foreach($dictArray as $key => $value){
	$result = json_decode(file_get_contents("http://www.omdbapi.com/?t=$value"));
	foreach($result as $key => $value){
		echo "$key: $value <br>";
	}
	echo '<br>';
}