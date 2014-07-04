<?php
include_once '_/components/php/common.php';
require_once '_/components/php/classes/FormValidator.class.php';
// check for form submission - if it doesn't exist then send back to contact form
//echo 'testin';
// if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
	
//     header('Location: contact.php'); exit;
// }

$validation = array (
		'contact_email' => 'email'
);
$mandatory = array (
		'contact_name' => 'contact_name',
		'contact_email' => 'contact_email',
		'contact_question' => 'contact_question'
);
$sanitize = array ();
$validator = new FormValidator ( $validation, $mandatory, $sanitize );
$errors = array();
$required = array();
	
// get the posted data

if (isset ( $_POST ['save'])) {
		
	//Set the session variables
	//$_SESSION['form_searchDetails'] = 'incorrect';
	//echo $_SESSION['form_searchDetails'];
	if(isset($_POST['contact_name'])){ $_SESSION['contact_name'] = $_POST["contact_name"];}
	if(isset($_POST['contact_email'])){ $_SESSION['contact_email'] = $_POST["contact_email"];}
	if(isset($_POST['contact_phone'])){ $_SESSION['contact_phone'] = $_POST["contact_phone"];}
	if(isset($_POST['contact_question'])){ $_SESSION['contact_question'] = $_POST["contact_question"];}

	if ($validator->validate ( $_POST )) {
		//kill the session vars
		echo session_destroy();
		//$_SESSION['contact_name'] = null;
		echo 'contact_name: '.$_SESSION['contact_name'];
		echo 'destroyed';
		//email the contact data & question to the firm and send a copy of the question
		echo '<div class="col-sm-8 alert alert-success">'.$lang["THANK_YOU"].'</div>';
	}
	else{
		$_SESSION['steps'] = 2;
		$output = $validator->getJSON ();
		$errors = $output ['errors'];
		$required = $output ['required'];
		echo '<div class="row">';
		echo '<div class="col-sm-8">';
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
		echo '</div>';//alert
		echo '</div>';//col-sm-8
		echo '</div>';//row
	}
}



/*
$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Name: $name\n";
$email_content .= "Email Address: $email_address\n";
$email_content .= "Phone Number: $phone\n";
$email_content .= "Message:\n\n$message";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('YOUR-EMAIL-ADDRESS@YOUR-DOMAIN.com', 'YOUR WEBSITE NAME - Contact Form Submission', $email_content, $headers);
	
// send the user back to the form
header('Location: contact.html?s='.urlencode('Thank you for your message.')); exit;
*/
?>