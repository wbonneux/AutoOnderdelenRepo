<?php
//validation
$validation = array ();
$mandatory = array (
		'brand' => 'brand',
		'model' => 'model',
		'buildYear' => 'buildYear'
);
$sanitize = array ();
$validator = new FormValidator ( $validation, $mandatory, $sanitize );
$errors = array();
$required = array();
//end validation
if (isset ( $_POST ['searchRequestDetails'])) {
	//Set the session variables
	$_SESSION['steps'] = 1;
	//echo $_SESSION['form_searchDetails'];
	if(isset($_POST['brand'])){ $_SESSION['brand'] = $_POST["brand"];}
	if(isset($_POST['model'])){$_SESSION['model'] = $_POST["model"];}
	if(isset($_POST['buildYear'])){$_SESSION['buildYear'] = $_POST["buildYear"];}
	if(isset($_POST['buildMonth'])){$_SESSION['buildMonth'] = $_POST["buildMonth"];}
	if(isset($_POST['carexecution'])){$_SESSION['carexecution'] = $_POST["carexecution"];}
	if(isset($_POST['cardoors'])){$_SESSION['cardoors'] = $_POST["cardoors"];}
	if(isset($_POST['cargearbox'])){$_SESSION['cargearbox'] = $_POST["cargearbox"];}
	if(isset($_POST['cardrivetype'])){$_SESSION['cardrivetype'] = $_POST["cardrivetype"];}
	if(isset($_POST['carenginetype'])){$_SESSION['carenginetype'] = $_POST["carenginetype"];}
	if(isset($_POST['details'])){$_SESSION['details'] = $_POST["details"];}
	
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
		foreach ( $required as $key => $val ) {
			// echo $val;
			echo '<div class="alert alert-warning">'.$lang['ERR_REQUIRED'] . $lang[$val] . '</div>';
		}
		foreach ( $errors as $key => $val ) {
			// echo $val;
			echo '<div class="alert alert-warning">'.$lang['ERR_INCORRECT'] . $lang[$val] . '</div>';
		}
	}

	//2. if validated -> set session variables & go to second form

}
// 	echo 'Merk: ' . $_POST ['brand'] . '<br>';
// 	echo 'Model: ' . $_POST ['model'] . '<br>';
// 	echo 'Jaar: ' . $_POST ['buildYear'] . '<br>';
// 	echo 'Maand: ' . $_POST ['buildMonth'] . '<br>';
// 	echo 'GearBox: ' . $_POST ['cargearbox'] . '<br>';


// 	$searchDetails = new SearchRequestDetails();
// 	$searchDetails->id = 1;
// 	$searchDetails->searchRequestId = null;
// 	$searchDetails->carBrandId = $_POST ['brand'];
// 	$searchDetails->carModelId = $_POST ['model'];
// 	$searchDetails->buildYearId = $_POST ['buildYear'];
// 	$searchDetails->buildMonthId = $_POST ['buildMonth'];
// 	$searchDetails->carExecutionId = $_POST ['carexecution'];
// 	$searchDetails->carDoorsId = $_POST ['cardoors'];
// 	$searchDetails->engineTypeId = $_POST ['carenginetype'];
// 	$searchDetails->driveTypeId = $_POST ['cardrivetype'];
// 	$searchDetails->gearboxId = $_POST ['cargearbox'];
// 	$searchDetails->details = $_POST['details'];
// 	$searchDetailsDAO = DAOFactory::getSearchRequestDetailsDAO();
// 	echo 'Id inserted: '.$searchDetailsDAO->insert($searchDetails);
// 	$searchDetails->details = 'updated detailske';
// 	echo 'Id 1 updated: '.$searchDetailsDAO->update($searchDetails);

// }
?>