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
							<input type="text" name="nim" id="firstName" class="form-control" placeholder="NIM">
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
							<input type="text" name="name" id="firstName" class="form-control" placeholder="Full Name">
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
								<option value="Male">Male</option>
								<option value="Female">Female</option>
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
							<input name="birthdate" class="form-control form-control-inline input-medium date-picker" size="16" type="text" value=""/>
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
							<textarea rows="4" name="address" class="form-control"></textarea>
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
								<option value="Regular">Regular</option>
								<option value="IPIREL">IPIREL</option>
							</select>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Competence</label>
							<div class="col-md-9">
							<select name="comp" class="form-control" data-placeholder="Choose a Category" tabindex="1">
								<option value="Diploma">Diploma</option>
								<option value="MNC">MNC</option>
								<option value="LSM">LSM</option>
							</select>
							</div>
						</div>
					</div>
				</div>
					<!--/span-->
			</div>
			<div class="form-actions right">
				<button type="button" class="btn default">Cancel</button>
				<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
			</div>
		</form>
		<!-- END FORM-->	       
	</div>
</div>