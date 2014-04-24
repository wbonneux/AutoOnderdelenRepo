
<?php
$modelFact = DAOFactory::getCodeCarModelDAO ();
if (isset ( $_POST ['brandId'] ) && $_POST ['brandId'] != '') {
	$brandId = $_POST ['brandId'];
	$brandId = mysql_real_escape_string ( $brandId );
	$res = $modelFact->getCarModelsByBrandId ( $brandId, 'nl' );
	
	if (mysql_num_rows ( $res )) {
		while ( $row = mysql_fetch_array ( $res ) ) {
			echo "<option value=''>".$lang['NO_SELECT_BRAND']."dd</option>";
			if (isset ( $_POST ['model'] ) & $_POST ['model'] === $model->id) {
				echo "<option selected value='" . $row ['id'] . "'>se1" . ucfirst ( $row ['descr'] ) . "</option>";
			} else {
				echo "<option value='" . $row ['id'] . "'>se2" . ucfirst ( $row ['descr'] ) . "</option>";
			}
		}
	}
} else {
	echo 'testing';
}

?>