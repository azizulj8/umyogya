<div class="tab-pane" id="tab_6">
	<div class="portlet box green-haze">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-doc"></i>Add New Essay
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
			<!-- <form action="#" class="form-horizontal form-bordered form-row-stripped"> -->
                <?php 
                echo form_open_multipart('save_admessay','class="form-horizontal form-bordered" id="form_sample_1"');
                ?>
				<div class="form-body">
					<div class="form-group">
						<label class="control-label col-md-3">NIM</label>
						<div class="col-md-9">
						<input name="nim" type="text" placeholder="NIM" class="form-control"/>
						<!-- <input name="nim" type="text" id="typeahead_example_1" name="typeahead_example_1" class="form-control"/> -->
						</div>
					</div>
<!-- 					<div class="form-group">
						<label class="control-label col-md-3">Nama</label>
						<div class="col-md-9">
							<input name="name" type="text" placeholder="Nama" class="form-control"/>
						</div>
					</div> -->
                    <div class="form-group">
                        <label class="col-md-3 control-label">Status Skripsi
                                <span class="required"> * </span>
                        </label>
                        <div class="col-md-9">
                            <select name="status" class="form-control">
                                <option value="Reguler">Reguler</option>
                                <option value="Continues">Continues</option>
                                <option value="Exchange">Exchange</option>
                            </select>
                        </div>
                    </div>
					<div class="form-group">
						<label class="control-label col-md-3">Topik / Isu</label>
						<div class="col-md-9">
							<textarea name="topic" class="form-control" placeholder="Topik / Isu"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kawasan</label>
						<div class="col-md-9">
							<input name="area" type="text" class="form-control" placeholder="Kawasan / Area">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keyword</label>
						<div class="col-md-9">
							<!-- <input name="keyword" type="hidden" class="form-control select2_sample3"> -->
                            <input name="keyword" type="text" class="form-control" placeholder="Contoh: Haji Agus Salim, Negara Berdaulat, Nasioanalisme"> <span class="required"> * pisahkan dengan koma (,)</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Judul Skripsi</label>
						<div class="col-md-9">
							<input name="title" type="text" class="form-control" placeholder="Judul Skripsi">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3">Lampiran File</label>
						<div class="col-md-9">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="input-group input-large">
									<div class="form-control uneditable-input span3" data-trigger="fileinput">
										<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
										</span>
									</div>
									<span class="input-group-addon btn green-haze btn-file">
									<span class="fileinput-new">
									Select file </span>
									<span class="fileinput-exists">
									Change </span>
									<input type="file" name="file">
									</span>
									<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
									Remove </a>
								</div>
							</div>
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