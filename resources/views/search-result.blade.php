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

		<div class="card overflow-hidden">
			<div class="page-header page-header-cover p-t-b-40" data-backround-image="assets/media/image/image1.png">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-6">
							<h2 class="mb-4 text-white text-center">نتایج جستجو</h2>
							<form>
								<div class="input-group mb-3">
									<input type="text" class="form-control" aria-label="Example text with button addon" placeholder="جستجو ..." aria-describedby="button-addon1">
									<div class="input-group-append">
										<button class="btn btn-primary" type="button" id="button-addon1">
											<i class="ti-search"></i>
										</button>
									</div>
								</div>
							</form>
							<ul class="list-inline text-white mt-3">
								<li class="list-inline-item">
									<a href="#" class="link-3">موبایل</a>
								</li>
								<li class="list-inline-item">
									<a href="#" class="link-3">نرم افزار</a>
								</li>
								<li class="list-inline-item">
									<a href="#" class="link-3">دسکتاپ</a>
								</li>
								<li class="list-inline-item">
									<a href="#" class="link-3">آیفون</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<h4 class="mb-5 primary-font"><i class="fa fa-search m-r-10"></i>420 نتیجه یافت شد برای: <span class="text-primary">«لورم ایپسوم»</span></h4>
				<ul class="nav nav-tabs m-b-30" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#clasic" role="tab" aria-controls="clasic" aria-selected="true">کلاسیک</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#articles" role="tab" aria-controls="articles" aria-selected="false">مقالات</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#photos" role="tab" aria-controls="photos" aria-selected="false">تصاویر</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#users" role="tab" aria-controls="users" aria-selected="false">کاربران</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="clasic" role="tabpanel">
						<ul class="list-group list-group-flush">
							<li class="list-group-item p-l-0 p-r-0">
								<h5 class="mt-1">
									<a href="#" class="link-2">لورم ایپسوم متن ساختگی با تولید</a>
								</h5>
								<p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط </p>
								<div class="text-muted font-size-13">
									<ul class="list-inline">
										<li class="list-inline-item">
											<span class="badge badge-secondary">ترند</span>
										</li>
										<li class="list-inline-item">27 خرداد 1398</li>
									</ul>
								</div>
							</li>
							<li class="list-group-item p-l-0 p-r-0">
								<h5 class="mt-1">
									<a href="#" class="link-2">لورم ایپسوم متن ساختگی با تولید</a>
								</h5>
								<p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان </p>
								<div class="text-muted font-size-13">
									<ul class="list-inline">
										<li class="list-inline-item">
											<span class="badge badge-success">سبک زندگی</span>
										</li>
										<li class="list-inline-item">13 تیر 1398</li>
									</ul>
								</div>
							</li>
							<li class="list-group-item p-l-0 p-r-0">
								<h5 class="mt-1">
									<a href="#" class="link-2">لورم ایپسوم متن ساختگی با تولید</a>
								</h5>
								<p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است </p>
								<div class="text-muted font-size-13">
									<ul class="list-inline">
										<li class="list-inline-item">
											<span class="badge badge-danger">لورم ایپسوم</span>
										</li>
										<li class="list-inline-item">27 مرداد 1398</li>
									</ul>
								</div>
							</li>
							<li class="list-group-item p-l-0 p-r-0">
								<h5 class="mt-1">
									<a href="#" class="link-2">لورم ایپسوم متن ساختگی با تولید</a>
								</h5>
								<p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم </p>
								<div class="text-muted font-size-13">
									<ul class="list-inline">
										<li class="list-inline-item">
											<span class="badge badge-primary">ترند</span>
										</li>
										<li class="list-inline-item">27 خرداد 1398</li>
									</ul>
								</div>
							</li>
							<li class="list-group-item p-l-0 p-r-0">
								<h5 class="mt-1">
									<a href="#" class="link-2">لورم ایپسوم متن ساختگی با تولید</a>
								</h5>
								<p class="text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط </p>
								<div class="text-muted font-size-13">
									<ul class="list-inline">
										<li class="list-inline-item">
											<span class="badge badge-warning">مسافرت</span>
										</li>
										<li class="list-inline-item">27 خرداد 1398</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab-pane fade" id="articles" role="tabpanel">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="card border">
									<img class="card-img-top" src="assets/media/image/portfolio-five.jpg" alt="image">
									<div class="card-body">
										<p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
										<a href="#" class="font-size-13">بیشتر بخوانید</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card border">
									<img class="card-img-top" src="assets/media/image/portfolio-six.jpg" alt="image">
									<div class="card-body">
										<p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
										<a href="#" class="font-size-13">بیشتر بخوانید</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card border">
									<img class="card-img-top" src="assets/media/image/portfolio-four.jpg" alt="image">
									<div class="card-body">
										<p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
										<a href="#" class="font-size-13">بیشتر بخوانید</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card border">
									<img class="card-img-top" src="assets/media/image/portfolio-one.jpg" alt="image">
									<div class="card-body">
										<p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
										<a href="#">بیشتر بخوانید</a>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="card border">
									<img class="card-img-top" src="assets/media/image/portfolio-two.jpg" alt="image">
									<div class="card-body">
										<p class="card-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</p>
										<a href="#" class="font-size-13">بیشتر بخوانید</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="photos" role="tabpanel">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-one.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-one.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-two.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-two.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-three.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-three.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-four.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-four.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-five.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-five.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-six.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-six.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-one.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-one.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-two.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-two.jpg" alt="image">
								</a>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-4">
								<a href="assets/media/image/portfolio-three.jpg" class="image-popup-gallery-item">
									<img class="img-fluid rounded" src="assets/media/image/portfolio-three.jpg" alt="image">
								</a>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="users" role="tabpanel">
						<ul class="list-group list-group-flush">
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<span class="avatar-title bg-secondary rounded-circle">آ</span>
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">استیو راجرز</h5>
										<p class="m-b-0 text-muted">حسابدار مالیات</p>
									</div>
								</div>
							</li>
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">لورل لنس</h5>
										<p class="m-b-0 text-muted">دستیار بازاریابی</p>
									</div>
								</div>
							</li>
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<span class="avatar-title bg-success rounded-circle">ت</span>
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">تونی استارک</h5>
										<p class="m-b-0 text-muted">حسابدار هزینه ها</p>
									</div>
								</div>
							</li>
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<span class="avatar-title bg-danger rounded-circle">ک</span>
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">بری الن</h5>
										<p class="m-b-0 text-muted">مهندس شیمی</p>
									</div>
								</div>
							</li>
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<span class="avatar-title bg-warning rounded-circle">س</span>
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">اولیور کویین</h5>
										<p class="m-b-0 text-muted">مشاور مالی</p>
									</div>
								</div>
							</li>
							<li class="list-group-item p-l-r-0">
								<div class="media align-items-center">
									<figure class="avatar m-r-15">
										<span class="avatar-title bg-info rounded-circle">د</span>
									</figure>
									<div class="media-body">
										<h5 class="primary-font line-height-24">تامی مرلین</h5>
										<p class="m-b-0 text-muted">مدیر سیستم</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<nav class="mt-5">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">بعدی</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- lightbox -->
	<script src="{{ asset('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/lightbox.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
