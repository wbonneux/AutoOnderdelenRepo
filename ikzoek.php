<?php
include_once '_/components/php/common.php';
include_once '_/components/php/header.inc.php';
include_once '_/components/php/include_dao.php';
require_once '_/components/php/classes/FormValidator.class.php';
$types = array (
		'motor' => 'motor',
		'versnellingsbak' => 'versnellingsbak',
		'parts' => 'parts'
);
if(!isset($_REQUEST['type'])){
	if(isset($_SESSION['type'])){
		//gard all the session vars & go to form for this type 
		echo $_SESSION['type'];
	}else{
		//include the part of the index page
		//destroy all the original session
		session_destroy();
		echo 'no par set!';
	}
}else{
	if(array_key_exists($_REQUEST['type'],$types)){
		session_destroy();
		$_SESSION['type'] = $_REQUEST['type'];
		echo 'session placed<br>';
		echo $_SESSION['type'];
	}else{
		//include the part of the index page
		//destroy the original session
		session_destroy();
		echo 'wrong type in request!';
	}
	
}

?>