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

	<!-- Colorpicker -->
	<link rel="stylesheet" href="{{ asset('vendors/colorpicker/css/bootstrap-colorpicker.min.css') }}" type="text/css">

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
				<h6 class="card-title">انتخاب گر رنگ</h6>
				<div class="row">
					<div class="col-md-6">
						<div class="colorpicker-inline-mode"></div>
					</div>
					<div class="col-md-6">
						<div class="colorpicker-inline-mode-2"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Hex</h5>
						<div class="form-group">
							<input type="text" class="sample-selector-hex form-control text-left" dir="ltr">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Rgb</h6>
						<div class="form-group">
							<input type="text" class="sample-selector-rgb form-control text-left" dir="ltr">
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">Rgba</h6>
						<div class="form-group">
							<input type="text" class="sample-selector-rgba form-control text-left" dir="ltr">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">با گزینه های سفارشی</h6>
				<p>نمونه جایگزین کننده رنگ و فرمت اولیه</p>
				<div class="row">
					<div class="col-md-4">
						<div class="input-group sample-selector">
							<input type="text" value="red" class="form-control text-left" dir="ltr">
							<div class="input-group-append">
								<span class="input-group-text"><i></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">کار با event ها</h6>
				<a href="#" class="btn btn-dark sample-selector-2">تغییر رنگ پس زمینه</a>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">پشتیبانی از رنگ شفاف</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" class="sample-selector-3 form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">حالت افقی</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" class="sample-selector-4 form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">پالت رنگ</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" class="sample-selector-5 form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Colorpicker -->
	<script src="{{ asset('vendors/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/colorpicker.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
