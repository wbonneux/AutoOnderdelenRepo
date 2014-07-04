<?php
include_once '_/components/php/common.php';
include_once '_/components/php/header.inc.php';
include_once '_/components/php/include_dao.php';
require_once '_/components/php/classes/FormValidator.class.php';
$codeTableDAO = DAOFactory::getCodeTableDAO ();
$brands = $codeTableDAO->getAllDescrByLang ( CONSTANT ( 'CARBRAND' ), 'nl' );
if(isset($_SESSION['brand']) && $_SESSION['brand'] != ''){
	$models = DAOFactory::getCodeCarModelDAO()->getCarModelsByBrandId($_SESSION['brand'], 'nl');
}
$years = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARBUILDYEAR' ), 'nl', 'desc' );
$months = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARBUILDMONTH' ), 'nl', 'desc' );
$executions = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CAREXECUTION' ), 'nl', 'desc' );
$drivetypes = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARDRIVETYPE' ), 'nl', 'desc' );
$enginetypes = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARENGINE' ), 'nl', 'desc' );
$gearboxes = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARGEARBOX' ), 'nl', 'asc' );
$categories = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARCATEGORY' ), 'nl', 'asc' );
$subcategories = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARSUBCATEGORY' ), 'nl', 'asc' );
$countries = $codeTableDAO->getAllDescrByLangAndIdOrdered(CONSTANT('COUNTRY'), 'nl', 'asc');
$parts = $codeTableDAO->getAllDescrByLangOrdered(CONSTANT('PARTSTYPE'),'nl','asc');



?>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				<?php echo $lang['SEARCHREQUEST_TITLE']; ?> <small><?php echo $lang['SEARCHREQUEST_TITLE_SMALL']; ?></small>
			</h1>
			<?php 
			//step: search if their was a post
			//step: if no post, check the url
			//step: redirect if url was not correct
			if(isset($_POST['searchRequest']) || isset($_POST['backSearchRequest'])  || isset($_POST['userContact'])){
				switch ($_POST){
					case isset($_POST['searchRequest']):
						//echo 'searchRequest';
					if (isset ( $_POST ['searchRequest'] )) {
						//echo $_SESSION['form_searchDetails'];
						//if ($error == false) {
						include '_/components/php/zoekformulier.check.form.php';
						if ($_SESSION['steps'] == 1) {
							include_once '_/components/php/zoekformulier.form.php';
						} else {
							include_once '_/components/php/contact.form.php';
						}
					}
					break;
					case isset($_POST['userContact']):
						//echo 'userContact';
						if (isset ( $_POST ['userContact'] )) {
							include '_/components/php/contact.check.form.php';
							if ($_SESSION['steps'] == 2) {
								include_once '_/components/php/contact.form.php';
							} else {
								//echo 'create';
								include_once '_/components/php/createRequest.php';
								include_once 'success.php';
								//include_once '_/components/php/contact.form.php';
								//include_once '_/components/php/searchRequest.form.php';
								//delete all the session vars en set steps 1
								//todo: delete all the session vars
								//$_SESSION['steps'] = 1;
							}
						}
						break;
					case isset($_POST['backSearchRequest']):
// 						echo 'backSearchRequest';
						if(isset($_POST['backSearchRequest'])){
							if(isset($_SESSION['steps']))
							{
								echo 'set step';
								$_SESSION['steps'] = 1;
								include_once '_/components/php/zoekformulier.form.php';
							}else{
								
							}
							
						}else
						{
							if ($_SESSION['steps'] == 1) {
								include_once '_/components/php/zoekformulier.form.php';
							} else {
								include_once '_/components/php/contact.form.php';
							}
						}
						break;
				}
			}else{
				//echo 'nopost';
				$types = array (
						'engine' => 'engine',
						'gearbox' => 'gearbox',
						'part' => 'part'
				);
				if(!isset($_REQUEST['type'])){
					if(isset($_SESSION['type'])){
						//gard all the session vars & go to form for this type
						//echo $_SESSION['type'];
						//include('_/components/php/zoekformulier.form.php');
						//echo 'mystep: '.$_SESSION['steps'];
						//echo 'jes';
						if (isset($_SESSION['steps'])  && $_SESSION['steps']== 1) {
							include_once '_/components/php/zoekformulier.form.php';
						} else {
							include_once '_/components/php/contact.form.php';
						}
					}else{
						//echo 'redirect 1';
						//include the part of the index page
						//destroy all the original session
						//session_destroy();
						redirect('http://localhost/Zend/AutoOnderdelenRepo/index.php');
						echo 'no par set!';
					}
				}else{
					if(array_key_exists($_REQUEST['type'],$types)){
						//session_destroy();
						$_SESSION['type'] = $_REQUEST['type'];
						include('_/components/php/zoekformulier.form.php');
						//echo 'session placed<br>';
						//echo $_SESSION['type'];
					}else{
						//include the part of the index page
						//destroy the original session
						session_destroy();
						redirect('http://localhost/Zend/AutoOnderdelenRepo/index.php');
						echo 'wrong type in request!';
					}
				
				}
			}
			
			
			
			
			function redirect($url){
				header('Location: '.$url);
				die();
			}
			
			function noPost(){
				
			}
			
			function searchRequest(){
				
			}
			
			function userContact(){

			}
			
			function backSearchRequest(){
				
			}
			
			?>
       	</div>
	</div>
</div>

<?php
include_once '_/components/php/footer.inc.php';
?>

<script type="text/javascript">
$(document).ready(function()
{
  $("#brand").change(function()
  {
    var brandId = $(this).val();
	if(brandId != '')  
	 {
//        document.write('tesint');
	  $.ajax
	  ({
		  
	     type: "POST",
		 url: "get_model.php",
		 data: "brandId="+ brandId,
		 success: function(option)
		 {
 		   $("#model").html(option);
// 		   $("#model").html("<option value=''>-- No cateddgory selected --</option>");
		 }
	  });
// 	  document.write('tesint');
	 }
	 else
	 {
	   $("#model").html("<option value=''><?php echo $lang['NO_SELECT_BRAND']; ?></option>");
	 }
	return false;
  });
});
</script>