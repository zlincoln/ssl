<?php

header("Content-type:application/json");

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = 'SELECT id, fruitname, fruitcolor FROM fruits ORDER BY fruitname';
$stmnt = $dbh->prepare($sql);
$stmnt->execute();

$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);

?>