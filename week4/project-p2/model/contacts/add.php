<?php

	//include once 'includes/connection.php' which stores db credentials and instantiates pdo object
	include_once('includes/connection.php');

	//if request method is post
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//hydrate variables with postdata
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		//use pdo object to prepare an insert statement with params
		$stmt = $dbh->prepare("INSERT INTO contacts (fname, lname, phone, email, website) VALUES (:fname, :lname, :phone, :email, :website);");
		//bind those params to our variables containing postdata
		$stmt->bindParam(':fname', $fname);
		$stmt->bindParam(':lname', $lname);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':website', $website);

		//execute insertion
		$stmt->execute();

		header('Location: index.php?success=newContact');
	}else{
		//kick them back to the index
		header('Location: index.php');
	}
	//hydrate variables with postdata
	
	//use pdo object to prepare an insert statement with params
	//bind those params to our variables containing postdata

	//execute insertion


?>