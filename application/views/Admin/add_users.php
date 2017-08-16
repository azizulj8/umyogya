<div class="portlet box green-haze">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-user"></i>Add New Users
		</div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="<?=base_url('save_users')?>" method="POST" class="form-horizontal" onSubmit="">
			<div class="form-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Username</label>
							<div class="col-md-9">
							<input type="text" name="username" id="firstName" class="form-control" placeholder="Username">
							</div>
<!-- 																<span class="help-block">
							This is inline help </span> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Password</label>
							<div class="col-md-9">
							<input type="password" name="passwd" id="firstName" class="form-control" placeholder="Password">
							</div>
<!-- 																<span class="help-block">
							This is inline help </span> -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Status</label>
							<div class="col-md-9">
							<select name="status" class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
								<option value="1">Active</option>
								<option value="2">Disable</option>
							</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions right">
				<button type="button" class="btn default">Cancel</button>
				<button type="submit" class="btn blue"><i class="fa fa-check"></i> Save</button>
			</div>
		</form>
		<!-- END FORM-->

		       
	</div>
</div>