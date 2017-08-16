    <!-- BEGIN PAGE HEADER-->
    <!-- BEGIN PAGE BAR -->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="<?=base_url()?>">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Form Essay</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE BAR -->
    <!-- BEGIN PAGE TITLE-->
    <h3 class="page-title"> <!-- Form Essay
        <small>add new essay</small> -->
    </h3>
    <!-- END PAGE TITLE-->
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered" id="form_wizard_1">
                <div class="portlet-title">
                    <div class="caption">
                        <i class=" icon-layers font-green"></i>
                        <span class="caption-subject font-green bold uppercase"> Form Essay Wizard -
                            <span class="step-title"> Step 1 of 3 </span>
                        </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" action="#" id="submit_form" method="POST">
                        <div class="form-wizard">
                            <div class="form-body">
                                <ul class="nav nav-pills nav-justified steps">
                                    <li>
                                        <a href="#tab1" data-toggle="tab" class="step">
                                            <span class="number"> 1 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Author Form </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab2" data-toggle="tab" class="step">
                                            <span class="number"> 2 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Essay Form </span>
                                        </a>
                                    </li>
<!--                                     <li>
                                        <a href="#tab3" data-toggle="tab" class="step">
                                            <span class="number"> 3 </span>
                                            <span class="desc">
                                                <i class="fa fa-check"></i> Confirm </span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div id="bar" class="progress progress-striped" role="progressbar">
                                    <div class="progress-bar progress-bar-success"> </div>
                                </div>
                                <div class="tab-content">
                                    <div class="alert alert-danger display-none">
                                        <button class="close" data-dismiss="alert"></button> You have some form errors. Please check below. </div>
                                    <div class="alert alert-success display-none">
                                        <button class="close" data-dismiss="alert"></button> Your form validation is successful! </div>
                                    <div class="tab-pane" id="tab1">
                                        <h3 class="block">Provide your profile details</h3>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">NIM
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="nim" id="nim"/>
                                                <span class="help-block"> Provide your nim </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Fullname
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="fullname" id="fullname" />
                                                <span class="help-block"> Provide your fullname </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Prodi 
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <select name="prodi" id="prodi_list" class="form-control">
                                                    <option value=""></option>
                                                    <option value="AF">Prodi 1</option>
                                                    <option value="AL">Prodi 2</option>
                                                    <option value="DZ">Prodi 3</option>
                                                    <option value="AS">Prodi 4</option>
                                                    <option value="AD">Prodi 5</option>
                                                    <option value="AO">Prodi 6</option>
                                                </select>
                                                <span class="help-block"> Provide your prodi </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Phone Number
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="phone" />
                                                <span class="help-block"> Provide your phone number </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="email" />
                                                <span class="help-block"> Provide your email address </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="form-group">    
                                            <label class="control-label col-md-3">Title of Essay
                                                <span class="required"> * </span>
                                            </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" name="email" />
                                                <span class="help-block"> Provide your title essay </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Details</label>
                                            <div class="col-md-4">
                                                <textarea class="form-control" rows="3" name="remarks"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="javascript:;" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Back </a>
                                        <a href="javascript:;" class="btn btn-outline green button-next"> Continue
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <a href="javascript:;" class="btn green button-submit"> Submit
                                            <i class="fa fa-check"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>