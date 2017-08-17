<div class="portlet box green-haze">
	<div class="portlet-title">
		<div class="caption">
			<i class="fa fa-user"></i>Edit Users
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
							<input type="text" value="<?=$username?>" name="username" id="firstName" class="form-control" placeholder="Username">
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
								<option value="1" <?php if($status == '1') echo 'selected';?>>Active</option>
								<option value="0" <?php if($status == '0') echo 'selected';?>>Disable</option>
							</select>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3">Admin</label>
							<div class="col-md-9">
							<select name="admin" class="select2_category form-control" data-placeholder="Choose a Category" tabindex="1">
								<option value="0" <?php if($admin == '0') echo 'selected';?>>No</option>
								<option value="1" <?php if($admin == '1') echo 'selected';?>>Yes</option>
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