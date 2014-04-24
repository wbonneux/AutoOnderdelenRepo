<?php
if(isset($_POST['backSearchRequestDetails'])){
	if(isset($_SESSION['steps']))
	{
		$_SESSION['steps'] = 1;
	}
}
//validation
$validation = array ();
$mandatory = array (
		'partName' => 'partName'
);
$sanitize = array ();
$validator = new FormValidator ( $validation, $mandatory, $sanitize );
$errors = array();
$required = array();
//end validation
if (isset ( $_POST ['searchRequestArticle'])) {
	$ses_id = session_id();
	if(isset($_POST['partName'])){ $_SESSION['partName'] = $_POST["partName"];}
	if(isset($_POST['partDetails'])){ $_SESSION['partDetails'] = $_POST["partDetails"];}
	if(isset($_FILES['uploadPhoto'])){$_SESSION['partFile'] = $_FILES["uploadPhoto"]["name"];}
	
	//1. validate the form with the post variables
	$brandSelect = $_POST ["partName"];
	if ($validator->validate ( $_POST )) {
		//echo '<div class="alert alert-success">Thanks for sending us a request </div>';
		$_SESSION['steps'] = 3;
	}
	else{
		$_SESSION['steps'] = 2;
		$output = $validator->getJSON ();
		$errors = $output ['errors'];
		$required = $output ['required'];
		foreach ( $required as $key => $val ) {
			// echo $val;
			echo '<div class="alert alert-warning">'.$lang['ERR_REQUIRED'] . $lang[$val] . '</div>';
		}
		foreach ( $errors as $key => $val ) {
			// echo $val;
			echo '<div class="alert alert-warning">'.$lang['ERR_INCORRECT'] . $lang[$val] . '</div>';
		}
		if(!file_exists("./images/tempory/".$ses_id)){
			mkdir("./images/tempory/".$ses_id, 0777, true);
		}
		if(!file_exists("./images/tempory/".$ses_id."/".$_FILES["uploadPhoto"]["name"])){
			$tempFile = $_FILES['uploadPhoto']['tmp_name'];
			move_uploaded_file($_FILES["uploadPhoto"]["tmp_name"], "./images/tempory/".$ses_id."/".$_FILES["uploadPhoto"]["name"]);
			echo "uploaded";
			echo "Stored in: " . $_FILES["uploadPhoto"]["tmp_name"];
			echo "Stored in: " . $_FILES["uploadPhoto"]["name"];
			// Check $_FILES['upfile']['error'] value.
			switch ($_FILES['uploadPhoto']['error']) {
				case UPLOAD_ERR_OK:
					break;
				case UPLOAD_ERR_NO_FILE:
					throw new RuntimeException('No file sent.');
				case UPLOAD_ERR_INI_SIZE:
				case UPLOAD_ERR_FORM_SIZE:
					throw new RuntimeException('Exceeded filesize limit.');
				default:
					throw new RuntimeException('Unknown errors.');
			}
		}
	}
	
	
	
	
}



?>