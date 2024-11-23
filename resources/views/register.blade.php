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

<body class="form-membership">

@include('template.page_loader');
	<div class="form-wrapper">

		<!-- logo -->
		<div class="logo">
			<img src="assets/media/image/logo-sm.png" alt="image">
		</div>
		<!-- ./ logo -->

		<h5>ایجاد حساب</h5>

		<!-- form -->
		<form>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="نام" required autofocus>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="نام خانوادگی" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control text-left" placeholder="ایمیل" dir="ltr" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control text-left" placeholder="رمز عبور" dir="ltr" required>
			</div>
			<button class="btn btn-primary btn-block">ثبت نام</button>
			<hr>
			<p class="text-muted">حساب کاربری دارید؟</p>
			<a href="login.html" class="btn btn-outline-light btn-sm">وارد شوید!</a>
		</form>
		<!-- ./ form -->

	</div>

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
