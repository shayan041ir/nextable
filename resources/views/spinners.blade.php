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
				<h6 class="card-title">چرخنده خط گرد</h6>
				<div class="spinner-border text-primary" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-secondary" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-success" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-danger" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-warning" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-info" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-light" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-border text-dark" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">چرخنده بزرگ شونده</h6>
				<div class="spinner-grow text-primary" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-secondary" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-success" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-danger" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-warning" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-info" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-light" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow text-dark" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">تراز</h6>
				<div class="spinner-border" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<hr>
				<div class="d-flex justify-content-center">
					<div class="spinner-border" role="status">
						<span class="sr-only">در حال بارگذاری ...</span>
					</div>
				</div>
				<hr>
				<div class="clearfix">
					<div class="spinner-border float-right" role="status">
						<span class="sr-only">در حال بارگذاری ...</span>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">اندازه</h6>
				<div class="spinner-border spinner-border-sm" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow spinner-grow-sm" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<hr>
				<div class="spinner-border" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<hr>
				<div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
				<div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
					<span class="sr-only">در حال بارگذاری ...</span>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">دکمه ها</h6>
				<button class="btn btn-primary" type="button" disabled>
					<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
					<span class="sr-only">در حال بارگذاری ...</span>
				</button>
				<button class="btn btn-primary" type="button" disabled>
					<span class="spinner-border spinner-border-sm m-r-5" role="status" aria-hidden="true"></span>
					در حال بارگذاری ...
				</button>
				<hr>
				<button class="btn btn-primary" type="button" disabled>
					<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
					<span class="sr-only">در حال بارگذاری ...</span>
				</button>
				<button class="btn btn-primary" type="button" disabled>
					<span class="spinner-grow spinner-grow-sm m-r-5" role="status" aria-hidden="true"></span>
					در حال بارگذاری ...
				</button>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
