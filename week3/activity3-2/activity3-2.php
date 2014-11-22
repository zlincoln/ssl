<?php

$contents = file_get_contents("http://localhost:8888/fullsail/ssl/week3/activity3-2/fruitjson.php");

$contents = json_decode($contents);

$markup = "<table><thead><tr><th>ID</th><th>Name</th><th>Color</th></tr></thead><tbody>";
foreach($contents as $fruit){
	$markup .= '<tr>';
	$markup .= '<td>' . $fruit->id . '</td>';
	$markup .= '<td>' . $fruit->fruitname . '</td>';
	$markup .= '<td>' . $fruit->fruitcolor . '</td>';
	$markup .= '</tr>';
};
$markup .= '</tbody></table>';

echo $markup;

?>