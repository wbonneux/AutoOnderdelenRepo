<form role="form" method="POST"
	action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="form-group col-lg-4">
		<label for="input1"><?php echo $lang['SEARCHREQUEST_BRAND']; ?></label>
		<!-- 		<input type="text" name="contact_name" class="form-control" -->
		<!-- 			id="input1"> -->
		
		<select class="form-control" id="brand" name="brand">
			<option value=''><?php echo $lang['SELECT_BRAND']; ?></option>
			<?php
			foreach ( $brands as $brand ) {
				if(isset($_SESSION['brand']) & $_SESSION['brand'] === $brand->id){
					echo '<option selected value=' . $brand->id . '>' . $brand->descr . '</option>';
				}else{
					echo '<option value=' . $brand->id . '>' . $brand->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input2"><?php echo $lang['SEARCHREQUEST_MODEL']; ?></label>
		<!-- 		<input type="email" name="contact_email" class="form-control" -->
		<!-- 			id="input2"> -->
		<select id="model" name="model" class="form-control">
			<?php 
			if(isset($_SESSION['brand'])){
				echo "<option value=''>".$lang['SELECT_MODEL']."</option>";
			}else{
				echo "<option value=''>".$lang['NO_SELECT_BRAND']."</option>";
			}
			foreach ( $models as $model ) {
				if(isset($_SESSION['model']) & $_SESSION['model'] === $model->id){
					echo '<option selected value=' . $model->id . '>' . $model->descr . '</option>';
				}else{
					echo '<option value=' . $model->id . '>' . $model->descr . '</option>';
				}
			}
			?>
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_BUILDYEAR']; ?></label>
		<select class="form-control" id="buildYear" name="buildYear">
			<option value=''><?php echo $lang['SELECT_BUILDYEAR']; ?></option>
			<?php
			foreach ( $years as $year ) {

				if(isset($_SESSION['buildYear']) & $_SESSION['buildYear'] === $year->id){
					echo '<option selected value=' . $year->id . '>' . $year->descr . '</option>';
				}else{
					echo '<option value=' . $year->id . '>' . $year->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_BUILDMONTH']; ?></label>
		<select class="form-control" id="buildMonth" name="buildMonth">
			<option value=''><?php echo $lang['SELECT_BUILDMONTH']; ?></option>
			<?php
			foreach ( $months as $month ) {
				if(isset($_SESSION['buildMonth']) & $_SESSION['buildMonth'] === $month->id){
					echo '<option selected value=' . $month->id . '>' . $month->descr . '</option>';
				}else{
					echo '<option value=' . $month->id . '>' . $month->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_CAREXECUTION']; ?></label>
		<select class="form-control" id="carexecution" name="carexecution">
			<option value=''><?php echo $lang['SELECT_CAREXECUTION']; ?></option>
			<?php
			foreach ( $executions as $execution ) {
				if(isset($_SESSION['carexecution']) & $_SESSION['carexecution'] === $execution->id){
					echo '<option selected value=' . $execution->id . '>' . $execution->descr . '</option>';
				}else{
					echo '<option value=' . $execution->id . '>' . $execution->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_DOORNUMBER']; ?></label>
		<select class="form-control" id="cardoors" name="cardoors">
			<option value=''><?php echo $lang['SELECT_DOORNUMBER']; ?></option>
			<?php
			foreach ( $doors as $door ) {
				if(isset($_SESSION['cardoors']) & $_SESSION['cardoors'] === $door->id){
					echo '<option selected value=' . $door->id . '>' . $door->descr . '</option>';
				}else{
					echo '<option value=' . $door->id . '>' . $door->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_GEARBOX']; ?></label>
		<select class="form-control" id="cargearbox" name="cargearbox">
			<option value=''><?php echo $lang['SELECT_GEARBOX']; ?></option>
			<?php
			foreach ( $gearboxes as $gearbox ) {
				if(isset($_SESSION['cargearbox']) & $_SESSION['cargearbox'] === $gearbox->id){
					echo '<option selected value=' . $gearbox->id . '>' . $gearbox->descr . '</option>';
				}else{
					echo '<option value=' . $gearbox->id . '>' . $gearbox->descr . '</option>';
				}
			}
			?>	
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_DRIVETYPE']; ?></label>
		<select class="form-control" id="cardrivetype" name="cardrivetype">
			<option value=''><?php echo $lang['SELECT_DRIVETYPE']; ?></option>
			<?php
			foreach ( $drivetypes as $drivetype ) {
				if(isset($_SESSION['cardrivetype']) & $_SESSION['cardrivetype'] === $drivetype->id){
					echo '<option selected value=' . $drivetype->id . '>' . $drivetype->descr . '</option>';
				}else{
					echo '<option value=' . $drivetype->id . '>' . $drivetype->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="form-group col-lg-4">
		<label for="input3"><?php echo $lang['SEARCHREQUEST_ENGINETYPE']; ?></label>
		<select class="form-control" id="carenginetype" name="carenginetype">
			<option value=''><?php echo $lang['SELECT_ENGINETYPE']; ?></option>
			<?php
			foreach ( $enginetypes as $enginetype ) {
				if(isset($_SESSION['carenginetype']) & $_SESSION['carenginetype'] === $enginetype->id){
					echo '<option selected value=' . $enginetype->id . '>' . $enginetype->descr . '</option>';
				}else{
					echo '<option value=' . $enginetype->id . '>' . $enginetype->descr . '</option>';
				}
			}
			?>			
		</select>
	</div>
	<div class="clearfix"></div>
	<div class="form-group col-lg-12">
		<label for="input4"><?php echo $lang['SEARCHREQUEST_DETAILS']; ?></label>
		<textarea name="details" class="form-control" rows="6" id="details" id="input4"><?php if(isset($_SESSION['details'])){echo $_SESSION['details'];}?></textarea>
	</div>
	<div class="form-group col-lg-12">
		<input type="hidden" name="searchRequestDetails" value="contact">
		<button type="submit" class="btn btn-primary"><?php echo $lang['SEARCHREQUEST_SAVE']; ?></button>
	</div>
</form>