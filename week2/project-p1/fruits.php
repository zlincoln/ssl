<?php

//include once 'includes/connection.php' which stores db credentials and instantiates pdo object

//if request method is post
	//hydrate variables with postdata
	//use pdo object to prepare an insert statement with params
	//bind those params to our variables containing postdata

	//execute insertion
//end request method conditional

?>
<!-- html form here (see index.html) -->
<?php

//use pdo object to prepare a select statement
//execute selection

//for each row returned
	//echo out the id, name, color
	//last column contains a link to deletefruit.php passing the associated id as a url param
//end row for loop

?>