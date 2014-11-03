<?php
include_once('includes/header.php');
//create function to store post variables
function captureUserRegistration(){

	//init variable as array to store each variable in associative array
	$newUser = [];

	/***
	correction from step 1: checking for empty values done client-side, no need for conditionals and error handling here
	***/

	//assign key firstName and value post['fname'] to storage array
	$newUser['First Name'] = $_POST['fName'];

	//assign key lastName and value post['lname'] to storage array 
	$newUser['Last Name'] = $_POST['lName'];

	//assign key username and value post['username'] to storage array
	$newUser['Username'] = $_POST['username'];

	//assign key password and salted+hashed value post['password'] to storage array
	$newUser['Password'] = sha1(md5('fs_ssl_2014'.$_POST['password']));

	/***
	correction from step 1: client side validation for file type implemented, but implementing server side for extra security.  In addition, provide fallback image
	***/

	$uploadDir = './images/';	
	$uploadFile = basename($_FILES['avatar']['name']);
	$uploadPath = $uploadDir . $uploadFile;
	$fileExtension = pathinfo($uploadFile)['extension'];
	
	$fallbackImagePath = 'images/fallback.png';

	if($fileExtension == 'png' || $fileExtension == 'jpg' || $fileExtension == 'jpeg'){
		//move uploaded image using files['tmp_name'] to images directory
		if(move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadPath)){
			//assign key avatar and value of image path to storage array
			$newUser['Avatar'] = $uploadPath;
		}else{
			$newUser['Avatar'] = $fallbackImagePath;
		}
	}else{
		$newUser['Avatar'] = $fallbackImagePath;
	}

	// * returns storage array *
	return $newUser;
} // end function
	
//call storage function assigning the return to variable
$newUserDetails = captureUserRegistration();

$userMarkup = '<div class="panel panel-default">';
$userMarkup .= '<div class="panel-heading"><h2 class="panel-title">Welcome!</h2></div>';
$userMarkup .= '<div class="panel-body">';

//loop through each item in the array using associative key value to echo values submitted (image path into src attribute of img tag)
foreach($newUserDetails as $detail => $value){
	/***
	correction from step 1: originally thought it was a good idea to put full img tag into storage array.  Minimizing for flexiblity which requires conditional for key name
	***/
	$userMarkup .= '<div class="user-detail">';
	if($detail != 'Avatar'){
		$userMarkup .= "<strong>$detail</strong>";
		$userMarkup .= "<span>$value</span>";
		if($detail == 'Password'){
			$userMarkup .= '<p class="help-text">For security reasons, we won\'t show your password in plain text.';
		}
	}else{
		$userMarkup .= '<strong>Avatar</strong>';
		$userMarkup .= '<img src="'.$value.'" class="img-responsive">';
		if($value == 'images/fallback.png'){
			$userMarkup .= '<p class="help-text">Either there was an issue with your image, or you didn\'t upload one.</p>';
		}
	}
	$userMarkup .= "</div>";
}

$userMarkup .= '</div></div>'

?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<?php echo $userMarkup; ?>
			</div>
		</div>
	</div>
</section>
<?php include_once('includes/footer.php');