<div id="errors">
</div>
<form role="form" method="post" enctype="multipart/form-data">
	<div id="itemRows">
		<!-- 		<p id="rowNum1"> -->
		<div id="rowNum1" class=" row col-lg-12" style="padding-bottom: 0px;">
		
			<div class="form-group col-lg-3" style="margin-bottom: 5px;">
				<label for="input1"><?php echo $lang['SEARCHPART_PART']; ?></label>
				<input type="text" name="add_qty1" class="form-control" size="4"
					id="add_qty1" value="<?php if(isset($_SESSION['add_qty1'])){echo $_SESSION['add_qty1'];}?>"/>
			</div>
			<div class="form-group col-lg-3" style="margin-bottom: 5px;">
				<label for="input2"><?php echo $lang['SEARCHPART_DETAIL']; ?></label>
				<input type="text" name="add_name1" class="form-control" id="add_name1"
				value="<?php if(isset($_SESSION['add_name1'])){echo $_SESSION['add_name1'];}?>" />
			</div>
			<div class="col-lg-3 form-group" style="margin-bottom: 5px;">
				<label for="input3"><?php echo $lang['SEARCHPART_PHOTO']; ?></label>
				<input type="file" name="add_file1" id="add_file1" class="form-control"><br>
			</div>
			<div class="form-group col-lg-3"
				style="margin-bottom: 5px; margin-top: 25px">
				<input onclick="addRow(this.form);" type="button"
					value="<?php echo $lang['SEARCHPART_ADDROW']; ?>" />
			</div>
		</div>
		<!-- 		</p> -->
	</div>
	<div class="panel panel-default">
		<div class="panel-heading"><?php echo $lang['SEARCHPART_SELECTEDPARTS_TITLE']; ?></div>
		<br>
		<div id="selectedRows">
		
		</div>
		<div class="form-group col-lg-12">
				<p>
					<input type="submit" name="searchRequestArticle" class="btn btn-primary"
						value="<?php echo $lang['SEARCHPART_SAVE']; ?>">
					<!-- <input type="submit" name="bachSearchRequestDetails" class="btn btn-primary" value="<?php //echo $lang['BACK_SEARCHDETAILS']; ?>" onclick="window.location='zoekopdracht.php';" /> --> 
					<input type="submit" name="backSearchRequestDetails" class="btn btn-primary" value="<?php echo $lang['BACK_SEARCHDETAILS']; ?>" />
				</p>
		</div>
	</div>
	<div id="itemRows">
		<div class="row col-lg-12">
			
		</div>
	</div>
</form>

<script type="text/javascript">
var rowNum = 1;
function addRow(frm) {
	
	if($('#add_qty1').val() == '' ){
		var error = '<div id="reqPart" class="alert alert-warning"<?php echo $lang['ERR_REQUIRED'].$lang['SEARCHPART_PART']; ?></div>';
		if($("#reqPart").length == 0) {
			jQuery('#errors').append(error);
			}
		
	   }
	else{
		jQuery('#reqPart').remove();
	rowNum ++;
	//var row = '<p id="rowNum'+rowNum+'">Item quantity: <input type="text" name="qty[]" size="4" value="'+frm.add_qty.value+'"> Item name: <input type="text" name="name[]" value="'+frm.add_name.value+'"><input type="file" name="file[]" value="'+frm.add_file.value+'" id="file[]"><br> <input type="button" value="Remove" onclick="removeRow('+rowNum+');"></p>';
	//var row = '<div id="rowNum'+rowNum+'" class=" row col-lg-12"><div class="form-group col-lg-3" style="margin-bottom:5px;"><label for="input1"><?php echo $lang['SEARCHPART_PART']; ?></label><input type="text" name="qty[]" class="form-control" size="4" value="'+frm.add_qty.value+'" id="input1" /></div><div class="form-group col-lg-3" style="margin-bottom:5px;"><label for="input2"><?php echo $lang['SEARCHPART_DETAIL']; ?></label><input type="text" name="name[]" value="'+frm.add_name.value+'" class="form-control" id="input2" /></div><div class="col-lg-3 form-group"><label for="input3"><?php echo $lang['SEARCHPART_PHOTO']; ?></label><input type="file" name="add_file[]" id="input3" class="form-control"/><span>"'+frm.add_file.value+'"</span><br></div><div class="form-group col-lg-3" style="margin-bottom:5px;margin-top:25px"><input type="button" value="<?php echo $lang['SEARCHPART_REMOVEROW']; ?>" onclick="removeRow('+rowNum+');"></div></div>';
	var row = '<div id="rowNum'+rowNum+'" class=" row col-lg-12"><div class="form-group col-lg-3" style="margin-bottom:5px;"><label for="input1"><?php echo $lang['SEARCHPART_PART']; ?></label><input type="text" name="add_qty'+rowNum+'" class="form-control" disabled size="4" value="'+frm.add_qty1.value+'" id="add_qty'+rowNum+'" /></div><div class="form-group col-lg-3" style="margin-bottom:5px;"><label for="input2"><?php echo $lang['SEARCHPART_DETAIL']; ?></label><input type="text" name="add_name'+rowNum+'" disabled value="'+frm.add_name1.value+'" class="form-control" id="add_name'+rowNum+'" /></div><div class="col-lg-3 form-group"><label for="input3"><?php echo $lang['SEARCHPART_PHOTO']; ?></label><input type="text" disabled name="add_file'+rowNum+'" value="'+frm.add_file1.value+'" class="form-control" id="add_file'+rowNum+'" /></div><div class="form-group col-lg-3" style="margin-bottom:5px;margin-top:25px"><input type="button" value="<?php echo $lang['SEARCHPART_REMOVEROW']; ?>" onclick="removeRow('+rowNum+');"></div></div>';
	jQuery('#selectedRows').append(row);
	frm.add_qty1.value = '';
	frm.add_name1.value = '';
	frm.add_file1.value = '';
	}
}

function removeRow(rnum) {
	jQuery('#rowNum'+rnum).remove();
}
</script>