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
				<h6 class="card-title">پایه</h6>
				<button type="button" class="btn btn-primary" data-toggle="popover" title="عنوان پاپ اور" data-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.">لورم ایپسوم متن ساختگی با تولید
				</button>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">جهت ها</h6>
				<div class="row text-center justify-content-md-center">
					<div class="col-md-3 m-t-b-20">
						<button type="button" class="btn btn-secondary m-r-5" data-container="body" data-toggle="popover" data-placement="top" data-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.">
							پاپ اور در بالا
						</button>
					</div>
					<div class="col-md-3 m-t-b-20">
						<button type="button" class="btn btn-secondary m-r-5" data-container="body" data-toggle="popover" data-placement="right" data-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.">
							پاپ اور در چپ
						</button>
					</div>
					<div class="col-md-3 m-t-b-20">
						<button type="button" class="btn btn-secondary m-r-5" data-container="body" data-toggle="popover" data-placement="bottom" data-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.">
							پاپ اور در پایین
						</button>
					</div>
					<div class="col-md-3 m-t-b-20">
						<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.">
							پاپ اور در راست
						</button>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
