<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>HI UMY</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/> -->
<?php 
	include 'assets/add_head/'.$add_head.'.php';
?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?=base_url()?>assets/global/img/favicon.ico"/>
<?php
$admin=$this->session->userdata('admin');
?>
<style type="text/css">
.page-header.navbar .page-logo {
    background: #1f2a38;
}
</style>
<?
// }
?>
</head>
<body class="page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo page-header-fixed">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="<?=base_url('admin')?>">
			<img src="<?=base_url()?>assets/global/img/logo.png" alt="logo" class="logo-default"/>
			</a>
<!-- <?php
if(!empty($admin)){
?>
			<div class="menu-toggler sidebar-toggler">
				DOC: Remove the above "hide" to enable the sidebar toggler button on header
			</div>
<?php
}
?> -->
		</div>
		<!-- END LOGO -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user">
						<?php
						if(!empty($this->session->userdata('username'))){
						?>
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="<?=base_url()?>assets/admin/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="<?=base_url('logout')?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
						<?php
						}else{
						?>
						<a href="<?=base_url('login')?>" class="dropdown-toggle">
						<i class="icon-login"></i> Login </a>
						<?php
							}
						?>
<!-- 						<img alt="" class="img-circle" src="<?=base_url()?>assets/admin/img/avatar3_small.jpg"/>
						<span class="username username-hide-on-mobile">
						Nick </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="<?=base_url('logout')?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul> -->
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<?php
if(empty($admin)){
?>
<style type="text/css">
@media (min-width: 992px){
	.page-content-wrapper .page-content{
		margin-left: 0px;
	}
	.page-header.navbar .page-top {
	    box-shadow: 0px 1px 10px 0px rgba(50, 50, 50, 0.2);
	    background: #1f2a38;
	}
}
@media (max-width: 767px){
	.page-header.navbar {
		height: 0px;
	}
	.page-header.navbar {
	    background: #1f2a38;
	}
}

.page-header.navbar .page-top {
    box-shadow: 0px 1px 10px 0px rgba(50, 50, 50, 0.2);
    /*background: #1f2a38;*/
}

</style>
<?php
}
?>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<!-- <div class="container"> -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<!-- 		<?php 
		if(!empty($admin)){
			$this->load->view('Admin/sidebar');
		}
		?> -->
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN PAGE HEADER-->
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<?=$head_bread?>
							<i class="fa fa-angle-right"></i>
							<a href="<?=base_url($link)?>"><?=$breadcrum?></a>
							<i class="fa fa-angle-right"></i>
							<!-- <a href="<?=base_url($link)?>"><?=$breadcrum?></a> -->
						</li>
					</ul>
					<ul class="page-breadcrumb" style="float: right">
                        <li>
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                            <a target="_blank" href="http://hi.umy.ac.id" style="font-style:none;font-family: none;">HI UMY</a>
                        </li>
                        &nbsp;
                        <li>
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                            <a target="_blank" href="http://umy.ac.id" style="font-style:none;font-family: none;">Univeristas Muhammadiyah Yogyakarta</a>
                        </li>
                    </ul>
				</div>
				<!-- END PAGE HEADER-->
				<?php 
					// $this->load->view('Admin/content');
					$this->load->view($content);
				?>
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	<!-- </div> -->
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Metronic.
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<?php 
	include 'assets/add_js/'.$add_js.'.php';
?>
</body>
<!-- END BODY -->
</html>