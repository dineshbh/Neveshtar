<div class="page-footer">
	<div class="page-footer-inner">
		 2014 &copy; Neveshtar.com
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/themes/bootstrap/assets/global/plugins/respond.min.js"></script>
<script src="/themes/bootstrap/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/themes/bootstrap/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/themes/bootstrap/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/themes/bootstrap/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('plugins')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('footer')
<!-- END PAGE LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   // BEGIN PAGE LEVEL INITS
   @yield('inits')
   // End PAGE LEVEL INITS
});
</script>
<!-- END JAVASCRIPTS -->