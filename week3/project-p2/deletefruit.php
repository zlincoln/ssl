<?php

//include once 'includes/connection.php' which stores db credentials and instantiates pdo object
include_once('includes/connection.php');

//the id of the record to delete should have been passed as a url param, so grab from $_GET array and store that id in a variable
$fruitId = $_GET['id'];

//use pdo object to prepare a delete statement with params
$stmt = $dbh->prepare("DELETE FROM fruits WHERE id = :fruitid;");
//bind that param to our id variable
$stmt->bindParam(':fruitid', $fruitId);

//execute deletion
$stmt->execute();

//redirect to fruits.php
header('Location: ads.php');

//kill process
die();

?>