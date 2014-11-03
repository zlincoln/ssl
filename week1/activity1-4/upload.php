<?php

$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
	echo '<img src="' . $uploadfile . '">';
}else{
	echo "Possible file upload attack!\n";
}

// print_r($_FILES);

?>