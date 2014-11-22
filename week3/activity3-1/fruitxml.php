<?php

header("Content-Type:text/xml");

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = 'SELECT id, fruitname, fruitcolor FROM fruits ORDER BY fruitname';
$stmnt = $dbh->prepare($sql);
$stmnt->execute();

$result = $stmnt->fetchAll();

$xmlFile = "<?xml version='1.0' encoding='UTF-8'?>";
$xmlFile .= '<fruits>';
foreach($result as $fruit){
	$xmlFile .= '<fruit>';
	$xmlFile .= '<id>'.$fruit['id'].'</id>';
	$xmlFile .= '<fruitname>'.$fruit['fruitname'].'</fruitname>';
	$xmlFile .= '<fruitcolor>'.$fruit['fruitcolor'].'</fruitcolor>';
	$xmlFile .= '</fruit>';
};
$xmlFile .= '</fruits>';

echo $xmlFile;


?>