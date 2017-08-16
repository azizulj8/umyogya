<div class="tab-pane" id="tab_6">
	<div class="portlet box green-haze">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-doc"></i>Add New Schedule
			</div>
<!-- 			<div class="tools">
				<a href="javascript:;" class="collapse">
				</a>
				<a href="#portlet-config" data-toggle="modal" class="config">
				</a>
				<a href="javascript:;" class="reload">
				</a>
				<a href="javascript:;" class="remove">
				</a>
			</div> -->
		</div>
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			<form action="<?=base_url('save_schedule')?>" method="POST" class="form-horizontal form-bordered form-row-stripped">
            <!-- <?php echo form_open_multipart('save_form','class="form-horizontal form-bordered" id="form_sample_1"');?> -->
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">Title</label>
						<div class="col-md-9">
							<input type="text" placeholder="small" class="form-control" name="title" />
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Status</label>
						<div class="col-md-9">
							<select class="form-control select2_category" name="status">
								<option value="Active">Active</option>
								<option value="Disable">Disable</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Date Range</label>
						<div class="col-md-4">
							<div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
								<input type="text" class="form-control" name="from">
								<span class="input-group-addon">
								to </span>
								<input type="text" class="form-control" name="to">
							</div>
							<!-- /input-group -->
							<span class="help-block">
							Select date range </span>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</form>
			<!-- END FORM-->
		</div>
	</div>
</div>