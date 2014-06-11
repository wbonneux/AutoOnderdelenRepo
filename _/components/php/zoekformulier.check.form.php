<?php 
//step: set the session vars with the values of the post vars
//step: for each type, a specific validator(required, ...)
//step: error handling
//step: if everything is ok, next step(contact.form.php) & set the session vars
//validation
$validation = array ();
//basic form
$mandatory = array (
		'brand' => 'brand',
		'model' => 'model',
		'buildYear' => 'buildYear',
		'carenginetype' => 'carenginetype',
		'carexecution' => 'carexecution',
		'carCC' => 'carCC',
		'carKilowatt' => 'carKilowatt'
);
if(isset($_SESSION['type']) & $_SESSION['type'] == 'gearbox'){
	$mandatory['cargearbox'] = 'cargearbox';
}
if(isset($_SESSION['type']) & $_SESSION['type'] == 'part'){
	$mandatory['carPart'] = 'carPart';
}

$sanitize = array ();
$validator = new FormValidator ( $validation, $mandatory, $sanitize );
$errors = array();
$required = array();
//end validation

//echo 'saved';
if (isset ( $_POST ['searchRequest'])) {
	//Set the session variables
	$_SESSION['steps'] = 1;
	//echo $_SESSION['form_searchDetails'];
	//basic form
	if(isset($_POST['brand'])){ $_SESSION['brand'] = $_POST["brand"];}
	if(isset($_POST['model'])){$_SESSION['model'] = $_POST["model"];}
	if(isset($_POST['buildYear'])){$_SESSION['buildYear'] = $_POST["buildYear"];}
	if(isset($_POST['buildMonth'])){$_SESSION['buildMonth'] = $_POST["buildMonth"];}
	if(isset($_POST['carexecution'])){$_SESSION['carexecution'] = $_POST["carexecution"];}
	if(isset($_POST['carCC'])){$_SESSION['carCC'] = $_POST["carCC"];}
	if(isset($_POST['carKilowatt'])){$_SESSION['carKilowatt'] = $_POST["carKilowatt"];}
	if(isset($_POST['carenginetype'])){$_SESSION['carenginetype'] = $_POST["carenginetype"];}
	//gearbox
	if(isset($_POST['cargearbox'])){$_SESSION['cargearbox'] = $_POST["cargearbox"];}
	if(isset($_POST['carGearboxCode'])){$_SESSION['code'] = $_POST["carGearboxCode"];}
	//engine
	if(isset($_POST['carChassis'])){$_SESSION['carChassis'] = $_POST["carChassis"];}
	if(isset($_POST['carEngineCode'])){$_SESSION['code'] = $_POST["carEngineCode"];}
	//part
	if(isset($_POST['carPart'])){$_SESSION['carPart'] = $_POST["carPart"];}
	if(isset($_POST['details'])){$_SESSION['details'] = $_POST["details"];}

	//if(isset($_POST['cardoors'])){$_SESSION['cardoors'] = $_POST["cardoors"];}
	//if(isset($_POST['cardrivetype'])){$_SESSION['cardrivetype'] = $_POST["cardrivetype"];}
	
	//set the models for the chosen brand
	if(isset($_SESSION['brand']) && $_SESSION['brand'] != ''){
		$models = DAOFactory::getCodeCarModelDAO()->getCarModelsByBrandId($_SESSION['brand'], 'nl');
	}
	//1. validate the form with the post variables
	$brandSelect = $_POST ["brand"];
	$modelSelect = $_POST ["model"];
	$buildYearSelect = $_POST ["buildYear"];
	if ($validator->validate ( $_POST )) {
		//echo '<div class="alert alert-success">Thanks for sending us a request </div>';
		$_SESSION['steps'] = 2;
	}
	else{
		$_SESSION['steps'] = 1;
		$output = $validator->getJSON ();
		$errors = $output ['errors'];
		$required = $output ['required'];
			echo '<div class="alert alert-warning">';
		foreach ( $required as $key => $val ) {
			// echo $val;
			echo $lang['ERR_REQUIRED'] . $lang[$val].'<br>';
		}
		foreach ( $errors as $key => $val ) {
			//echo $key;
			//echo $val;
			echo $lang['ERR_INCORRECT'] . $lang[$val].'<br>';
		}
			echo '</div>';
	}
}

?>