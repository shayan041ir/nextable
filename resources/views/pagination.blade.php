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
						<h6 class="card-title">نمای کلی</h6>
						<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active" aria-current="page">
									<a class="page-link" href="#">2 <span class="sr-only">(کنونی)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">بعدی</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">گرد</h6>
						<nav aria-label="...">
							<ul class="pagination pagination-rounded pagination-sm mb-3">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
										<i class="ti-angle-right"></i>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active" aria-current="page">
									<a class="page-link" href="#">2 <span class="sr-only">(کنونی)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">
										<i class="ti-angle-left"></i>
									</a>
								</li>
							</ul>
							<ul class="pagination pagination-rounded mb-3">
								<li class="page-item disabled">
									<a class="page-link" href="#" tabindex="-1" aria-disabled="true">
										<i class="ti-angle-right"></i>
									</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active" aria-current="page">
									<a class="page-link" href="#">2 <span class="sr-only">(کنونی)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">
										<i class="ti-angle-left"></i>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">اندازه ها</h6>
						<nav aria-label="...">
							<nav aria-label="..." class="mb-3">
								<ul class="pagination">
									<li class="page-item active" aria-current="page">
										<span class="page-link">1<span class="sr-only">(کنونی)</span></span>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
								</ul>
							</nav>
							<nav aria-label="..." class="mb-3">
								<ul class="pagination pagination-sm">
									<li class="page-item active" aria-current="page">
										<span class="page-link">1<span class="sr-only">(کنونی)</span></span>
									</li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
								</ul>
							</nav>
						</nav>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">تراز</h6>
						<nav aria-label="Page navigation example">
							<nav aria-label="Page navigation example" class="mb-3">
								<ul class="pagination">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#">بعدی</a>
									</li>
								</ul>
							</nav>
							<nav aria-label="Page navigation example" class="mb-3">
								<ul class="pagination justify-content-center">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#">بعدی</a>
									</li>
								</ul>
							</nav>
							<nav aria-label="Page navigation example">
								<ul class="pagination justify-content-end">
									<li class="page-item disabled">
										<a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item">
										<a class="page-link" href="#">بعدی</a>
									</li>
								</ul>
							</nav>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->
@include('template.footerA(scripts)');
