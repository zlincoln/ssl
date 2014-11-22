<?php

	//store db username
	$user = 'root';
	//store db password
	$pass = 'root';
	//instantiate pdo object, passing credentials as well as setting host, dbname, and port number
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

?>