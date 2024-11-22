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
				<h6 class="card-title">تصاویر بندانگشتی</h6>
				<div class="row">
					<div class="col-md-2 m-b-15">
						<img src="assets/media/image/portfolio-one.jpg" alt="image" class="img-thumbnail">
					</div>
					<div class="col-md-2 m-b-15">
						<img src="assets/media/image/portfolio-two.jpg" alt="image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">زیرنویس دار</h6>
				<div class="row">
					<div class="col-md-6 m-b-15">
						<figure class="figure">
							<img src="assets/media/image/portfolio-six.jpg" class="figure-img img-fluid rounded" alt="image">
							<figcaption class="figure-caption">یک عنوان برای تصویر بالا.</figcaption>
						</figure>
					</div>
					<div class="col-md-6 m-b-15">
						<figure class="figure">
							<img src="assets/media/image/portfolio-six.jpg" class="figure-img img-fluid rounded" alt="image">
							<figcaption class="figure-caption text-right">یک عنوان برای تصویر بالا.</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
