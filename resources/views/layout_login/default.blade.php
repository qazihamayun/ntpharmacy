<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Login to System</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
{!! Html::style('/assets/global/plugins/font-awesome/css/font-awesome.min.css')!!}
{!! Html::style('/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')!!}
{!! Html::style('/assets/global/plugins/bootstrap/css/bootstrap.min.css')!!}
{!! Html::style('/assets/global/plugins/uniform/css/uniform.default.css')!!}
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
{!! Html::style('/assets/admin/pages/css/login.css')!!}
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
{!! Html::style('/assets/global/css/components.css', ['id'=>'style_components'])!!}
{!! Html::style('/assets/global/css/plugins.css')!!}
{!! Html::style('/assets/admin/layout/css/layout.css')!!}
{!! Html::style('/assets/admin/layout/css/themes/darkblue.css')!!}
{!! Html::style('/assets/admin/layout/css/custom.css')!!}
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler"></div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
        {!! Html::image('/assets/admin/layout/img/logo-big.png') !!}
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
@yield('content')
<!-- END LOGIN -->

<!-- Footer -->
@include('layout_login.footer')

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
{!! Html::script('/assets/global/plugins/respond.min.js') !!} 
{!! Html::script('/assets/global/plugins/excanvas.min.js') !!} 
<![endif]-->

{!! Html::script('/assets/global/plugins/jquery.min.js')!!} 
{!! Html::script('/assets/global/plugins/jquery-migrate.min.js')!!} 
{!! Html::script('/assets/global/plugins/bootstrap/js/bootstrap.min.js')!!} 
{!! Html::script('/assets/global/plugins/jquery.blockui.min.js')!!} 
{!! Html::script('/assets/global/plugins/jquery.cokie.min.js')!!} 
{!! Html::script('/assets/global/plugins/uniform/jquery.uniform.min.js')!!} 
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{!! Html::script('/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')!!} 
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{!! Html::script('/assets/global/scripts/metronic.js')!!} 
{!! Html::script('/assets/admin/layout/scripts/layout.js')!!} 
{!! Html::script('/assets/admin/layout/scripts/demo.js')!!} 
{!! Html::script('/assets/admin/pages/scripts/login.js')!!} 
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    $(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
