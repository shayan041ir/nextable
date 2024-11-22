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

	<!-- Clockpicker -->
	<link rel="stylesheet" href="{{ asset('vendors/clockpicker/bootstrap-clockpicker.min.css') }}" type="text/css">

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
				<div class="row">
					<div class="col-md-4">
						<div class="m-b-40">
							<h6 class="m-b-30">پیش فرض</h6>
							<div class="input-group clockpicker-demo">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-clock-o"></i>
									</span>
								</div>
								<input type="text" class="form-control text-left" value="09:30" dir="ltr">
							</div>
						</div>
						<div class="m-b-40">
							<h6 class="m-b-30">بسته شدن خودکار</h6>
							<div class="input-group clockpicker-autoclose-demo">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="fa fa-clock-o"></i>
									</span>
								</div>
								<input type="text" class="form-control text-left" value="18:30" dir="ltr">
							</div>
						</div>
						<div class="m-b-40">
							<div class="m-b-30">
								<h6>تنظیم مقدار پیش فرض</h6>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</p>
							</div>
							<div class="input-group clockpicker-minutes-demo">
								<div class="input-group-prepend">
									<button class="btn btn-dark" type="button" id="check-minutes">انتخاب دقیقه
									</button>
								</div>
								<input type="text" class="form-control text-left" dir="ltr">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Clockpicker -->
	<script src="{{ asset('vendors/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/clockpicker.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
