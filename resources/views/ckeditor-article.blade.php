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
						<h6 class="card-title">ویرایشگر کلاسیک</h6>
						<textarea id="editor-demo1"></textarea>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">حالت سفارشی</h6>
						<textarea id="editor-demo2"></textarea>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">رنگ رابط کاربری</h6>
						<textarea id="editor-demo3"></textarea>
					</div>
				</div>

			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<!-- CKEditor -->
	<script src="{{ asset('vendors/ckeditor/ckeditor.js') }}"></script>
	<script src="{{ asset('assets/js/examples/ckeditor.js') }}"></script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
