
<?php
include_once '_/components/php/common.php';
include_once '_/components/php/include_dao.php';
include_once '_/components/php/include_dao.php';
$modelFact = DAOFactory::getCodeCarModelDAO();
if(isset($_POST['brandId']) && $_POST['brandId'] != '')
{
  $brandId = $_POST['brandId'];
  $brandId = mysql_real_escape_string($brandId);
  $models = $modelFact->getCarModelsByBrandId($brandId, 'nl');
  echo "<option value=''>".$lang['SELECT_MODEL']."</option>";
  foreach($models as $model)
  {
  	if (isset ( $_POST ['model'] ) & $_POST ['model'] === $model->id) {
  		echo "<option selected value=".$model->id.">".$model->descr."</option>";
  	} else {
  		echo "<option value=".$model->id.">".$model->descr."</option>";
  	}
  }

  
  
}


?>