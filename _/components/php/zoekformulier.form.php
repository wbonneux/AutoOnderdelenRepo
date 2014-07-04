<form role="form" method="POST"
	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="row">
		<div class="form-group col-sm-3">
			<?php
				if(isset($required['brand'])){
					echo '<label style="color:red" for="input1">'.$lang['SEARCHREQUEST_BRAND'].'</label>';
				}else{
					echo '<label for="input1">'.$lang['SEARCHREQUEST_BRAND'].'</label>';
				} 
			?>
			<!-- 		<input type="text" name="contact_name" class="form-control" -->
			<!-- 			id="input1"> -->

			<select class="form-control" id="brand" name="brand">
				<option value=''><?php echo $lang['SELECT_BRAND']; ?></option>
				<?php
				foreach ( $brands as $brand ) {
					if (isset ( $_SESSION ['brand'] ) & $_SESSION ['brand'] === $brand->id) {
						echo '<option selected value=' . $brand->id . '>' . $brand->descr . '</option>';
					} else {
						echo '<option value=' . $brand->id . '>' . $brand->descr . '</option>';
					}
				}
				?>			
			</select>
		</div>
		<div class="form-group col-sm-3">
			<?php
				if(isset($required['model'])){
					echo '<label style="color: red" for="input2">'.$lang['SEARCHREQUEST_MODEL'].'</label>';
				}else{
					echo '<label for="input2">'.$lang['SEARCHREQUEST_MODEL'].'</label>';
				} 
			?>
			
			<!-- 		<input type="email" name="contact_email" class="form-control" -->
			<!-- 			id="input2"> -->
			<select id="model" name="model" class="form-control">
				<?php
				if (isset ( $_SESSION ['brand'] )) {
					echo "<option value=''>" . $lang ['SELECT_MODEL'] . "</option>";
				} else {
					echo "<option value=''>" . $lang ['NO_SELECT_BRAND'] . "</option>";
				}
				foreach ( $models as $model ) {
					if (isset ( $_SESSION ['model'] ) & $_SESSION ['model'] === $model->id) {
						echo '<option selected value=' . $model->id . '>' . $model->descr . '</option>';
					} else {
						echo '<option value=' . $model->id . '>' . $model->descr . '</option>';
					}
				}
				?>
			</select>
		</div>
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_BUILDYEAR']; ?></label>
			<select class="form-control" id="buildYear" name="buildYear">
				<option value=''><?php echo $lang['SELECT_BUILDYEAR']; ?></option>
			<?php
			foreach ( $years as $year ) {
				
				if (isset ( $_SESSION ['buildYear'] ) & $_SESSION ['buildYear'] === $year->id) {
					echo '<option selected value=' . $year->id . '>' . $year->descr . '</option>';
				} else {
					echo '<option value=' . $year->id . '>' . $year->descr . '</option>';
				}
			}
			?>			
			</select>
		</div>
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_BUILDMONTH']; ?></label>
			<select class="form-control" id="buildMonth" name="buildMonth">
				<option value=''><?php echo $lang['SELECT_BUILDMONTH']; ?></option>
				<?php
				foreach ( $months as $month ) {
					if (isset ( $_SESSION ['buildMonth'] ) & $_SESSION ['buildMonth'] === $month->id) {
						echo '<option selected value=' . $month->id . '>' . $month->descr . '</option>';
					} else {
						echo '<option value=' . $month->id . '>' . $month->descr . '</option>';
					}
				}
				?>			
			</select>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_CAREXECUTION']; ?></label>
			<select class="form-control" id="carexecution" name="carexecution">
				<option value=''><?php echo $lang['SELECT_CAREXECUTION']; ?></option>
				<?php
				foreach ( $executions as $execution ) {
					if (isset ( $_SESSION ['carexecution'] ) & $_SESSION ['carexecution'] === $execution->id) {
						echo '<option selected value=' . $execution->id . '>' . $execution->descr . '</option>';
					} else {
						echo '<option value=' . $execution->id . '>' . $execution->descr . '</option>';
					}
				}
				?>			
			</select>
		</div>
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_CC']; ?></label> <input
				type="text" name="carCC" class="form-control" id="input1"
				value="<?php if(isset($_SESSION['carCC'])){echo $_SESSION['carCC'];}?>">
		</div>
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_KILOWATT']; ?></label>
			<input type="text" name="carKilowatt" class="form-control" id="input1"
				value="<?php if(isset($_SESSION['carKilowatt'])){echo $_SESSION['carKilowatt'];}?>">
		</div>
		<div class="form-group col-sm-3">
			<label for="input3"><?php echo $lang['SEARCHREQUEST_ENGINETYPE']; ?></label>
			<select class="form-control" id="carenginetype" name="carenginetype">
				<option value=''><?php echo $lang['SELECT_ENGINETYPE']; ?></option>
				<?php
				foreach ( $enginetypes as $enginetype ) {
					if (isset ( $_SESSION ['carenginetype'] ) & $_SESSION ['carenginetype'] === $enginetype->id) {
						echo '<option selected value=' . $enginetype->id . '>' . $enginetype->descr . '</option>';
					} else {
						echo '<option value=' . $enginetype->id . '>' . $enginetype->descr . '</option>';
					}
				}
				?>			
			</select>
		</div>
	</div>
	<?php 
	//gearbox type
	if(isset($_SESSION['type']) & $_SESSION['type'] == 'gearbox')
	{
		echo '<div class="row">';
			echo '<div class="form-group col-sm-3">';
				echo '<label for="input3">'.$lang['SEARCHREQUEST_GEARBOX'].'</label>';
				echo '<select class="form-control" id="cargearbox" name="cargearbox">';
					echo '<option value="">'.$lang['SELECT_GEARBOX'].'</option>';
				
						foreach ( $gearboxes as $gearbox ) {
							if (isset ( $_SESSION ['cargearbox'] ) & $_SESSION ['cargearbox'] === $gearbox->id) {
								echo '<option selected value=' . $gearbox->id . '>' . $gearbox->descr . '</option>';
							} else {
								echo '<option value=' . $gearbox->id . '>' . $gearbox->descr . '</option>';
							}
						}
				echo '</select>';
			echo '</div>';
			echo '<div class="form-group col-sm-3">';
				echo '<label for="input3">'.$lang['SEARCHREQUEST_GEARBOX_CODE'].'</label>';
				echo '<input type="text" name="carGearboxCode" class="form-control" id="input1"';
					echo 'value="';
						if(isset($_SESSION['code'])){echo $_SESSION['code'];}
					echo '">';
			echo '</div>';
		echo '</div>';
	}
	//engine type
	if(isset($_SESSION['type']) & $_SESSION['type'] == 'engine')
	{
		echo '<div class="row">';
		echo '<div class="form-group col-sm-3">';
			echo '<label for="input3">'.$lang["SEARCHREQUEST_CHASSIS"].'</label>';
			echo '<input type="text" name="carChassis" class="form-control" id="input1"';
				echo 'value="'; 
				if(isset($_SESSION['carChassis'])){echo $_SESSION['carChassis'];}
				echo '">';
		echo '</div>';
		echo '<div class="form-group col-sm-3">';
			echo '<label for="input3">'.$lang["SEARCHREQUEST_ENGINE_CODE"].'</label>';
			echo '<input type="text" name="carEngineCode" class="form-control" id="input1"';
				echo 'value="';
				if(isset($_SESSION['code'])){echo $_SESSION['code'];}
				echo '">';
		echo '</div>';
		echo '</div>';
	}
	//part type 
	if(isset($_SESSION['type']) & $_SESSION['type'] == 'part')
	{
		echo '<div class="row">';
			echo '<div class="form-group col-sm-3">';
				echo '<label for="input3">'.$lang['SEARCHREQUEST_TYPE_PART'].'</label>';
					echo '<select class="form-control" id="carPart" name="carPart">';
						echo '<option value="">'.$lang['SELECT_PART'].'</option>';
							foreach ( $parts as $part ) {
								if (isset ( $_SESSION ['carPart'] ) & $_SESSION ['carPart'] === $part->id) {
									echo '<option selected value=' . $part->id . '>' . $part->descr . '</option>';
								} else {
									echo '<option value=' . $part->id . '>' . $part->descr . '</option>';
								}
							}
				
				echo '</select>';
			echo '</div>';
			echo '<div class="form-group col-sm-9">';
				echo '<label for="input4">'.$lang['SEARCHREQUEST_DETAILS'].'</label>';
					echo '<textarea name="details" class="form-control" rows="6" id="details"';
					echo 'id="input4">';
						if(isset($_SESSION['details'])){echo $_SESSION['details'];}
					echo '</textarea>';
			echo '</div>';
		echo '</div>';
	}
	?>
	<div class="row">
		<div class="form-group col-lg-12">
			<input type="hidden" name="searchRequestDetails" value="contact">
			<button type="submit" name="searchRequest" class="btn btn-primary"><?php echo $lang['SEARCHREQUEST_SAVE']; ?></button>
		</div>
	</div>
</form>