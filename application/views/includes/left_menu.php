            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
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
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
<!--                         <li class="sidebar-search-wrapper">
                            <form class="sidebar-search  sidebar-search-bordered sidebar-search-solid" action="page_general_search_3.html" method="POST">
                                <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                                </div>
                            </form>
                        </li> -->
                        <li class="nav-item start <?php if ($menu_active=='admin') echo "active open";?>">
                            <a href="<?=base_url('admin')?>" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <!-- <span class="selected"></span> -->
                                <?php if ($menu_active=='admin') echo "<span class=\"selected\"></span>" ;?>
<!--                                 <span class="arrow open"></span> -->
                            </a>
                        </li>
<!--                         <li class="heading">
                            <h3 class="uppercase">Skripsi</h3>
                        </li> -->
                        <li class="nav-item <?php if ($menu_active=='essay_list') echo "active open";?>">
                            <a href="<?=base_url('essay_list')?>" class="nav-link nav-toggle">
                                <i class="icon-briefcase"></i>
                                <span class="title">Data Skripsi</span>
                                <?php if ($menu_active=='essay_list') echo "<span class=\"selected\"></span>"; ?>
                            </a>
<!--                             <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="table_static_basic.html" class="nav-link ">
                                        <span class="title">Judul Skripsi</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="table_static_responsive.html" class="nav-link ">
                                        <span class="title">Data Author</span>
                                    </a>
                                </li>
                            </ul> -->
                        </li>
<!--                         <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Reports</span>
                            </a>
                        </li> -->
                        <li class="heading">
                            <h3 class="uppercase">Settings</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">User</span>
                            </a>                        
                            <li class="nav-item  <?php if ($menu_active=='form_list' || $menu_active=='site' || $menu_active=='app_setting') echo "active open";?>">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">System</span>
                                <?php if ($menu_active=='form_list' || $menu_active=='site' || $menu_active=='app_setting') echo "<span class=\"selected\"></span>"; ?>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  <?php if ($menu_active=='app_setting') echo "active open";?>">
                                    <a href="<?=base_url('app_setting')?>" class="nav-link ">
                                        <span class="title">Application Form</span>
                                    </a>
                                </li>
                                <li class="nav-item  <?php if ($menu_active=='form_list') echo "active open";?>">
                                    <a href="<?=base_url('form_setting')?>" class="nav-link ">
                                        <span class="title">Form Scedhule</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>