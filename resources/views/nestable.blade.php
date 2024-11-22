<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>قالب Nextable - قالب مدیریتی نکستیبل</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}">

	<!-- Theme Color -->
	<meta name="theme-color" content="#5867dd">

	<!-- Plugin styles -->
	<link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

	<!-- Nestable -->
	<link rel="stylesheet" href="{{ asset('vendors/nestable/nestable.css') }}" type="text/css">

	<!-- App styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
</head>

<body>

    @include('template.page_loader');
    @include('template.sidebar_user_profile');
    @include('template.sidebar_settings');
    @include('template.navigation');
    @include('template.header');

	<!-- begin::main content -->
	<main class="main-content">

		<div class="mb-4" id="nestable-menu">
			<button type="button" class="btn btn-primary mr-2" data-action="expand-all">باز کردن همه</button>
			<button type="button" class="btn btn-primary" data-action="collapse-all">جمع کردن همه</button>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">دستگیره های قابل کشیدن</h6>
						<p class="text-muted">لیست تو در تو با قابلیت کشیدن و رها کردن توسط ماوس و لمس (پلاگین jQuery)</p>
						<div class="dd" id="nestable2">
							<ol class="dd-list">
								<li class="dd-item" data-id="1">
									<div class="dd-handle">آیتم 1</div>
								</li>
								<li class="dd-item" data-id="2">
									<div class="dd-handle">آیتم 2</div>
								</li>
								<li class="dd-item" data-id="3">
									<div class="dd-handle">آیتم 3</div>
									<ol class="dd-list">
										<li class="dd-item" data-id="4">
											<div class="dd-handle">آیتم 4</div>
										</li>
										<li class="dd-item" data-id="5">
											<div class="dd-handle">آیتم 5</div>
										</li>
										<li class="dd-item" data-id="6">
											<div class="dd-handle">آیتم 6</div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="form-group">
					<textarea id="nestable2-output" class="form-control"></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">دستگیره های قابل کشیدن</h6>
						<p class="text-muted">لیست تو در تو با قابلیت کشیدن و رها کردن توسط ماوس و لمس (پلاگین jQuery)</p>
						<div class="dd" id="nestable1">
							<ol class="dd-list">
								<li class="dd-item dd3-item" data-id="13">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content">لورم ایپسوم</div>
								</li>
								<li class="dd-item dd3-item" data-id="14">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content">لورم ایپسوم</div>
								</li>
								<li class="dd-item dd3-item" data-id="15">
									<div class="dd-handle dd3-handle"></div>
									<div class="dd3-content">لورم ایپسوم</div>
									<ol class="dd-list">
										<li class="dd-item dd3-item" data-id="16">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content">لورم ایپسوم</div>
										</li>
										<li class="dd-item dd3-item" data-id="17">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content">لورم ایپسوم</div>
										</li>
										<li class="dd-item dd3-item" data-id="18">
											<div class="dd-handle dd3-handle"></div>
											<div class="dd3-content">لورم ایپسوم</div>
										</li>
									</ol>
								</li>
							</ol>
						</div>
					</div>
				</div>
				<div class="form-group">
					<textarea id="nestable-output" class="form-control"></textarea>
				</div>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- begin::nestable -->
	<script src="{{ asset('vendors/nestable/jquery.nestable.js') }}"></script>
	<script>
		$(function () {
			var updateOutput = function (e) {
				var list = e.length ? e : $(e.target),
					output = list.data('output');
				if (window.JSON) {
					output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
				} else {
					output.val('JSON browser support required for this demo.');
				}
			};

			$('#nestable1').nestable().on('change', updateOutput);

			$('#nestable2').nestable({
				group: 1
			}).on('change', updateOutput);

			updateOutput($('#nestable1').data('output', $('#nestable-output')));
			updateOutput($('#nestable2').data('output', $('#nestable2-output')));

			$('#nestable-menu').on('click', function (e) {
				var target = $(e.target),
					action = target.data('action');
				if (action === 'expand-all') {
					$('.dd').nestable('expandAll');
				}
				if (action === 'collapse-all') {
					$('.dd').nestable('collapseAll');
				}
			});
		});
	</script>
	<!-- end::nestable -->

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
 
</html>
