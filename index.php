<?php
include_once '_/components/php/common.php';
include_once '_/components/php/header.inc.php';
include_once '_/components/php/include_dao.php';


$carModelFact = DAOFactory::getCodeCarModelDAO();
$carModels = $carModelFact->getCarModelsByBrandId(2, 'nl');

$carBrands = $carBrand->getAllDescrByLang(constant('CARBRAND'), 'nl');

foreach ($carModels as $carModel){
	echo 'Model: '.$carModel->descrNdls.'<br>';
}

foreach ($carBrands as $carBrand){
	echo 'Merk: '.$carBrand->descr.'<br>';
}


?>
<div class="section">

	<div class="container">

		<div class="row">
			<div class="col-lg-12 col-md-12">
            <h3><i class="icon-ok-circle"></i> Bootstrap 3 Built</h3>
            <p>The 'Modern Business' website template by <a href="http://startbootstrap.com">Start Bootstrap</a> is built with <a href="http://getbootstrap.com">Bootstrap 3</a>. Make sure you're up to date with latest Bootstrap documentation!</p>
          </div>
		</div>
	</div>
</div>
<?php
include_once '_/components/php/footer.inc.php';
?>
