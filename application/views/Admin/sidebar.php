<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
		<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
		<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
		<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<ul class="page-sidebar-menu page-sidebar-menu-compact page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<li class="start <?=$dashboard?>">
				<a href="<?=base_url('admin')?>">
				<i class="icon-home"></i>
				<span class="title">Dashboard</span>
				<?php
				if($dashboard){
					echo '<span class="selected"></span>';
				}
				?>
				</a>
			</li>
			<li <?=$masters?>>
				<a href="javascript:;">
				<i class="icon-folder"></i>
				<span class="title">Masters</span>
				<?php
				if($masters){
					echo '<span class="selected"></span>';
				}else{
					echo '<span class="arrow "></span>';
				}
				?>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?=base_url('essays')?>">
						<i class="icon-doc"></i>
						Essay List</a>
					</li>
					<li>
						<a href="<?=base_url('scholars')?>">
						<i class="icon-user"></i>
						Scholars</a>
					</li>
					<li>
						<a href="<?=base_url('bujsforms')?>">
						<i class="icon-docs"></i>
						Change BUJS Form</a>
					</li>
				</ul>
			</li>
			<li <?=$setting?>>
				<a href="javascript:;">
				<i class="icon-settings"></i>
				<span class="title">Setting</span>
				<?php
				if($setting){
					echo '<span class="selected"></span>';
				}else{
					echo '<span class="arrow "></span>';
				}
				?>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="<?=base_url('schedule')?>">
						<i class="icon-calendar"></i>
						Schedules</a>
					</li>
					<li>
						<a href="<?=base_url('users')?>">
						<i class="icon-user"></i>
						Admin Users</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>