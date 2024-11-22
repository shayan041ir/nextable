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
			<div class="col-xl-4 col-lg-6 col-md-12">

				<div class="card">
					<img src="assets/media/image/profile-bg.png" class="card-img-top" alt="...">
					<div class="card-body text-center m-t-70-minus">
						<figure class="avatar avatar-xl m-b-20">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="...">
						</figure>
						<h5>جان اسنو</h5>
						<p class="text-muted small">طراح وب</p>
						<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
						<a href="#" class="btn btn-outline-primary">
							<i class="fa fa-pencil m-r-5"></i> ویرایش پروفایل
						</a>
					</div>
					<hr class="m-0">
					<div class="card-body">
						<div class="row text-center">
							<div class="col-4 text-info">
								<h4 class="font-weight-bold primary-font line-height-32 mb-1">291</h4>
								<span>مطلب</span>
							</div>
							<div class="col-4 text-success">
								<h4 class="font-weight-bold primary-font line-height-32 mb-1">10,596</h4>
								<span>دنبال کننده</span>
							</div>
							<div class="col-4 text-warning">
								<h4 class="font-weight-bold primary-font line-height-32 mb-1">7,896</h4>
								<span>لایک</span>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-facebook">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="ti-facebook font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">50k لایک</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-twitter">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="ti-twitter font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">3k دنبال کننده</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-linkedin">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="ti-linkedin font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">5k ارتباط</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-whatsapp">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="fa fa-whatsapp font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">20 پیام</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-youtube">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="fa fa-youtube font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">539 ویدئو</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card bg-instagram">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<i class="fa fa-instagram font-size-30 opacity-7"></i>
							<div class="m-l-20">
								<h5 class="mb-0 font-weight-bold primary-font">100k دنبال کننده</h5>
								<small>اطلاعات شبکه اجتماعی</small>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center mb-4">
							<div class="icon-block m-r-10 bg-info-bright text-info icon-block-floating">
								<i class="fa fa-user-o"></i>
							</div>
							<h4 class="card-title mb-0">بازخورد</h4>
						</div>
						<div class="m-b-30">
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio1" checked name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio1">لورم ایپسوم متن ساختگی با تولید سادگی</label>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</label>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio3">لورم ایپسوم متن ساختگی با</label>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio4">لورم ایپسوم متن ساختگی با تولید</label>
								</div>
							</div>
							<div class="form-group">
								<div class="custom-control custom-radio">
									<input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
									<label class="custom-control-label" for="customRadio5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</label>
								</div>
							</div>
						</div>
						<button class="btn btn-primary btn-block">اشتراک گذاری بازخورد</button>
					</div>
				</div>

			</div>
			<div class="col-xl-4 col-lg-6 col-md-12">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">مهارت ها</h6>
						<div class="mb-4">
							<div class="text-muted mb-2">
								<div class="icon-block icon-block-sm icon-block-floating align-middle icon-block-outline-primary text-primary m-r-10">
									<i class="fa fa-user"></i>
								</div>
								<span class="font-size-13">طراحی گرافیک</span>
							</div>
							<div class="d-flex align-items-center">
								<div class="progress flex-grow-1" style="height: 5px">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 42%;" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="h6 mb-0 ml-3">42%</span>
							</div>
						</div>
						<div class="mb-4">
							<div class="text-muted mb-2">
								<div class="icon-block icon-block-sm icon-block-floating align-middle icon-block-outline-danger text-danger m-r-10">
									<i class="fa fa-star"></i>
								</div>
								<span class="font-size-13">طراحی وب</span>
							</div>
							<div class="d-flex align-items-center">
								<div class="progress flex-grow-1" style="height: 5px">
									<div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="h6 mb-0 ml-3">75%</span>
							</div>
						</div>
						<div class="mb-4">
							<div class="text-muted mb-2">
								<div class="icon-block icon-block-sm icon-block-floating align-middle icon-block-outline-warning text-warning m-r-10">
									<i class="fa fa-bar-chart"></i>
								</div>
								<span class="font-size-13">نرم افزار</span>
							</div>
							<div class="d-flex align-items-center">
								<div class="progress flex-grow-1" style="height: 5px">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="h6 mb-0 ml-3">50%</span>
							</div>
						</div>
						<div class="mb-4">
							<div class="text-muted mb-2">
								<div class="icon-block icon-block-sm icon-block-floating align-middle icon-block-outline-success text-success m-r-10">
									<i class="fa fa-cloud-upload"></i>
								</div>
								<span class="font-size-13">مدیریت محتوا</span>
							</div>
							<div class="d-flex align-items-center">
								<div class="progress flex-grow-1" style="height: 7px">
									<div class="progress-bar bg-success" role="progressbar" style="width: 22%;" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<span class="h6 mb-0 ml-3">22%</span>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<figure class="avatar mr-3">
									<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="...">
								</figure>
							</div>
							<div class="mr-2">
								<h4 class="mb-1">تونی استارک</h4>
								<p class="small text-muted m-b-0">
									توسعه دهنده نرم افزار
								</p>
							</div>
							<a href="#" class="btn btn-primary btn-sm ml-auto">
								<i class="fa fa-plus m-r-5"></i>
								دنبال کردن
							</a>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">خط زمانی</h6>
						<div class="timeline">
							<div class="timeline-item">
								<div>
									<figure class="avatar avatar-sm m-r-15 bring-forward">
										<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
									</figure>
								</div>
								<div>
									<h6>لورم ایپسوم متن ساختگی</h6>
									<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
									<small class="text-muted">
										<i class="fa fa-clock-o m-r-5"></i> دیروز
									</small>
								</div>
							</div>
							<div class="timeline-item">
								<div>
									<figure class="avatar avatar-sm m-r-15 bring-forward">
										<span class="avatar-title bg-warning rounded-circle">
											<i class="ti-image"></i>
										</span>
									</figure>
								</div>
								<div>
									<h6>جان اسنو</h6>
									<p class="m-b-5">
										<img src="assets/media/image/portfolio-five.jpg" alt="image" class="w-25">
										<img src="assets/media/image/portfolio-one.jpg" alt="image" class="w-25">
										<img src="assets/media/image/portfolio-three.jpg" alt="image" class="w-25">
									</p>
									<small class="text-muted">
										<i class="fa fa-clock-o m-r-5"></i> 1398/11/28
									</small>
								</div>
							</div>
							<div class="timeline-item">
								<div>
									<figure class="avatar avatar-sm m-r-15 bring-forward">
										<span class="avatar-title bg-danger rounded-circle">آ</span>
									</figure>
								</div>
								<div>
									<h6>افزودن کاربر جدید</h6>
									<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک</p>
									<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله</p>
									<small class="text-muted">
										<i class="fa fa-clock-o m-r-5"></i> 1398/04/16
									</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body text-center">
						<h4 class="card-title">مجموع دنبال کنندگان</h4>
						<ul class="list-inline mb-0">
							<li class="list-inline-item">
								<div class="icon-block bg-twitter icon-block-floating">
									<i class="fa fa-twitter"></i>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="icon-block bg-facebook icon-block-floating">
									<i class="fa fa-facebook"></i>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="icon-block bg-instagram icon-block-floating">
									<i class="fa fa-instagram"></i>
								</div>
							</li>
							<li class="list-inline-item">
								<div class="icon-block bg-dribbble icon-block-floating">
									<i class="fa fa-dribbble"></i>
								</div>
							</li>
						</ul>
						<div class="font-size-35 font-weight-bold line-height-40 m-t-15">31,053</div>
					</div>
				</div>

				<div class="card">
					<div class="d-flex align-items-center">
						<div class="bg-twitter text-center p-20">
							<i class="ti-twitter font-size-40"></i>
						</div>
						<div class="p-l-20">
							<h2 class="mb-2 font-weight-bold primary-font line-height-32">2.5K</h2>
							<p class="m-0 font-size-13 text-twitter">دنبال کننده</p>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="d-flex align-items-center">
						<div class="bg-facebook text-center p-20">
							<i class="ti-facebook font-size-40"></i>
						</div>
						<div class="p-l-20">
							<h2 class="mb-2 font-weight-bold primary-font line-height-32">5.8K</h2>
							<p class="m-0 font-size-13 text-facebook">دنبال کننده</p>
						</div>
					</div>
				</div>

			</div>
			<div class="col-xl-4 col-lg-6 col-md-12">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">تصاویر</h6>
						<div class="row">
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-one.jpg" alt="image">
							</div>
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-two.jpg" alt="image">
							</div>
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-three.jpg" alt="image">
							</div>
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-four.jpg" alt="image">
							</div>
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-five.jpg" alt="image">
							</div>
							<div class="col-lg-4 mb-3">
								<img class="img-fluid rounded" src="assets/media/image/portfolio-six.jpg" alt="image">
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between">
						کاربران آنلاین
						<div>
							<a href="#" class="js-card-refresh">
								<i class="fa fa-refresh"></i>
							</a>
							<div class="dropdown ml-2 primary-font">
								<a class="px-1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item">عمل</a>
									<a href="#" class="dropdown-item">عمل دیگر</a>
									<a href="#" class="dropdown-item">یک عمل دیگر</a>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body pt-2">
						<ul class="list-group list-group-flush">
							<li class="list-group-item d-flex align-items-center p-l-r-0">
								<figure class="avatar avatar-sm avatar-state-success m-r-15">
									<span class="avatar-title rounded-circle">و</span>
								</figure>
								<div>
									<h6 class="m-b-0 primary-font">تونی استارک</h6>
									<small class="text-muted">مهندس</small>
								</div>
								<a href="#" data-toggle="tooltip" title="ارسال پیام" class="ml-auto btn btn-primary btn-sm">
									<i class="ti-email"></i>
								</a>
							</li>
							<li class="list-group-item d-flex align-items-center p-l-r-0">
								<figure class="avatar avatar-sm avatar-state-success m-r-15">
									<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
								</figure>
								<div>
									<h6 class="m-b-0 primary-font">پیتر پارکر</h6>
									<small class="text-muted">منابع انسانی</small>
								</div>
								<a href="#" data-toggle="tooltip" title="ارسال پیام" class="ml-auto btn btn-primary btn-sm">
									<i class="ti-email"></i>
								</a>
							</li>
							<li class="list-group-item d-flex align-items-center p-l-r-0">
								<figure class="avatar avatar-sm avatar-state-success m-r-15">
									<span class="avatar-title rounded-circle">آ</span>
								</figure>
								<div>
									<h6 class="m-b-0 primary-font">استیو راجرز</h6>
									<small class="text-muted">مشاور املاک</small>
								</div>
								<a href="#" data-toggle="tooltip" title="ارسال پیام" class="ml-auto btn btn-primary btn-sm">
									<i class="ti-email"></i>
								</a>
							</li>
							<li class="list-group-item d-flex align-items-center p-l-r-0">
								<figure class="avatar avatar-sm avatar-state-success m-r-15">
									<span class="avatar-title bg-dark rounded-circle">ن‌پ</span>
								</figure>
								<div>
									<h6 class="m-b-0 primary-font">جان اسنو</h6>
									<small class="text-muted">مهندس</small>
								</div>
								<a href="#" data-toggle="tooltip" title="ارسال پیام" class="ml-auto btn btn-primary btn-sm">
									<i class="ti-email"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						مشتریان جدید
						<small class="opacity-5 primary-font">30 روز اخیر</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">47,033</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-success opacity-8">
								<i class="ti-user"></i>
							</div>
						</div>
						<p class="mb-0">
							<i class="ti-angle-down m-r-5 align-middle"></i>
							2.00%
						</p>
					</div>
				</div>
				<div class="card">
					<div class="card-header d-flex justify-content-between">
						مجموع رزرو ها
						<small class="opacity-5 primary-font">7 روز اخیر</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">21,238</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-warning opacity-8">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
						<p class="mb-0">
							<i class="ti-angle-up m-r-5 align-middle"></i>
							22.00%
						</p>
					</div>
				</div>
				<div class="card bg-primary">
					<div class="card-header d-flex justify-content-between">
						مشتریان جدید
						<small class="opacity-5 primary-font">30 روز اخیر</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">47,033</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-white opacity-5">
								<i class="ti-user"></i>
							</div>
						</div>
						<p class="mb-0">
							<i class="ti-angle-down m-r-5 align-middle"></i>
							2.00%
						</p>
					</div>
				</div>
				<div class="card bg-success">
					<div class="card-header d-flex justify-content-between">
						مجموع رزرو ها
						<small class="opacity-5 primary-font">7 روز اخیر</small>
					</div>
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-center">
							<div class="font-size-35 font-weight-bold">21,238</div>
							<div class="icon-block icon-block-xl icon-block-floating icon-block-outline-white opacity-5">
								<i class="ti-layers-alt"></i>
							</div>
						</div>
						<p class="mb-0">
							<i class="ti-angle-up m-r-5 align-middle"></i>
							22.00%
						</p>
					</div>
				</div>
				<div class="card m-b-30 bg-dark-gradient">
					<div class="card-body text-white">
						<div class="text-center">
							<div class="font-size-35 p-t-15 line-height-46">65,154,000 <span class="font-size-20">تومان</span></div>
							<p class="opacity-7 p-t-10">
								میانگین فروش در 3 ماه گذشته
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>