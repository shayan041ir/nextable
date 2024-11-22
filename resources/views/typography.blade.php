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
					<div class="card-header">عناوین سرصفحه</div>
					<div class="card-body">
						<h1>h1. سرصفحه بوت استرپ</h1>
						<h2>h2. سرصفحه بوت استرپ</h2>
						<h3>h3. سرصفحه بوت استرپ</h3>
						<h4>h4. سرصفحه بوت استرپ</h4>
						<h5>h5. سرصفحه بوت استرپ</h5>
						<h6>h6. سرصفحه بوت استرپ</h6>
					</div>
				</div>

				<div class="card">
					<div class="card-header">نمایش سرتیتر ها</div>
					<div class="card-body">
						<h1 class="display-1">نمایش 1</h1>
						<h1 class="display-2">نمایش 2</h1>
						<h1 class="display-3">نمایش 3</h1>
						<h1 class="display-4">نمایش 4</h1>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h4>ابزار متن</h4>
						<hr>
					</div>
				</div>

				<div class="card">
					<div class="card-header">اختصارات</div>
					<div class="card-body">
						<p><abbr title="attribute">Attr</abbr></p>
						<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
					</div>
				</div>

				<div class="card">
					<div class="card-header">نقل قول ها</div>
					<div class="card-body">
						<blockquote class="blockquote">
							<p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
						</blockquote>
					</div>
				</div>

				<div class="card">
					<div class="card-header">نامگذاری یک منبع</div>
					<div class="card-body">
						<blockquote class="blockquote">
							<p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها</p>
							<footer class="blockquote-footer">یک فرد مشهور در <cite title="Source Title">عنوان منبع</cite></footer>
						</blockquote>
					</div>
				</div>

				<div class="card">
					<div class="card-header">تراز لیست توصیف</div>
					<div class="card-body">
						<dl class="row">
							<dt class="col-sm-3">لیست های توصیف</dt>
							<dd class="col-sm-9">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</dd>

							<dt class="col-sm-3">لورم ایپسوم</dt>
							<dd class="col-sm-9">
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
								<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</p>
							</dd>

							<dt class="col-sm-3">لورم ایپسوم متن</dt>
							<dd class="col-sm-9">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</dd>

							<dt class="col-sm-3 text-truncate">لورم ایپسوم متن ساختگی با تولید</dt>
							<dd class="col-sm-9">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
							</dd>

							<dt class="col-sm-3">تو در تو</dt>
							<dd class="col-sm-9">
								<dl class="row">
									<dt class="col-sm-4">لورم ایپسوم متن ساختگی</dt>
									<dd class="col-sm-8">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
									</dd>
								</dl>
							</dd>
						</dl>
					</div>
				</div>

			</div>
			<div class="col-md-6">

				<div class="card">
					<div class="card-header">سفارشی سازی سرتیتر ها</div>
					<div class="card-body">
						<h3>
							یک عنوان زیبا
							<small class="text-muted">با متن ثانویه محو شده</small>
						</h3>
					</div>
				</div>

				<div class="card">
					<div class="card-header">هدایت</div>
					<div class="card-body">
						<p class="lead">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه
						</p>
					</div>
				</div>

				<div class="card">
					<div class="card-header">المنت های متنی درون خطی</div>
					<div class="card-body">
						<p>میتوانید از تگ mark استفاده کنید برای
							<mark>هایلایت</mark>
							متن.
						</p>
						<p>
							<del>این متن به صورت حذف شده نمایش داده میشود.</del>
						</p>
						<p><s>این متن به عنوان یک متن نادرست تلقی میشود.</s></p>
						<p>
							<ins>این متن به عنوان یک توضیح برای محتوا تلقی میشود</ins>
						</p>
						<p><u>این متن به صورت زیرخط دار نمایش داده میشود</u></p>
						<p>
							<small>این متن با اندازه کوچکتر نمایش داده میشود</small>
						</p>
						<p><strong>این متن به صورت ضخیم نمایش داده میشود</strong></p>
						<p><em>این متن به صورت کج نمایش داده میشود</em></p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h4>لیست ها</h4>
						<hr>
					</div>
				</div>

				<div class="card">
					<div class="card-header">بدون سبک</div>
					<div class="card-body">
						<ul class="list-unstyled">
							<li>لورم ایپسوم متن ساختگی با تولید</li>
							<li>لورم ایپسوم متن ساختگی با تولید</li>
							<li>لورم ایپسوم متن ساختگی با تولید</li>
							<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
							<li>لورم ایپسوم متن ساختگی با تولید
								<ul>
									<li>لورم ایپسوم متن ساختگی با</li>
									<li>لورم ایپسوم متن ساختگی با</li>
									<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
									<li>لورم ایپسوم متن ساختگی با تولید</li>
								</ul>
							</li>
							<li>لورم ایپسوم متن ساختگی با تولید سادگی</li>
							<li>لورم ایپسوم متن ساختگی با</li>
							<li>لورم ایپسوم متن ساختگی</li>
						</ul>
					</div>
				</div>

				<div class="card">
					<div class="card-header">خطی</div>
					<div class="card-body">
						<ul class="list-inline">
							<li class="list-inline-item">لورم ایپسوم</li>
							<li class="list-inline-item">لورم ایپسوم متن ساختگی</li>
							<li class="list-inline-item">لورم ایپسوم متن</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
