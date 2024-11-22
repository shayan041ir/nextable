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

	<!-- Datepicker -->
	<link rel="stylesheet" href="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendors/datepicker/daterangepicker.css') }}">

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

		<div class="row">
			<div class="col-12">
				<h4>شمسی</h4>
				<hr>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">انتخاب گر تاریخ ساده</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="date-picker-shamsi" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">انتخاب گر تاریخ با نمایش لیست</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="date-picker-shamsi-list" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">انتخاب گر تاریخ محدود</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="date-picker-shamsi-limited" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<h4>میلادی</h4>
				<hr>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">انتخاب گر تاریخ تکی</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="single-date-picker" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">انتخاب گر بازه تاریخی ساده</h6>
						<input type="text" name="simple-date-range-picker" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">انتخاب گر بازه تاریخی ساده با یک Callback</h6>
						<input type="text" name="simple-date-range-picker-callback" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">انتخاب گر بازه تاریخی با ساعت</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="datetimes" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">فیلد خالی در ابتدا</h6>
				<div class="row">
					<div class="col-md-4">
						<input type="text" name="datefilter" class="form-control text-left" dir="ltr">
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Datepicker -->
	<script src="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('vendors/datepicker-jalali/bootstrap-datepicker.fa.min.js') }}"></script>
	<script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/js/examples/datepicker.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
