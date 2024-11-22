<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>قالب Nextable - قالب مدیریتی نکستیبل</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}">

	<!-- Theme Color -->
	<meta name="theme-color" content="#5867dd">

	<!-- Plugin styles -->
	<link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

	<!-- Vector map -->
	<link rel="stylesheet" href="{{ asset('vendors/vmap/jqvmap.min.css') }}" type="text/css">

	<!-- App styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
</head>

<body>
    @include('template.page_loader');
    @include('template.sidebar_user_profile');
    @include('template.sidebar_settings');
    @include('template.navigation');
    @include('template.header');
	<!-- begin::main content -->
	<main class="main-content">

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">نقشه ساده</h6>
				<div id="vmap_world_en" style="height: 400px;"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">کانادا</h6>
						<div id="vmap_iran_ir" style="height: 400px;"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">آمریکا</h6>
						<div id="vmap_usa_en" style="height: 400px;"></div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Vector map -->
	<script src="{{ asset('vendors/vmap/jquery.vmap.min.js') }}"></script>
	<script src="{{ asset('vendors/vmap/maps/jquery.vmap.world.js') }}"></script>
	<script src="{{ asset('vendors/vmap/maps/jquery.vmap.iran.js') }}"></script>
	<script src="{{ asset('vendors/vmap/maps/jquery.vmap.usa.js') }}"></script>
	<script src="{{ asset('assets/js/examples/vmap.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
