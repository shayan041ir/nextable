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

	<!-- Form wizard -->
	<link rel="stylesheet" href="{{ asset('vendors/form-wizard/jquery.steps.css') }}" type="text/css">

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
				<h6 class="card-title">فرم مرحله ای پایه</h6>
				<p class="text-muted">فرم زیر نمونه ای از یک فرم مرحله ای پایه است.</p>
				<div id="wizard1">
					<h3>اطلاعات شخصی</h3>
					<section>
						<h4>اطلاعات شخصی</h4>
						<p>جابه‌جایی توسط کیبورد را با فشردن دکمه های چپ و راست امتحان کنید. (اول روی یکی از مراحل کلیک کنید)</p>
					</section>
					<h3>اطلاعات بانکی</h3>
					<section>
						<h4>اطلاعات بانکی</h4>
						<p>لورم ایپسوم متن ساختگی با تولید</p>
					</section>
					<h3>جزئیات پرداخت</h3>
					<section>
						<h4>جزئیات پرداخت</h4>
						<p>دکمه های بعدی و قبلی به جا به جایی شما بین محتوا کمک می کند.</p>
					</section>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title"> فرم مرحله ای پایه با اعتبارسنجی</h6>
				<div id="wizard2">
					<h3>اطلاعات شخصی</h3>
					<section>
						<h4>اطلاعات شخصی</h4>
						<p>جابه‌جایی توسط کیبورد را با فشردن دکمه های چپ و راست امتحان کنید. (اول روی یکی از مراحل کلیک کنید)</p>
						<form id="form1">
							<div class="form-group wd-xs-300">
								<label>نام</label>
								<input type="text" class="form-control" placeholder="نام" required>
								<div class="valid-feedback">
									صحیح است!
								</div>
							</div><!-- form-group -->
							<div class="form-group wd-xs-300">
								<label>نام خانوادگی</label>
								<input type="text" class="form-control" name="lastname" placeholder="نام خانوادگی" required>
								<div class="valid-feedback">
									صحیح است!
								</div>
							</div><!-- form-group -->
						</form>
					</section>
					<h3>اطلاعات بانکی</h3>
					<section>
						<h4>اطلاعات بانکی</h4>
						<p>لورم ایپسوم متن ساختگی با تولید</p>
						<form id="form2">
							<div class="form-group wd-xs-300">
								<label class="form-control-label">ایمیل: <span class="tx-danger">*</span></label>
								<input id="email" class="form-control text-left" name="email" placeholder="آدرس ایمیل" type="email" dir="ltr" required>
								<div class="valid-feedback">
									صحیح است!
								</div>
							</div><!-- form-group -->
						</form>
					</section>
					<h3>جزئیات پرداخت</h3>
					<section>
						<h4>جزئیات پرداخت</h4>
						<p>دکمه های بعدی و قبلی به جا به جایی شما بین محتوا کمک می کند.</p>
					</section>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Form wizard -->
	<script src="{{ asset('vendors/form-wizard/jquery.steps.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/form-wizard.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
