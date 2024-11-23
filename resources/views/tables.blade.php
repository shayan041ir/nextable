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
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">نام</th>
										<th scope="col">نام خانوادگی</th>
										<th scope="col">دسته</th>
										<th class="text-right" scope="col">عمل</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>بیل</td>
										<td>زاکربرگ</td>
										<td>@mdo</td>
										<td class="text-right">
											<div class="dropdown">
												<a href="#" class="btn btn-light btn-floating btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" type="button">عمل</button>
													<button class="dropdown-item" type="button">عمل دیگر</button>
													<button class="dropdown-item" type="button">یک عمل دیگر</button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>بیل</td>
										<td>گیتس</td>
										<td>@fat</td>
										<td class="text-right">
											<div class="dropdown">
												<a href="#" class="btn btn-light btn-floating btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" type="button">عمل</button>
													<button class="dropdown-item" type="button">عمل دیگر</button>
													<button class="dropdown-item" type="button">یک عمل دیگر</button>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>پاول</td>
										<td>دوروف</td>
										<td>@twitter</td>
										<td class="text-right">
											<div class="dropdown">
												<a href="#" class="btn btn-light btn-floating btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fa fa-ellipsis-v" aria-hidden="true"></i>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<button class="dropdown-item" type="button">عمل</button>
													<button class="dropdown-item" type="button">عمل دیگر</button>
													<button class="dropdown-item" type="button">یک عمل دیگر</button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">آواتار</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6">

						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">آواتار</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<th>
													<figure class="avatar avatar-sm">
														<a href="#">
															<span class="avatar-title bg-info rounded-circle">م</span>
														</a>
													</figure>
												</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<th>
													<figure class="avatar avatar-sm">
														<a href="#">
															<span class="avatar-title bg-warning rounded-circle">ل</span>
														</a>
													</figure>
												</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<th>
													<figure class="avatar avatar-sm">
														<a href="#">
															<span class="avatar-title bg-danger rounded-circle">ب</span>
														</a>
													</figure>
												</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-6">

						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">آواتار</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">وضعیت</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>
													<span class="badge badge-success">فعال</span>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>
													<span class="badge badge-danger">غیرفعال</span>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>
													<span class="badge badge-warning">در انتظار</span>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
					<div class="col-md-6">

						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">آواتار</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">وضعیت</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<th>
													<figure class="avatar avatar-sm">
														<a href="#">
															<span class="avatar-title bg-success rounded-circle">آ</span>
														</a>
													</figure>
												</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>
													<a href="#" class="btn btn-danger btn-sm">رد کردن</a>
												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>
													<a href="#" class="btn btn-success btn-sm">تایید</a>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<th>
													<figure class="avatar avatar-sm">
														<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
													</figure>
												</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>
													<a href="#" class="btn btn-success btn-sm">تایید</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">جدول تیره</h6>
						<div class="table-responsive">
							<table class="table table-dark">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">نام</th>
										<th scope="col">نام خانوادگی</th>
										<th scope="col">دسته</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>بیل</td>
										<td>زاکربرگ</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>بیل</td>
										<td>گیتس</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>پاول</td>
										<td>دوروف</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">جدول با سرتیتر سفارشی</h6>
						<div class="table-responsive">
							<table class="table">
								<thead class="thead-dark">
									<tr>
										<th scope="col">#</th>
										<th scope="col">نام</th>
										<th scope="col">نام خانوادگی</th>
										<th scope="col">دسته</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>بیل</td>
										<td>زاکربرگ</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>بیل</td>
										<td>گیتس</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>پاول</td>
										<td>دوروف</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="table-responsive">
							<table class="table">
								<thead class="thead-light">
									<tr>
										<th scope="col">#</th>
										<th scope="col">نام</th>
										<th scope="col">نام خانوادگی</th>
										<th scope="col">دسته</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>بیل</td>
										<td>زاکربرگ</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>بیل</td>
										<td>گیتس</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>پاول</td>
										<td>دوروف</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">سطر های راه راه</h6>
								<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">سطر های راه راه تیره</h6>
								<div class="table-responsive">
									<table class="table table-striped table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>پاول</td>
												<td>دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول دور خط دار</h6>
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول دور خط دار تیره</h6>
								<div class="table-responsive">
									<table class="table table-bordered table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول بدون دور خط</h6>
								<div class="table-responsive">
									<table class="table table-borderless">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول بدون دور خط تیره</h6>
								<div class="table-responsive">
									<table class="table table-borderless table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">سطر های قابل Hover</h6>
								<div class="table-responsive">
									<table class="table table-hover">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">سطرهای قابل Hover تیره</h6>
								<div class="table-responsive">
									<table class="table table-hover table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول کوچک</h6>
								<div class="table-responsive">
									<table class="table table-sm">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">جدول کوچک تیره</h6>
								<div class="table-responsive">
									<table class="table table-sm table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">نام</th>
												<th scope="col">نام خانوادگی</th>
												<th scope="col">دسته</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>بیل</td>
												<td>زاکربرگ</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>بیل</td>
												<td>گیتس</td>
												<td>@fat</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td colspan="2">پاول دوروف</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">کلاس های کاربردی</h6>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th scope="col">کلاس</th>
												<th scope="col">سرتیتر</th>
												<th scope="col">سرتیتر</th>
											</tr>
										</thead>
										<tbody>
											<tr class="table-active">
												<th scope="row">فعال</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr>
												<th scope="row">پیش فرض</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-primary">
												<th scope="row">اولیه</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-secondary">
												<th scope="row">ثانویه</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-success">
												<th scope="row">موفقیت</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-danger">
												<th scope="row">اخطار</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-warning">
												<th scope="row">هشدار</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-info">
												<th scope="row">اطلاعات</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-light">
												<th scope="row">روشن</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="table-dark">
												<th scope="row">تیره</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<h6 class="card-title">کلاس های کاربردی</h6>
								<div class="table-responsive">
									<table class="table table-dark">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">سرتیتر</th>
												<th scope="col">سرتیتر</th>
											</tr>
										</thead>
										<tbody>
											<tr class="bg-primary">
												<th scope="row">1</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="bg-success">
												<th scope="row">3</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr>
												<th scope="row">4</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="bg-info">
												<th scope="row">5</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr>
												<th scope="row">6</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="bg-warning">
												<th scope="row">7</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr>
												<th scope="row">8</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
											<tr class="bg-danger">
												<th scope="row">9</th>
												<td>خانه</td>
												<td>خانه</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">عناوین</h6>
						<div class="table-responsive">
							<table class="table">
								<caption>لیست کاربران</caption>
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">نام</th>
										<th scope="col">نام خانوادگی</th>
										<th scope="col">دسته</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>بیل</td>
										<td>زاکربرگ</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>بیل</td>
										<td>گیتس</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>پاول</td>
										<td>دوروف</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

@include('template.footerA(scripts)');
