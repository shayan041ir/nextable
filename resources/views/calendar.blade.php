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

	<!-- Fullcalendar -->
	<link rel="stylesheet" href="{{ asset('vendors/fullcalendar/fullcalendar.min.css') }}" type="text/css">

	<!-- Clockpicker -->
	<link rel="stylesheet" href="{{ asset('vendors/clockpicker/bootstrap-clockpicker.min.css') }}" type="text/css">

	<!-- Datepicker -->
	<link rel="stylesheet" href="{{ asset('vendors/datepicker/daterangepicker.css') }}" type="text/css">

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

		<div class="mb-4 mt-1">
			<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#createEventModal">
				<i class="ti-plus mr-2"></i> ایجاد رویداد
			</button>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<h6 class="card-title">رویداد های قابل کشیدن</h6>
						<p class="text-muted">رویداد مورد نظر را بکشید و رها کنید</p>
						<div class="m-b-20" id="external-events">
							<div class="fc-event">
								<i class="fa fa-circle text-success"></i> انتشار قالب جدید
							</div>
							<div class="fc-event">
								<i class="fa fa-circle text-danger"></i> رویداد من
							</div>
							<div class="fc-event">
								<i class="fa fa-circle text-info"></i> جلسه با مدیر
							</div>
							<div class="fc-event">
								<i class="fa fa-circle text-warning"></i> ایجاد قالب جدید
							</div>
							<div class="fc-event">
								<i class="fa fa-circle text-dark"></i> تخصیص تیم
							</div>
						</div>
						<div class="form-group m-t-30">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="drop-remove" checked>
								<label class="custom-control-label" for="drop-remove">حذف پس از رهاسازی</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<div id="calendar-demo"></div>
					</div>
				</div>
			</div>
		</div>

		<!-- begin::Create Event Modal -->
		<div class="modal fade" id="createEventModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">ایجاد رویداد</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="بستن">
							<i class="ti-close"></i>
						</button>
					</div>
					<div class="modal-body">
						<form autocomplete="off">
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">عنوان</label>
								<div class="col-sm-9">
									<input id="event-title" type="text" class="form-control" placeholder="عنوان">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">نوع رویداد</label>
								<div class="col-sm-9">
									<div class="mt-2" id="event-type">
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline1">قرار ملاقات</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
											<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
											<label class="custom-control-label" for="customRadioInline2">جلسه</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group row row-sm">
								<label class="col-sm-3 col-form-label">شروع</label>
								<div class="col-sm-5 mb-2 mb-sm-0">
									<input id="event-start-date" type="text" class="form-control create-event-datepicker" placeholder="تاریخ">
								</div>
								<div class="col-sm-4">
									<input id="event-start-time" type="text" class="form-control create-event-demo" placeholder="ساعت">
								</div>
							</div>
							<div class="form-group row row-sm">
								<label class="col-sm-3 col-form-label">پایان</label>
								<div class="col-sm-5 mb-2 mb-sm-0">
									<input id="event-end-date" type="text" class="form-control create-event-datepicker" placeholder="تاریخ">
								</div>
								<div class="col-sm-4">
									<input id="event-end-time" type="text" class="form-control create-event-demo" placeholder="ساعت">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">مشارکت کنندگان</label>
								<div class="col-sm-9">
									<div class="avatar-group">
										<figure class="avatar avatar-sm">
											<span class="avatar-title bg-success rounded-circle">ک</span>
										</figure>
										<figure class="avatar avatar-sm">
											<span class="avatar-title bg-danger rounded-circle">س</span>
										</figure>
										<figure class="avatar avatar-sm">
											<span class="avatar-title bg-primary rounded-circle">ص</span>
										</figure>
										<figure class="avatar avatar-sm">
											<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
										</figure>
									</div>
									<button type="button" class="btn btn-primary btn-floating">
										<i class="ti-plus"></i>
									</button>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3 col-form-label">توضیحات</label>
								<div class="col-sm-9">
									<textarea id="event-desc" class="form-control" rows="6"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-3"></label>
								<div class="col-sm-9">
									<button type="submit" id="btn-save" class="btn btn-primary">ایجاد</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end::Create Event Modal -->

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- Fullcalendar -->
	<script src="{{ asset('vendors/fullcalendar/moment.min.js') }}"></script>
	<script src="{{ asset('vendors/fullcalendar/fullcalendar.min.js') }}"></script>
	<script src="{{ asset('vendors/fullcalendar/locale/fa.js') }}"></script>
	<script src="{{ asset('assets/js/examples/fullcalendar.js') }}"></script>

	<!-- Clockpicker -->
	<script src="{{ asset('vendors/clockpicker/bootstrap-clockpicker.min.js') }}"></script>
	<script src="{{ asset('assets/js/examples/clockpicker.js') }}"></script>

	<!-- Datepicker -->
	<script src="{{ asset('vendors/datepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets/js/examples/datepicker.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
