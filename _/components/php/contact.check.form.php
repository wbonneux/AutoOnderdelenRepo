<?php
//validation
//mandatory: name, email, one of the tel(phone || gsm)
$validation = array (
		'contact_tel' => 'phone', 
		'contact_email' => 'email',
		'contact_postalcode' => 'int',
		'contact_housebus' => 'int'
		);
$mandatory = array (
		'contact_name' => 'contact_name',
		'contact_email' => 'contact_email'
);
$sanitize = array ();
$validator = new FormValidator ( $validation, $mandatory, $sanitize );
$errors = array();
$required = array();
//end validation
if (isset ( $_POST ['userContact'])) {
	//Set the session variables
	//$_SESSION['form_searchDetails'] = 'incorrect';
	//echo $_SESSION['form_searchDetails'];
	if(isset($_POST['contact_name'])){ $_SESSION['contact_name'] = $_POST["contact_name"];}
	if(isset($_POST['contact_fname'])){ $_SESSION['contact_fname'] = $_POST["contact_fname"];}
	if(isset($_POST['contact_compname'])){ $_SESSION['contact_compname'] = $_POST["contact_compname"];}
	if(isset($_POST['contact_tel'])){ $_SESSION['contact_tel'] = $_POST["contact_tel"];}
	if(isset($_POST['contact_gsm'])){ $_SESSION['contact_gsm'] = $_POST["contact_gsm"];}
	if(isset($_POST['contact_fax'])){ $_SESSION['contact_fax'] = $_POST["contact_fax"];}
	if(isset($_POST['contact_street'])){ $_SESSION['contact_street'] = $_POST["contact_street"];}
	if(isset($_POST['contact_housenr'])){ $_SESSION['contact_housenr'] = $_POST["contact_housenr"];}
	if(isset($_POST['contact_housebus'])){ $_SESSION['contact_housebus'] = $_POST["contact_housebus"];}
	if(isset($_POST['contact_postalcode'])){ $_SESSION['contact_postalcode'] = $_POST["contact_postalcode"];}
	if(isset($_POST['contact_community'])){ $_SESSION['contact_community'] = $_POST["contact_community"];}
	if(isset($_POST['contact_state'])){ $_SESSION['contact_state'] = $_POST["contact_state"];}
	if(isset($_POST['contact_country'])){ $_SESSION['contact_country'] = $_POST["contact_country"];}
	if(isset($_POST['contact_email'])){ $_SESSION['contact_email'] = $_POST["contact_email"];}
	if(isset($_POST['contact_emailconfirm'])){ $_SESSION['contact_emailconfirm'] = $_POST["contact_emailconfirm"];}
	
// 	if(isset($_POST['userReplyGSM'])){ $_SESSION['userReplyGSM'] = 1;}else{$_SESSION['userReplyGSM'] = 0;}
// 	if(isset($_POST['userReplyPhone'])){ $_SESSION['userReplyPhone'] = 1;}else{$_SESSION['userReplyPhone'] = 0;}
// 	if(isset($_POST['userReplyEmail'])){ $_SESSION['userReplyEmail'] = 1;}else{$_SESSION['userReplyEmail'] = 0;}
	
	
	if ($validator->validate ( $_POST )) {
//		echo '<div class="alert alert-success">Thanks for sending us a request </div>';
		$_SESSION['steps'] = 3;
	}
	else{
		$_SESSION['steps'] = 2;
		$output = $validator->getJSON ();
		$errors = $output ['errors'];
		$required = $output ['required'];
			echo '<div class="alert alert-warning">';
		foreach ( $required as $key => $val ) {
			// echo $val;
			//echo '<div class="alert alert-warning">'.$lang['ERR_REQUIRED'] . $lang[$val] . '</div>';
			echo $lang['ERR_REQUIRED'] . $lang[$val].'<br>';
		}
		foreach ( $errors as $key => $val ) {
			// echo $val;
			//echo '<div class="alert alert-warning">'.$lang['ERR_INCORRECT'] . $lang[$val] . '</div>';
			echo $lang['ERR_INCORRECT'] . $lang[$val].'<br>';
		}
			echo '</div>';
	}
}
?>