<script type="text/javascript">
    AppHelper = {};
    AppHelper.baseUrl = "<?php echo base_url(); ?>";
    AppHelper.assetsDirectory = "<?php echo base_url("assets") . "/"; ?>";
    AppHelper.settings = {};
    AppHelper.settings.firstDayOfWeek =<?php echo get_setting("first_day_of_week") * 1; ?>;
    AppHelper.settings.currencySymbol = "<?php echo get_setting("currency_symbol"); ?>";
    AppHelper.settings.decimalSeparator = "<?php echo get_setting("decimal_separator"); ?>";
</script>