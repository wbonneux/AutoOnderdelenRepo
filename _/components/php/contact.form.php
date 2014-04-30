<div class="row">
	<div class="col-lg-12">
		<h2><?php echo $lang['SEARCHCONTACT_TITLE']; ?></h2>
		<h5><?php echo $lang['SEARCHCONTACT_SUBTITLE']; ?></h5>
	</div>
</div>
<div class="row">
	<form method="POST"
		action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<div id="itemRows">
			<!-- 		<p id="rowNum1"> -->
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_NAME']; ?></label>
					<input type="text" name="contact_name" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_name'])){echo $_SESSION['contact_name'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_FNAME']; ?></label>
					<input type="text" name="contact_fname" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_fname'])){echo $_SESSION['contact_fname'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_COMPNAME']; ?></label>
					<input type="text" name="contact_compname" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_compname'])){echo $_SESSION['contact_compname'];}?>">
				</div>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_TEL']; ?></label>
					<input type="text" name="contact_tel" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_tel'])){echo $_SESSION['contact_tel'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_GSM']; ?></label>
					<input type="text" name="contact_gsm" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_gsm'])){echo $_SESSION['contact_gsm'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_FAX']; ?></label>
					<input type="text" name="contact_fax" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_fax'])){echo $_SESSION['contact_fax'];}?>">
				</div>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_STREET']; ?></label>
					<input type="text" name="contact_street" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_street'])){echo $_SESSION['contact_street'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_HOUSENR']; ?></label>
					<input type="text" name="contact_housenr" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_housenr'])){echo $_SESSION['contact_housenr'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_HOUSEBUS']; ?></label>
					<input type="text" name="contact_housebus" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_housebus'])){echo $_SESSION['contact_housebus'];}?>">
				</div>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_POSTALCODE']; ?></label>
					<input type="text" name="contact_postalcode" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_postalcode'])){echo $_SESSION['contact_postalcode'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_COMMUNITY']; ?></label>
					<input type="text" name="contact_community" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_community'])){echo $_SESSION['contact_community'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_STATE']; ?></label>
					<input type="text" name="contact_state" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_state'])){echo $_SESSION['contact_state'];}?>">
				</div>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_COUNTRY']; ?></label>
					<!-- <input type="text" name="contact_country" class="form-control"
						id="input1"
						value="<?php //if(isset($_SESSION['contact_country'])){echo $_SESSION['contact_country'];}?>"-->

					<select class="form-control" id="contact_country" name="contact_country">
						<option value=''><?php echo $lang['SELECT_COUNTRY']; ?></option>
						<?php
						foreach ( $countries as $country ) {
							if (isset ( $_SESSION ['contact_country'] ) & $_SESSION ['contact_country'] === $country->id) {
								echo '<option selected value=' . $country->id . '>' . utf8_encode($country->descr) . '</option>';
							} else {
								echo '<option value=' . $country->id . '>' . utf8_encode($country->descr) . '</option>';
							}
						}
						?>			
					</select>
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_EMAIL']; ?></label>
					<input type="text" name="contact_email" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_email'])){echo $_SESSION['contact_email'];}?>">
				</div>
				<div class="form-group col-lg-4">
					<label for="input1"><?php echo $lang['SEARCHCONTACT_EMAILCONFIRM']; ?></label>
					<input type="text" name="contact_emailconfirm" class="form-control"
						id="input1"
						value="<?php if(isset($_SESSION['contact_emailconfirm'])){echo $_SESSION['contact_emailconfirm'];}?>">
				</div>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<h4><?php echo $lang['USERREPLY_TITLE']; ?></h4>
			</div>
			<div id="rowNum1" class="row col-lg-12" style="padding-bottom: 0px;">
				<div class="form-group col-lg-1">
					<input type="checkbox" name="userReplyGSM" id="userReplyGSM"
						<?php if(isset($_SESSION['userReplyGSM']) && $_SESSION['userReplyGSM'] == 1){echo "checked";}else{echo "";}?>>&nbsp;
					<label for="input1"><?php echo $lang['USERREPLY_GSM']; ?></label>
				</div>
				<div class="form-group col-lg-2">
					<input type="checkbox" name="userReplyPhone" id="userReplyPhone"
						<?php if(isset($_SESSION['userReplyPhone']) && $_SESSION['userReplyPhone'] == 1){echo "checked";}else{echo "unchecked";}?>>&nbsp;
					<label for="input1"><?php echo $lang['USERREPLY_PHONE']; ?></label>
				</div>
				<div class="form-group col-lg-2">
					<input type="checkbox" name="userReplyEmail" id="userReplyEmail"
						<?php if(isset($_SESSION['userReplyEmail']) && $_SESSION['userReplyEmail'] == 1){echo "checked";}else{echo "unchecked";}?>>&nbsp;
					<label for="input1"><?php echo $lang['USERREPLY_EMAIL']; ?></label>
				</div>
			</div>
		</div>

</div>
<div id="itemRows">
	<div class="row col-lg-12">
		<div class="form-group col-lg-12">
			<p>
				<input type="submit" name="userContact" class="btn btn-primary"
					value="<?php echo $lang['SEARCHPART_SAVE']; ?>"> <input
					type="submit" name="backSearchPart" class="btn btn-primary"
					value="<?php echo $lang['BACK']; ?>" />
			</p>
		</div>
	</div>
</div>
</form>
</div>