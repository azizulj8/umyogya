<div class="portlet box green-haze">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-user"></i>Add New Scholar
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="<?=base_url('save_scholar')?>" method="POST" class="form-horizontal" onSubmit="">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">NIM</label>
							<div class="col-md-9">
							<input value="<?=$nim?>" type="text" name="nim" id="firstName" class="form-control" placeholder="NIM">
							</div>
<!-- 																<span class="help-block">
							This is inline help </span> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Full Name</label>
							<div class="col-md-9">
							<input value="<?=$fullname?>" type="text" name="name" id="firstName" class="form-control" placeholder="Full Name">
							</div>
<!-- 																<span class="help-block">
							This is inline help </span> -->
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Gender</label>
							<div class="col-md-9">
							<select name="sex" class="form-control">
								<option value="Male" <?php if($sex == 'Male') echo 'selected';?>>Male</option>
								<option value="Female" <?php if($sex == 'Female') echo 'selected';?>>Female</option>
							</select>
							</div>
<!-- 																<span class="help-block">
							Select your gender </span> -->
						</div>
					</div>
				</div>
					<!--/span-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Date of Birth</label>
							<div class="col-md-9">
							<!-- <input type="text" class="form-control" placeholder="dd/mm/yyyy"> -->
							<input name="birthdate" class="form-control form-control-inline input-medium date-picker" size="16" type="text" value="<?=$birthdate?>"/>
							<span class="help-block">
							Select date </span>
							</div>
						</div>
					</div>
					<!--/span-->
<!-- 					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">City</label>
							<div class="col-md-9">
							<input name="city" type="text" class="form-control">
							</div>
						</div>
					</div> -->
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Address</label>
							<div class="col-md-9">
							<!-- <input name="address" type="text" class="form-control"> -->
							<textarea rows="4" name="address" class="form-control"><?=$address?></textarea>
							</div>
						</div>
					</div>
				</div>
				<!--/row-->
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Study Program</label>
							<div class="col-md-9">
							<select name="program" class="form-control" data-placeholder="Choose a Category" tabindex="1">
								<option value="Regular" <?php if($program == 'Regular') echo 'selected';?>>Regular</option>
								<option value="IPIREL" <?php if($program == 'IPIREL') echo 'selected';?>>IPIREL</option>
							</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Competence</label>
							<div class="col-md-9">
							<select name="comp" class="form-control" data-placeholder="Choose a Category" tabindex="1">
								<option value="Diploma" <?php if($comp == 'Diploma') echo 'selected';?>>Diploma</option>
								<option value="MNC" <?php if($comp == 'MNC') echo 'selected';?>>MNC</option>
								<option value="LSM" <?php if($comp == 'LSM') echo 'selected';?>>LSM</option>
							</select>
							</div>
						</div>
					</div>
				</div>
					<!--/span-->
			</div>
			<div class="form-actions right">
				<a href="<?=base_url('scholar')?>"><button type="button" class="btn default">Cancel</button></a>
				<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
			</div>
		</form>
		<!-- END FORM-->	       
	</div>
</div>