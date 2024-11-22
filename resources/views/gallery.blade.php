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
	<!-- begin::Main -->
	<main class="main-content">

		<div class="row">
			<div class="col-lg-3 col-md-12">
				<div class="card">
					<div class="card-body">
						<button data-toggle="modal" data-target="#compose" class="btn btn-primary btn-block mb-4">
							<i class="fa fa-upload mr-2"></i> آپلود
						</button>
						<h6 class="font-size-13 mb-3 text-muted">دسته‌بندی ها</h6>
						<div class="list-group list-group-sm list-group-flush">
							<a href="#" class="list-group-item link-1 pl-0 pr-0 d-flex justify-content-between align-items-center">
								کسب و کار
								<span class="badge badge-light badge-pill">14</span>
							</a>
							<a href="#" class="list-group-item link-1 pl-0 pr-0 d-flex justify-content-between align-items-center">
								طبیعت
								<span class="badge badge-light badge-pill">2</span>
							</a>
							<a href="#" class="list-group-item link-1 pl-0">مردم</a>
							<a href="#" class="list-group-item link-1 pl-0">نمای شهر</a>
							<a href="#" class="list-group-item link-1 pl-0">شبکه اجتماعی</a>
							<a href="#" class="list-group-item link-1 pl-0 pr-0 d-flex justify-content-between align-items-center">
								سایر
								<span class="badge badge-light badge-pill">24</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-9 col-md-12">
				<div class="card-columns">

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-info">شبکه اجتماعی</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/photo2.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/photo2.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-success">طبیعت</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/photo5.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/photo5.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-secondary">سایر</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/portfolio-four.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/portfolio-four.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-info">کسب و کار</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/portfolio-five.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/portfolio-five.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-danger">کسب و کار</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/portfolio-six.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/portfolio-six.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-warning">مردم</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/photo6.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/photo6.jpg" class="card-img-top" alt="image">
						</a>
					</div>

					<div class="card hide-show-toggler">
						<div class="position-absolute d-flex justify-content-between right-0 left-0 top-0 p-3">
							<span class="badge badge-primary">نمای شهر</span>
							<div class="dropdown hide-show-toggler-item">
								<a href="#" data-toggle="dropdown">
									<i class="ti-settings"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">اشتراک گذاری</a>
									<a href="#" class="dropdown-item">کپی کردن</a>
									<a href="#" class="dropdown-item">حذف</a>
								</div>
							</div>
						</div>
						<a href="assets/media/image/photo1.jpg" class="image-popup-gallery-item">
							<img src="assets/media/image/photo1.jpg" class="card-img-top" alt="image">
						</a>
					</div>

				</div>
			</div>
		</div>

	</main>
	<!-- end::Main -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Lightbox -->
	<script src="{{ asset('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/lightbox.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
