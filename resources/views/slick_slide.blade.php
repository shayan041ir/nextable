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

	<!-- Slick slide -->
	<link rel="stylesheet" href="{{ asset('vendors/slick/slick.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('vendors/slick/slick-theme.css') }}" type="text/css">

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
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">تک آیتم</h6>
						<div class="slick-single">
							<div>
								<img src="assets/media/image/photo1.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo2.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo3.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo4.jpg" style="width: 100%" alt="image">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">پخش خودکار</h6>
						<div class="slick-autoplay">
							<div class="slick-slide-item">
								<img src="assets/media/image/photo1.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo2.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo3.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo4.jpg" class="img-fluid" alt="image">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">جلوه محو شدن</h6>
						<div class="slick-fade-effect">
							<div>
								<img src="assets/media/image/photo1.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo2.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo3.jpg" style="width: 100%" alt="image">
							</div>
							<div>
								<img src="assets/media/image/photo4.jpg" style="width: 100%" alt="image">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">چند آیتم</h6>
						<div class="slick-multiple">
							<div class="slick-slide-item">
								<img src="assets/media/image/photo1.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo2.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo3.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo4.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo5.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo6.jpg" class="img-fluid" alt="image">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">حالت وسط</h6>
						<div class="slick-center-mode">
							<div class="slick-slide-item">
								<img src="assets/media/image/photo1.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo2.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo3.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo4.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo5.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo6.jpg" class="img-fluid" alt="image">
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">هماهنگی اسلایدر ها</h6>
						<div class="slider-for">
							<div class="slick-slide-item">
								<img src="assets/media/image/photo1.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo2.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo3.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo4.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo5.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo6.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo7.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo8.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo9.jpg" class="img-fluid" style="width:100%" alt="image">
							</div>
						</div>
						<div class="slider-nav">
							<div class="slick-slide-item">
								<img src="assets/media/image/photo1.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo2.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo3.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo4.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo5.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo6.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo7.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo8.jpg" class="img-fluid" alt="image">
							</div>
							<div class="slick-slide-item">
								<img src="assets/media/image/photo9.jpg" class="img-fluid" alt="image">
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

	<!-- Slick slide -->
	<script src="{{ asset('vendors/slick/slick.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/slick.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
