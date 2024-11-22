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

	<!-- lightbox -->
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

		<div class="card chat-app-wrapper">
			<div class="row chat-app">
				<div class="col-xl-3 chat-sidebar">
					<div class="chat-sidebar-search">
						<form>
							<input type="text" class="form-control" placeholder="جستجوی گفتگو ...">
						</form>
					</div>
					<div class="chat-sidebar-messages">
						<div class="list-group">
							<a href="#" class="list-group-item align-items-center d-flex list-group-item-action">
								<div class="flex-shrink-0">
									<figure class="avatar avatar-sm">
										<span class="avatar-title bg-success rounded-circle">آ</span>
									</figure>
								</div>
								<div>
									<h6 class="mb-0">بری الن</h6>
									<p class="m-0 small text-muted">لورم ایپسوم متن ساختگی با تولید</p>
								</div>
								<span class="badge badge-primary badge-pill ml-auto">3</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex">
								<div class="flex-shrink-0">
									<figure class="avatar avatar-sm">
										<span class="avatar-title bg-danger rounded-circle">اک</span>
									</figure>
								</div>
								<div>
									<h6 class="mb-0">اولیور کوئین</h6>
									<p class="m-0 small text-muted">لورم ایپسوم متن ساختگی با تولید</p>
								</div>
								<span class="badge badge-primary badge-pill ml-auto">1</span>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex active">
								<div class="flex-shrink-0">
									<figure class="avatar avatar-sm">
										<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
									</figure>
								</div>
								<div class="flex-grow-1">
									<h6 class="mb-0 d-flex justify-content-between">جان دیگل <span class="opacity-7">05:41</span></h6>
									<p class="m-0 small">لورم ایپسوم متن ساختگی با تولید</p>
								</div>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex">
								<div class="flex-shrink-0">
									<figure class="avatar avatar-sm">
										<span class="avatar-title bg-warning rounded-circle">س</span>
									</figure>
								</div>
								<div class="flex-grow-1">
									<h6 class="mb-0 d-flex justify-content-between">روی هارپر <span class="text-muted">05:41</span></h6>
									<p class="m-0 small text-muted">لورم ایپسوم متن ساختگی با تولید</p>
								</div>
							</a>
							<a href="#" class="list-group-item list-group-item-action d-flex">
								<div class="flex-shrink-0">
									<figure class="avatar avatar-sm">
										<span class="avatar-title bg-info rounded-circle">ی</span>
									</figure>
								</div>
								<div class="flex-grow-1">
									<h6 class="mb-0 d-flex justify-content-between">بروس وین <span class="text-muted">21:40</span>
									</h6>
									<p class="m-0 small text-muted">لورم ایپسوم متن ساختگی با تولید</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-xl-9 col-md-12 chat-body">
					<div class="chat-body-header">
						<a href="#" class="btn btn-dark opacity-3 m-r-10 btn-chat-sidebar-open">
							<i class="ti-menu"></i>
						</a>
						<div>
							<figure class="avatar avatar-sm m-r-10">
								<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
							</figure>
						</div>
						<div>
							<h6 class="mb-1 primary-font line-height-18">بری الن</h6>
							<span class="small text-success">در حال نوشتن ...</span>
						</div>
						<div class="ml-auto d-flex">
							<button type="button" class="ml-2 btn btn-sm btn-success btn-floating">
								<i class="fa fa-video-camera"></i>
							</button>
							<div class="dropdown ml-2">
								<button type="button" data-toggle="dropdown" class="btn btn-sm  btn-warning btn-floating">
									<i class="fa fa-cog"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="dropdown-menu-body">
										<ul>
											<li>
												<a class="dropdown-item" href="#">پروفایل</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">مسدود کردن</a>
											</li>
											<li>
												<a class="dropdown-item" href="#">حذف</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="chat-body-messages">
						<div class="message-items">
							<div class="message-item message-item-media">
								<ul>
									<li>
										<a href="assets/media/image/portfolio-four.jpg">
											<img src="assets/media/image/portfolio-four.jpg" alt="image">
											<span>portfolio-four.jpg</span>
										</a>
									</li>
									<li>
										<a href="assets/media/image/portfolio-two.jpg">
											<img src="assets/media/image/portfolio-two.jpg" alt="image">
											<span>portfolio-two.jpg</span>
										</a>
									</li>
								</ul>
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item message-item-media">
								<div class="m-b-0 text-muted text-left">
									<a href="#" class="btn btn-outline-light text-left align-items-center justify-content-center">
										<i class="fa fa-download font-size-18 m-r-10"></i>
										<div class="small">
											<div class="mb-2">example test.txt</div>
											<div dir="ltr">10 KB</div>
										</div>
									</a>
								</div>
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item outgoing-message">
								لورم ایپسوم متن ساختگی با تولید
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item outgoing-message message-item-media">
								<ul>
									<li>
										<a href="assets/media/image/portfolio-four.jpg" class="media-error">
											<img src="assets/media/image/portfolio-four.jpg" alt="image">
											<span>لورم ایپسوم متن ساختگی با تولید</span>
										</a>
									</li>
									<li>
										<a href="assets/media/image/portfolio-six.jpg">
											<img src="assets/media/image/portfolio-six.jpg" alt="image">
											<span>portfolio-six.jpg</span>
										</a>
									</li>
									<li>
										<a href="assets/media/image/portfolio-three.jpg" class="media-error">
											<img src="assets/media/image/portfolio-three.jpg" alt="image">
											<span>لورم ایپسوم متن ساختگی با تولید</span>
										</a>
									</li>
									<li>
										<a href="assets/media/image/portfolio-one.jpg">
											<img src="assets/media/image/portfolio-one.jpg" alt="image">
											<span>portfolio-one.jpg</span>
										</a>
									</li>
								</ul>
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item outgoing-message">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item">
								لورم ایپسوم متن
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item message-item-date-border">
								<span class="badge">دیروز</span>
							</div>
							<div class="message-item">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item outgoing-message message-item-error">
								لورم ایپسوم متن ساختگی
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item outgoing-message message-item-media">
								<div class="m-b-0 text-muted text-left media-file">
									<a href="#" class="btn btn-outline-light text-left align-items-center justify-content-center">
										<i class="fa fa-download font-size-18 m-r-10"></i>
										<div class="small">
											<div class="mb-2">example file.txt</div>
											<div class="font-size-13" dir="ltr">5 KB</div>
										</div>
									</a>
								</div>
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
							</div>
							<div class="message-item">
								لورم ایپسوم متن
							</div>
							<div class="message-item message-item-date-border">
								<span class="badge">امروز</span>
							</div>
							<div class="message-item">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
							</div>
							<div class="message-item outgoing-message">
								لورم ایپسوم متن ساختگی
								<small class="message-item-date text-muted">22.30</small>
							</div>
							<div class="message-item">&bull; &bull; &bull;</div>
						</div>
					</div>
					<div class="chat-body-footer">
						<form class="d-flex align-items-center">
							<input type="text" class="form-control" placeholder="پیام ...">
							<div class="d-flex">
								<button type="button" class="ml-3 btn btn-primary btn-floating">
									<i class="fa fa-send"></i>
								</button>
								<div class="dropup">
									<button type="button" data-toggle="dropdown" class="ml-3 btn btn-success btn-floating">
										<i class="fa fa-plus"></i>
									</button>
									<div class="dropdown-menu dropdown-menu-right">
										<div class="dropdown-menu-body">
											<ul>
												<li>
													<a class="dropdown-item" href="#">
														<i class="icon fa fa-picture-o"></i> تصویر
													</a>
												</li>
												<li>
													<a class="dropdown-item" href="#">
														<i class="icon fa fa-video-camera"></i> ویدئو
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</form>
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

	<!-- begin::lightbox -->
	<script src="{{ asset('vendors/lightbox/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/lightbox.js') }}"></script>
</body>

</html>