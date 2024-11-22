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

				<div class="row text-center justify-content-md-center">
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
								اولیه
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
								ثانویه
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">
								موفقیت
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">
								اخطار
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">
								هشدار
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">
								اطلاعات
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown">
								روشن
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="dropdown">
							<button class="btn btn-dark dropdown-toggle" type="button" data-toggle="dropdown">
								تیره
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">دکمه جدا شده</h6>
				<div class="row text-center justify-content-md-center">
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">اولیه</button>
							<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-secondary">ثانویه</button>
							<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-success">موفقیت</button>
							<button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-danger">اخطار</button>
							<button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-warning">هشدار</button>
							<button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-info">اطلاعات</button>
							<button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-light">روشن</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group">
							<button type="button" class="btn btn-dark">تیره</button>
							<button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">اندازه ها</h6>
				<div class="row text-center justify-content-md-center">
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group m-r-5">
							<button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								دکمه بزرگ
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group m-r-5">
							<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								دکمه کوچک
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row text-center justify-content-md-center">
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group m-r-5">
							<button type="button" class="btn btn-lg btn-secondary">دکمه جدا شده بزرگ</button>
							<button type="button" class="btn btn-lg btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 m-t-b-20">
						<div class="btn-group m-r-5">
							<button type="button" class="btn btn-sm btn-secondary">دکمه جدا شده کوچک</button>
							<button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">نمایش منوی کشویی</span>
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">عمل</a>
								<a class="dropdown-item" href="#">عمل دیگر</a>
								<a class="dropdown-item" href="#">یک عمل دیگر</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">لینک جدا شده</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
