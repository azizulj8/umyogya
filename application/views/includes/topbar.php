        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="<?=base_url()?>">
                        <img src="assets/global/img/logo.png" alt="logo" class="logo-default" /> </a>
                    <?php
                    if($page_type=="admin"){
                        echo '<div class="menu-toggler sidebar-toggler">
                                                            <span></span>
                                                        </div>';
                    }
                    ?>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
              <!-- BEGIN TOP NAVIGATION MENU -->
                <?php
                if($page_type=="admin"){
                    $this->load->view('includes/top_menu'); 
                }else{
                    $this->load->view('includes/top_client');
                }
                ?>
                <!-- END TOP NAVIGATION MENU -->

            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->