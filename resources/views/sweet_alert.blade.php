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
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-primary sweet-basic">پایه</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-success sweet-success">موفقیت</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-warning sweet-warning">هشدار</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-danger sweet-error">خطا</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-info sweet-info">اطلاعات</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-primary sweet-multiple">موفقیت یا انصراف</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-primary sweet-prompt">پرسش</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-primary sweet-multiple">موفقیت یا انصراف</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<div class="pt-4 pb-4 text-center">
							<button type="button" class="btn btn-primary sweet-ajax">Ajax</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Sweet alert -->
	<script src="{{ asset('assets/js/examples/sweet-alert.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
