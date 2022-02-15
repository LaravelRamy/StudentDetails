
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Dashboard</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/ui/moment/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/pickers/daterangepicker.js') }}"></script>

	<script type="text/javascript" src="{{asset('admin/assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/js/pages/dashboard.js') }}"></script>

	<script type="text/javascript" src="{{asset('admin/assets/js/plugins/ui/ripple.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/52009647a4.js" crossorigin="anonymous"></script>
	<!-- /theme JS files -->

</head>

<body>


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			@include('admin.include.sidebar')
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
				<!-- /content area -->
                @yield('content')
			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
