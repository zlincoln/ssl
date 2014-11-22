<?php

// set header content-type to application/json
header("Content-type:application/json");

// make pdo connection
include_once('includes/connection.php');
// prepare select statement
$sql = 'SELECT * FROM fruits ORDER BY RAND() LIMIT 1;';
$stmnt = $dbh->prepare($sql);
// execute
$stmnt->execute();

// assign result to statement's fetchall indexed by column name
$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);

// echo out json encoded result
echo json_encode($result);

?>