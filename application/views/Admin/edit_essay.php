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
						<input name="nim" value="<?=$nim?>" type="text" placeholder="NIM" class="form-control"/>
						<input name="id" value="<?=$id?>" type="hidden" class="form-control"/>
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
                                <option value="Reguler" <?php if($status == 'Reguler') echo 'selected';?>>Reguler</option>
                                <option value="Continues" <?php if($status == 'Continues') echo 'selected';?>>Continues</option>
                                <option value="Exchange" <?php if($status == 'Exchange') echo 'selected';?>>Exchange</option>
                            </select>
                        </div>
                    </div>
					<div class="form-group">
						<label class="control-label col-md-3">Topik / Isu</label>
						<div class="col-md-9">
							<textarea name="topic" class="form-control" placeholder="Topik / Isu"><?=$topic?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Kawasan</label>
						<div class="col-md-9">
							<input name="area" value="<?=$area?>" type="text" class="form-control" placeholder="Kawasan / Area">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Keyword</label>
						<div class="col-md-9">
							<!-- <input name="keyword" type="hidden" class="form-control select2_sample3"> -->
                            <input name="keyword" type="text" class="form-control" placeholder="Contoh: Haji Agus Salim, Negara Berdaulat, Nasioanalisme" value="<?=$keyword?>"> <span class="required"> * pisahkan dengan koma (,)</span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3">Judul Skripsi</label>
						<div class="col-md-9">
							<input name="title" value="<?=$title?>" type="text" class="form-control" placeholder="Judul Skripsi">
						</div>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green"><i class="fa fa-check"></i> Submit</button>
							<a href="<?=base_url('essay')?>"><button type="button" class="btn default">Cancel</button></a>
						</div>
					</div>
				</div>
			</form>
			<!-- END FORM-->
		</div>
	</div>
</div>