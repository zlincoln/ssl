<?php

$contents = simplexml_load_file("http://localhost:8888/fullsail/ssl/week3/activity3-1/fruitxml.php");

$markup = "<table><thead><tr><th>ID</th><th>Name</th><th>Color</th></tr></thead><tbody>";
foreach($contents->fruit as $fruit){
	$markup .= '<tr>';
	$markup .= '<td>' . $fruit->id . '</td>';
	$markup .= '<td>' . $fruit->fruitname . '</td>';
	$markup .= '<td>' . $fruit->fruitcolor . '</td>';
	$markup .= '</tr>';
};
$markup .= '</tbody></table>';

echo $markup;

?>