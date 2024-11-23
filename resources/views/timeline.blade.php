@include('template.haedA');
@include('template.page_loader');
@include('template.sidebar_user_profile');
@include('template.sidebar_settings');
@include('template.navigation');
@include('template.header');

	<!-- begin::main content -->
	<main class="main-content">

		<div class="card">
			<div class="card-body">
				<div class="timeline">
					<div class="timeline-item">
						<div>
							<figure class="avatar avatar-sm m-r-15 bring-forward">
								<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
							</figure>
						</div>
						<div>
							<h6>لورم ایپسوم متن ساختگی</h6>
							<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> دیروز
							</small>
						</div>
					</div>
					<div class="timeline-item">
						<div>
							<figure class="avatar avatar-sm m-r-15 bring-forward">
								<span class="avatar-title bg-danger rounded-circle">ک</span>
							</figure>
						</div>
						<div>
							<h6>افزودن کاربر جدید</h6>
							<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
							<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> 1398/12/19
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
							<div class="row m-b-5">
								<div class="col-md-6">
									<img src="assets/media/image/portfolio-five.jpg" alt="image" class="w-25">
									<img src="assets/media/image/portfolio-one.jpg" alt="image" class="w-25">
									<img src="assets/media/image/portfolio-three.jpg" alt="image" class="w-25">
								</div>
							</div>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> 1398/12/05
							</small>
						</div>
					</div>
					<div class="timeline-item">
						<div>
							<figure class="avatar avatar-sm m-r-15 bring-forward">
								<span class="avatar-title bg-danger rounded-circle">ی</span>
							</figure>
						</div>
						<div>
							<h6>وب‌سایت</h6>
							<p class="m-b-5">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> 1398/11/28
							</small>
						</div>
					</div>
					<div class="timeline-item">
						<div>
							<figure class="avatar avatar-sm m-r-15 bring-forward">
								<span class="avatar-title bg-facebook rounded-circle">
									<i class="fa fa-facebook"></i>
								</span>
							</figure>
						</div>
						<div>
							<h6>ارسال فایل</h6>
							<div class=" m-b-0 text-muted text-left">
								<a href="#" class="btn btn-light text-left align-items-center justify-content-center btn-sm m-r-10 m-b-5">
									<i class="fa fa-file-o font-size-25 m-r-15"></i>
									<div class="small">
										<div class="mb-2">example.txt</div>
										<div dir="ltr">10 KB</div>
									</div>
								</a>
								<a href="#" class="btn btn-light text-left align-items-center justify-content-center btn-sm m-b-5">
									<i class="fa fa-file-pdf-o font-size-25 m-r-15"></i>
									<div class="small">
										<div class="mb-2">test.txt</div>
										<div dir="ltr">10 KB</div>
									</div>
								</a>
							</div>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> 1398/10/25
							</small>
						</div>
					</div>
					<div class="timeline-item">
						<div>
							<figure class="avatar avatar-sm m-r-15 bring-forward">
								<span class="avatar-title bg-youtube rounded-circle">آ</span>
							</figure>
						</div>
						<div>
							<h6>ویدئوی یوتیوب</h6>
							<div class="row">
								<div class="col-md-5">
									<div class="embed-responsive embed-responsive-16by9 m-t-b-5">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l-epKcOA7RQ" allowfullscreen></iframe>
									</div>
								</div>
							</div>
							<small class="text-muted">
								<i class="fa fa-clock-o m-r-5"></i> 1398/08/16
							</small>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
