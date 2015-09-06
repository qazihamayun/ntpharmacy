<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
{!! Html::style('assets/global/plugins/font-awesome/css/font-awesome.min.css')!!}
{!! Html::style('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')!!} 
{!! Html::style('assets/global/plugins/bootstrap/css/bootstrap.min.css')!!} 
{!! Html::style('assets/global/plugins/uniform/css/uniform.default.css')!!} 
{!! Html::style('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')!!} 
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
{!! Html::style('assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')!!} 
{!! Html::style('assets/global/plugins/fullcalendar/fullcalendar.min.css')!!} 
{!! Html::style('assets/global/plugins/jqvmap/jqvmap/jqvmap.css')!!} 
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
{!! Html::style('assets/admin/pages/css/tasks.css')!!} 
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
{!! Html::style('assets/global/css/components-rounded.css', ['id'=>'style_components'])!!} 
{!! Html::style('assets/global/css/plugins.css')!!} 
{!! Html::style('assets/admin/layout/css/layout.css')!!} 
{!! Html::style('assets/admin/layout/css/themes/darkblue.css')!!} 
{!! Html::style('assets/admin/layout/css/custom.css')!!} 

yield('styles')

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
@include('layout.header')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
        @include('layout.sidebar')
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            @yield('content')
        </div>

	<!-- END CONTENT -->
	<!-- BEGIN QUICK SIDEBAR -->
        @include('layout.sidebar_quick')
	<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
@include('layout.footer')
<!-- END FOOTER -->


<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{!! Html::script('assets/global/plugins/respond.min.js')!!} 
{!! Html::script('assets/global/plugins/excanvas.min.js')!!} 
<![endif]-->
{!! Html::script('assets/global/plugins/jquery.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery-migrate.min.js')!!} 
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js')!!} 
{!! Html::script('assets/global/plugins/bootstrap/js/bootstrap.min.js')!!} 
{!! Html::script('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery.blockui.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery.cokie.min.js')!!} 
{!! Html::script('assets/global/plugins/uniform/jquery.uniform.min.js')!!} 
{!! Html::script('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')!!} 
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')!!} 
{!! Html::script('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')!!} 
{!! Html::script('assets/global/plugins/flot/jquery.flot.min.js')!!} 
{!! Html::script('assets/global/plugins/flot/jquery.flot.resize.min.js')!!} 
{!! Html::script('assets/global/plugins/flot/jquery.flot.categories.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery.pulsate.min.js')!!} 
{!! Html::script('assets/global/plugins/bootstrap-daterangepicker/moment.min.js')!!} 
{!! Html::script('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js')!!} 

<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
{!! Html::script('assets/global/plugins/fullcalendar/fullcalendar.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')!!} 
{!! Html::script('assets/global/plugins/jquery.sparkline.min.js')!!} 
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! Html::script('assets/global/scripts/metronic.js')!!} 
{!! Html::script('assets/admin/layout/scripts/layout.js')!!} 
{!! Html::script('assets/admin/layout/scripts/quick-sidebar.js')!!} 
{!! Html::script('assets/admin/layout/scripts/demo.js')!!} 
{!! Html::script('assets/admin/pages/scripts/index.js')!!} 
{!! Html::script('assets/admin/pages/scripts/tasks.js')!!} 

<!-- END PAGE LEVEL SCRIPTS -->
<script>
$(document).ready(function(){
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   Index.init();   
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>

@yield('scripts')


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>

