@include('template.haedA');
@include('template.page_loader');
@include('template.sidebar_user_profile');
@include('template.sidebar_settings');
@include('template.navigation');
@include('template.header');

	<!-- begin::main content -->
	<main class="main-content">

		<div class="row">
			<div class="col-md-12">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">راهنما (تولتیپ)</h6>
						<div class="row text-center justify-content-md-center">
							<div class="col-md-3 m-t-b-20">
								<button type="button" class="btn btn-secondary m-r-5" data-toggle="tooltip" data-placement="top" title="تولتیپ در بالا">
									راهنما در بالا
								</button>
							</div>
							<div class="col-md-3 m-t-b-20">
								<button type="button" class="btn btn-secondary m-r-5" data-toggle="tooltip" data-placement="right" title="تولتیپ در چپ">
									راهنما در چپ
								</button>
							</div>
							<div class="col-md-3 m-t-b-20">
								<button type="button" class="btn btn-secondary m-r-5" data-toggle="tooltip" data-placement="bottom" title="تولتیپ در پایین">
									راهنما در پایین
								</button>
							</div>
							<div class="col-md-3 m-t-b-20">
								<button type="button" class="btn btn-secondary m-r-5" data-toggle="tooltip" data-placement="left" title="تولتیپ در راست">
									راهنما در راست
								</button>
							</div>
							<div class="col-md-3 m-t-b-20">
								<button type="button" class="btn btn-secondary m-r-5" data-toggle="tooltip" data-html="true" title="<em>تولتیپ</em> <u>دارای</u> <b>HTML</b>">
									راهنما با کد HTML
								</button>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">عنصر غیرفعال</h6>
						<span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="تولتیپ غیرفعال">
							<button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>دکمه غیرفعال</button>
						</span>
					</div>
				</div>

			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
