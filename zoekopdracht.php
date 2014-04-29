<?php
echo 'testing repo';
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
$doors = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARDOORS' ), 'nl', 'desc' );
$drivetypes = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARDRIVETYPE' ), 'nl', 'desc' );
$enginetypes = $codeTableDAO->getAllDescrByLangOrdered ( CONSTANT ( 'CARENGINE' ), 'nl', 'desc' );
$gearboxes = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARGEARBOX' ), 'nl', 'asc' );
$categories = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARCATEGORY' ), 'nl', 'asc' );
$subcategories = $codeTableDAO->getAllDescrByLangAndIdOrdered ( CONSTANT ( 'CARSUBCATEGORY' ), 'nl', 'asc' );
if(!isset($_SESSION['steps'])){
	$_SESSION['steps'] = 1;
}
?>



<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				<?php echo $lang['SEARCHREQUEST_TITLE']; ?> <small><?php echo $lang['SEARCHREQUEST_TITLE_SMALL']; ?></small>
			</h1>
			<?php
			//echo 'steps: '.$_SESSION['steps'];
			if (! isset ( $_POST ['searchRequestDetails'] ) && ! isset ( $_POST ['searchRequestArticle'] ) && ! isset ( $_POST ['userContact'] ) && !isset($_POST['backSearchRequestDetails']) && !isset($_POST['backSearchPart'])) {
				//include_once '_/components/php/searchRequest.form.php';
				if ($_SESSION['steps'] == 1) {
					include_once '_/components/php/searchRequest.form.php';
				} else {
					if ($_SESSION['steps'] == 2) {
						include_once '_/components/php/searchPart.form.php';
					}else{
						include_once '_/components/php/contact.form.php';
					}
				}
			}
			if (isset ( $_POST ['searchRequestDetails'] )) {
				//echo $_SESSION['form_searchDetails'];
				//if ($error == false) {
				include '_/components/php/searchRequest.check.form.php';
				if ($_SESSION['steps'] == 1) {
					include_once '_/components/php/searchRequest.form.php';
				} else {
					include_once '_/components/php/searchPart.form.php';
				}
			}
			if(isset($_POST['backSearchRequestDetails'])){
				include_once '_/components/php/searchRequest.form.php';
			}
			if(isset($_POST['backSearchPart'])){
				include_once '_/components/php/searchPart.form.php';
			}
			if (isset ( $_POST ['searchRequestArticle'] )) {
				include '_/components/php/searchPart.check.form.php';
				
				if ($_SESSION['steps'] == 2) {
					include_once '_/components/php/searchPart.form.php';
				} else {
					include_once '_/components/php/contact.form.php';
				}
			}
			if (isset ( $_POST ['userContact'] )) {
				include '_/components/php/contact.check.form.php';
				if ($_SESSION['steps'] == 3) {
					include_once '_/components/php/contact.form.php';
				} else {
					//echo 'create';
					include_once '_/components/php/createRequest.php';
					//include_once '_/components/php/contact.form.php';
					//include_once '_/components/php/searchRequest.form.php';
					//delete all the session vars en set steps 1
					//todo: delete all the session vars	
					//$_SESSION['steps'] = 1;
				}
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


