@include('template.haedA');
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
						<h6 class="card-title">پیش فرض</h6>
						<figure class="avatar">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">اندازه ها</h6>
						<figure class="avatar avatar-xl">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar avatar-lg">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar avatar-sm">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar avatar-xs">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">آواتار متنی</h6>
						<figure class="avatar avatar-xl">
							<span class="avatar-title rounded-circle">آ</span>
						</figure>
						<figure class="avatar avatar-lg">
							<span class="avatar-title rounded-circle">ب</span>
						</figure>
						<figure class="avatar">
							<span class="avatar-title rounded-circle">ص</span>
						</figure>
						<figure class="avatar avatar-sm">
							<span class="avatar-title rounded-circle">د</span>
						</figure>
						<figure class="avatar avatar-xs">
							<span class="avatar-title rounded-circle">ی</span>
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">آواتار با لینک</h6>
						<figure class="avatar avatar-xl">
							<a href="#">
								<span class="avatar-title rounded-circle">آ</span>
							</a>
						</figure>
						<figure class="avatar avatar-lg">
							<a href="#">
								<span class="avatar-title rounded-circle">ب</span>
							</a>
						</figure>
						<figure class="avatar">
							<a href="#">
								<span class="avatar-title rounded-circle">ص</span>
							</a>
						</figure>
						<figure class="avatar avatar-sm">
							<a href="#">
								<span class="avatar-title rounded-circle">د</span>
							</a>
						</figure>
						<figure class="avatar avatar-xs">
							<a href="#">
								<span class="avatar-title rounded-circle">ی</span>
							</a>
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">آواتارهای رنگی</h6>
						<figure class="avatar avatar-xl">
							<span class="avatar-title bg-primary rounded-circle">آ</span>
						</figure>
						<figure class="avatar avatar-lg">
							<span class="avatar-title bg-info rounded-circle">ب</span>
						</figure>
						<figure class="avatar">
							<span class="avatar-title bg-success rounded-circle">ص</span>
						</figure>
						<figure class="avatar avatar-sm">
							<span class="avatar-title bg-danger rounded-circle">د</span>
						</figure>
						<figure class="avatar avatar-xs">
							<span class="avatar-title bg-dark rounded-circle">ی</span>
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">وضعیت های آواتار</h6>
						<figure class="avatar avatar-state-warning avatar-xl">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar avatar-state-success avatar-lg">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar avatar-state-danger">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar  avatar-state-secondary avatar-sm">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
						<figure class="avatar  avatar-state-dark avatar-xs">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">شکل های آواتار</h6>
						<figure class="avatar">
							<img src="assets/media/image/avatar.jpg" alt="image">
						</figure>
						<figure class="avatar">
							<img src="assets/media/image/avatar.jpg" class="rounded" alt="image">
						</figure>
						<figure class="avatar">
							<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
						</figure>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">گروه آواتار</h6>
						<div class="avatar-group">
							<figure class="avatar">
								<span class="avatar-title bg-success rounded-circle">آ</span>
							</figure>
							<figure class="avatar">
								<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
							</figure>
							<figure class="avatar">
								<span class="avatar-title bg-danger rounded-circle">س</span>
							</figure>
							<figure class="avatar">
								<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
							</figure>
							<figure class="avatar">
								<span class="avatar-title bg-primary rounded-circle">ص</span>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
