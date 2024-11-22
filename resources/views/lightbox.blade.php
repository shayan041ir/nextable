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

	<!-- Lightbox -->
	<link rel="stylesheet" href="{{ asset('vendors/lightbox/magnific-popup.css') }}" type="text/css">

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
				<h6 class="card-title">پایه</h6>
				<div class="row">
					<div class="col-md-2 m-b-15">
						<a class="image-popup" href="assets/media/image/photo1.jpg">
							<img src="assets/media/image/photo1.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup" href="assets/media/image/photo2.jpg">
							<img src="assets/media/image/photo2.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup" href="assets/media/image/photo3.jpg">
							<img src="assets/media/image/photo3.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">نسخه گالری</h6>
				<div class="row">
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo4.jpg">
							<img src="assets/media/image/photo4.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo5.jpg">
							<img src="assets/media/image/photo5.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo6.jpg">
							<img src="assets/media/image/photo6.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo7.jpg">
							<img src="assets/media/image/photo7.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo8.jpg">
							<img src="assets/media/image/photo8.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
					<div class="col-md-2 m-b-15">
						<a class="image-popup-gallery-item" href="assets/media/image/photo9.jpg">
							<img src="assets/media/image/photo9.jpg" class="img-fluid w-100" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Lightbox -->
	<script src="{{ asset('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/lightbox.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
    
</html>
