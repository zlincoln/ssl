<?php

//create function to store post variables
	//init variable as array to store each variable in associative array
	
	//if not empty post value first name
		//assign key firstName and value post['fname'] to storage array
	//else
		//indicate error

	//if not empty post value last name
		//assign key lastName and value post['lname'] to storage array 
	//else
		//indicate error

	//if not empty post value username
		//assign key username and value post['username'] to storage array
	//else
		//indicate error

	//if not empty post value password
		//assign key password and salted+hashed value post['password'] to storage array
	//else
		//indicate error

	//if not empty post value avatar
		//move uploaded image using files['tmp_name'] to images directory
		//assign key avatar and value of image path to storage array
	//else
		//indicate error
	
	// * returns storage array *
// end function

//call storage function assigning the return to variable

//loop through each item in the array using associative key value to echo values submitted (image path into src attribute of img tag)

?>