<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>قالب Nextable - قالب مدیریتی نکستیبل</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/media/image/favicon.png">

	<!-- Theme Color -->
	<meta name="theme-color" content="#5867dd">

	<!-- Plugin styles -->
	<link rel="stylesheet" href="vendors/bundle.css" type="text/css">

	<!-- App styles -->
	<link rel="stylesheet" href="assets/css/app.css" type="text/css">
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
				<h6 class="card-title">پایه</h6>
				<div class="toastr-examples">
					<div class="row">
						<div class="col-md-3 text-center">
							<a href="#" class="btn btn-success btn-notify-success m-t-b-20">موفقیت</a>
						</div>
						<div class="col-md-3 text-center">
							<a href="#" class="btn btn-danger btn-notify-danger m-t-b-20">اخطار</a>
						</div>
						<div class="col-md-3 text-center">
							<a href="#" class="btn btn-info btn-notify-info m-t-b-20">اطلاعات</a>
						</div>
						<div class="col-md-3 text-center">
							<a href="#" class="btn btn-warning btn-notify-warning m-t-b-20">هشدار</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">دمو های دیگر</h6>
				برای مشاهده نمونه های دیگر این صفحه وب را مشاهده نمایید.
				<a target="_blank" href="https://codeseven.github.io/toastr/demo.html">Toastr</a>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="vendors/bundle.js"></script>

	<!-- Toast examples -->
	<script src="assets/js/examples/toast.js"></script>

	<!-- App scripts -->
	<script src="assets/js/app.js"></script>
</body>

</html>
