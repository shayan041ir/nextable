@include('template.haedA');
@include('template.page_loader');
@include('template.sidebar_user_profile');
@include('template.sidebar_settings');
@include('template.navigation');
@include('template.header');

	<!-- begin::main content -->
	<main class="main-content">

		<div class="error-page">
			<div class="text-center">
				<div class="row mb-5">
					<div class="col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3">
						<img src="assets/media/svg/404.svg" class="img-fluid" alt="image">
					</div>
				</div>
				<h1 class="mb-3 font-weight-bold">این صفحه یافت نشد</h1>
				<p class="mb-4 text-muted">
					چیزی که دنبالش می گردید را جستجو کنید.
				</p>
				<div class="row">
					<div class="col-md-4 offset-md-4">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="جستجو" aria-label="Example text with button addon" aria-describedby="button-addon1">
							<div class="input-group-append">
								<button class="btn btn-outline-primary" type="button" id="button-addon1">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

@include('template.footerA(scripts)');
