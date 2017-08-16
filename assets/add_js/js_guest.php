<!-- <script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?=base_url()?>assets/global/plugins/respond.min.js"></script>
<script src="<?=base_url()?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?=base_url()?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url()?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?=base_url()?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" src="<?=base_url()?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script> -->
<!-- <script type="text/javascript" src="<?=base_url()?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script> -->
<!-- <script type="text/javascript" src="<?=base_url()?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script> -->
<!-- <script type="text/javascript" src="<?=base_url()?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script> -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?=base_url()?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/admin/scripts/demo.js" type="text/javascript"></script>
<!-- <script src="<?=base_url()?>assets/admin/pages/scripts/table-advanced.js"></script> -->
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Demo.init(); // init demo features
   TableAdvanced.init();
});
</script>