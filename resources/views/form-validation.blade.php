@include('template.haedA')
@include('template.page_loader');
@include('template.sidebar_user_profile');
@include('template.sidebar_settings');
@include('template.navigation');
@include('template.header');
	<!-- begin::main content -->
	<main class="main-content">

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">بازخورد معتبر</h6>
				<form class="needs-validation" novalidate="">
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<label for="validationCustom01">نام</label>
							<input type="text" class="form-control" id="validationCustom01" placeholder="نام" value="استیو" required="">
							<div class="valid-feedback">
								صحیح است!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationCustom02">نام خانوادگی</label>
							<input type="text" class="form-control" id="validationCustom02" placeholder="نام خانوادگی" value="جابز" required="">
							<div class="valid-feedback">
								صحیح است!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationCustomUsername">نام کاربری</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupPrepend">@</span>
								</div>
								<input type="text" class="form-control text-left" id="validationCustomUsername" placeholder="نام کاربری" aria-describedby="inputGroupPrepend" dir="ltr" required="">
								<div class="invalid-feedback">
									لطفا یک نام کاربری انتخاب کنید.
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">شهر</label>
							<input type="text" class="form-control" id="validationCustom03" placeholder="شهر" required="">
							<div class="invalid-feedback">
								لطفا یک شهر معتبر وارد نمایید.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom04">استان</label>
							<input type="text" class="form-control" id="validationCustom04" placeholder="استان" required="">
							<div class="invalid-feedback">
								لطفا یک استان معتبر وارد نمایید.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationCustom05">کدپستی</label>
							<input type="text" class="form-control text-left" id="validationCustom05" placeholder="کد پستی" dir="ltr" required="">
							<div class="invalid-feedback">
								لطفا یک کدپستی معتبر وارد نمایید.
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
							<label class="form-check-label" for="invalidCheck">
								با قوانین و مقررات موافقم
							</label>
							<div class="invalid-feedback">
								شما باید قبل از ثبت با قوانین موافقت کنید.
							</div>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">ثبت فرم</button>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">راهنما (تولتیپ)</h6>
				<form class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<label for="validationTooltip01">نام</label>
							<input type="text" class="form-control" id="validationTooltip01" placeholder="نام" value="استیو" required>
							<div class="valid-tooltip">
								صحیح است!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationTooltip02">نام خانوادگی</label>
							<input type="text" class="form-control" id="validationTooltip02" placeholder="نام خانوادگی" value="جابز" required>
							<div class="valid-tooltip">
								صحیح است!
							</div>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationTooltipUsername">نام کاربری</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
								</div>
								<input type="text" class="form-control text-left" id="validationTooltipUsername" placeholder="نام کاربری" aria-describedby="validationTooltipUsernamePrepend" dir="ltr" required>
								<div class="invalid-tooltip">
									لطفا یک نام کاربری وارد نمایید.
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationTooltip03">شهر</label>
							<input type="text" class="form-control" id="validationTooltip03" placeholder="شهر" required>
							<div class="invalid-tooltip">
								لطفا یک شهر معتبر وارد نمایید.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationTooltip04">استان</label>
							<input type="text" class="form-control" id="validationTooltip04" placeholder="استان" required>
							<div class="invalid-tooltip">
								لطفا یک استان معتبر وارد نمایید.
							</div>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationTooltip05">کدپستی</label>
							<input type="text" class="form-control text-left" id="validationTooltip05" placeholder="کد پستی" dir="ltr" required>
							<div class="invalid-tooltip">
								لطفا یک کدپستی معتبر وارد نمایید.
							</div>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">ثبت فرم</button>
				</form>
			</div>
		</div>

	</main>
	<!-- end::main content -->

	<!-- Plugin scripts -->
	<script src="{{ asset('vendors/bundle.js') }}"></script>

	<script>
		//  Form Validation
		window.addEventListener('load', function () {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function (form) {
				form.addEventListener('submit', function (event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	</script>

	<!-- App scripts -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
