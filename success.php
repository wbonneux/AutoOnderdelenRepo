<?php
include_once '_/components/php/common.php';
include_once '_/components/php/header.inc.php';
?>
<div class="section">

	<div class="container">

		<div class="row">
			<div class="alert alert-success"><?php echo $lang['THANK_YOU']; ?></div>
			<form method="POST"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		
			<input type="submit" name="backHome" class="btn btn-primary" value="<?php echo $lang['BACK_HOME']; ?>">
			</form>
          </div>
		</div>
	</div>
</div>
<?php
include_once '_/components/php/footer.inc.php';
?>
