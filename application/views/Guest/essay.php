<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> BUJS Form
    <small> registration</small>
</h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light form-fit bordered">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings font-green"></i>
                    <span class="caption-subject font-green sbold uppercase">BUJS Registration</span>
                </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <!-- <form action="<?=base_url('dashboard_client/save')?>" class="form-horizontal form-bordered" method="POST"> -->
                <?php echo form_open_multipart('save_admessay','class="form-horizontal form-bordered" id="form_sample_1"');?>
                    <div class="form-body">
                        <div class="alert alert-danger display-hide">
                            <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                        <div class="alert alert-success display-hide">
                            <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">NIM
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <input name="nim" data-required="1" type="text" class="form-control" placeholder="NIM " value="<?=$this->session->userdata('nim')?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nama Lengkap
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <input name="full_name" type="text" class="form-control" placeholder="Nama Lengkap " value="<?=$this->session->userdata('fullname')?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Program
                                    <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <select name="program" class="form-control" readonly>
                                    <option value="Reguler" <?php if($this->session->userdata('program') == 'Reguler') echo 'Selected'; ?>>Reguler</option>
                                    <option value="IPIREL" <?php if($this->session->userdata('program') == 'IPIREL') echo 'Selected'; ?>>IPIREL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Kompetensi
                                    <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <select name="kompetensi" class="form-control" readonly>
                                    <option value="Diploma" <?php if($this->session->userdata('komp') == 'Diploma') echo 'Selected'; ?>>Diploma</option>
                                    <option value="MNC" <?php if($this->session->userdata('komp') == 'MNC') echo 'Selected'; ?>>MNC</option>
                                    <option value="LSM" <?php if($this->session->userdata('komp') == 'LSM') echo 'Selected'; ?>>LSM</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat Lengkap
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <textarea name="alamat" class="form-control col-md-3" rows="3"><?=$this->session->userdata('address')?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">No Telp
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-2">
                                <input name="phone" type="text" class="form-control" placeholder="No Telp " value="<?=$this->session->userdata('telp')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <input name="email" type="text" class="form-control" placeholder="Mailing Address " value="<?=$this->session->userdata('email')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">
                                    <span class="required"></span>
                            </label>
                            <div class="col-md-3">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status Skripsi
                                    <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <select name="status" class="form-control">
                                    <option value="Reguler">Reguler</option>
                                    <option value="Continues">Continues</option>
                                    <option value="Exchange">Exchange</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Topik / Isu
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <!-- <input name="isu" type="text" class="form-control" placeholder="Isu "> -->
                                <textarea name="isu" class="form-control col-md-3" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Kawasan
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-3">
                                <input name="kawasan" type="text" class="form-control" placeholder="Indonesia ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Keyword
                                <span class="required"> * (maksimal 3 keyword)</span>
                            </label>
                            <div class="col-md-8">
                                <input name="keyword" type="text" class="form-control" placeholder="Contoh: Haji Agus Salim, Negara Berdaulat, Nasioanalisme"> <span class="required"> * pisahkan dengan koma (,)</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Judul Skripsi
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <input id="typeahead_example_2" name="typeahead_example_2" type="text" class="form-control" placeholder="Judul Skripsi ">
                            </div>
                        </div>
<!--                         <div class="form-group">
                            <label class="control-label col-md-3">Description
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
	                            <textarea name="description" class="form-control col-md-3" rows="3"></textarea>
                            </div>
                        </div> -->
<!--                         <div class="form-group">
                            <label class="control-label col-md-3">Lampiran File
                                <span class="required"> * </span>
                            </label>
                            <div class="col-md-9">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn green btn-file">
                                        <span class="fileinput-new"> Select file </span>
                                        <span class="fileinput-exists"> Change </span>
                                        <input name="file" type="file"> 
                                    </span>
                                    <span class="fileinput-filename"> </span> &nbsp;
                                    <a href="javascript:;" class="close fileinput-exists" data-dismiss="fileinput"> </a>
                                </div>
                                <span>Max 1 Mb</span>
                            </div>
                        </div> -->
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
<!--                                 <a href="javascript:;" class="btn green">
                                    <i class="fa fa-check"></i> Submit</a> -->
                                <a href="javascript:;" class="btn btn-outline grey-salsa">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
