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
					<div class="card-body">
						<h6 class="card-title">نمای کلی</h6>
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">آدرس ایمیل</label>
								<input type="email" class="form-control text-left" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ایمیل" dir="ltr">
								<small id="emailHelp" class="form-text text-muted">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
								</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">رمز عبور</label>
								<input type="password" class="form-control text-left" id="exampleInputPassword1" placeholder="رمز عبور" dir="ltr">
							</div>
							<div class="form-group form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">مرا علامت بزنید</label>
							</div>
							<button type="submit" class="btn btn-primary">ثبت</button>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">کنترل های فرم</h6>
						<form>
							<div class="form-group">
								<label for="exampleFormControlInput1">آدرس ایمیل</label>
								<input type="email" class="form-control text-left" id="exampleFormControlInput1" placeholder="name@example.com" dir="ltr">
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect1">نمونه انتخاب</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlSelect2">نمونه چند انتخابی</label>
								<select multiple class="form-control" id="exampleFormControlSelect2">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">ناحیه متنی نمونه</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
							</div>
						</form>
						<p>برای ورودی فایل،  <code class="highlighter-rouge">.form-control</code> برای <code class="highlighter-rouge">.form-control-file</code>.</p>
						<form>
							<div class="form-group">
								<label for="exampleFormControlFile1">ورودی فایل نمونه</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">اندازه ها</h6>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="ورودی پیش فرض">
								</div>
								<div class="form-group">
									<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<select class="form-control form-control-lg">
										<option>انتخاب بزرگ</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control">
										<option>انتخاب پیش فرض</option>
									</select>
								</div>
								<div class="form-group">
									<select class="form-control form-control-sm">
										<option>انتخاب کوچک</option>
									</select>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">فقط خواندنی</h6>
						<input class="form-control" type="text" placeholder="ورودی فقط خواندنی ..." readonly>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">فرم های غیرفعال</h6>
						<form>
							<fieldset disabled>
								<div class="form-group">
									<label for="disabledTextInput">ورودی غیرفعال</label>
									<input type="text" id="disabledTextInput" class="form-control" placeholder="ورودی غیرفعال">
								</div>
								<div class="form-group">
									<label for="disabledSelect">انتخاب غیرفعال</label>
									<select id="disabledSelect" class="form-control">
										<option>گزینه غیرفعال</option>
									</select>
								</div>
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
										<label class="form-check-label" for="disabledFieldsetCheck">
											غیر قابل علامت گذاری
										</label>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">ثبت</button>
							</fieldset>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">چک باکس ها</h6>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								چک باکس پیش فرض
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="defaultCheck2" disabled>
							<label class="form-check-label" for="defaultCheck2">
								چک باکس غیرفعال
							</label>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">چک باکس درون خطی</h6>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
							<label class="form-check-label" for="inlineCheckbox1">1</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
							<label class="form-check-label" for="inlineCheckbox2">2</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
							<label class="form-check-label" for="inlineCheckbox3">3 (غیرفعال)</label>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">دکمه های رادیویی</h6>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
								دکمه رادیویی پیش فرض
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								دکمه رادیویی پیش فرض ثانویه
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
							<label class="form-check-label" for="exampleRadios3">
								دکمه رادیویی غیر فعال
							</label>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">دکمه های رادیویی درون خطی</h6>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
							<label class="form-check-label" for="inlineRadio1">1</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
							<label class="form-check-label" for="inlineRadio2">2</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
							<label class="form-check-label" for="inlineRadio3">3 (غیرفعال)</label>
						</div>
					</div>
				</div>

			</div>
			<div class="col-md-6">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">فیلد متنی فقط خواندنی</h6>
						<form>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">ایمیل</label>
								<div class="col-sm-10">
									<input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword" class="col-sm-2 col-form-label">رمز عبور</label>
								<div class="col-sm-10">
									<input type="password" class="form-control text-left" id="inputPassword" placeholder="رمز عبور" dir="ltr">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">ورودی بازه</h6>
						<form>
							<div class="form-group">
								<label for="formControlRange">ورودی بازه نمونه</label>
								<input type="range" class="form-control-range" id="formControlRange">
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">فرم افقی</h6>
						<form>
							<div class="form-group row">
								<label for="inputEmail3" class="col-sm-2 col-form-label">ایمیل</label>
								<div class="col-sm-10">
									<input type="email" class="form-control text-left" id="inputEmail3" placeholder="ایمیل" dir="ltr">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">رمز عبور</label>
								<div class="col-sm-10">
									<input type="password" class="form-control text-left" id="inputPassword3" placeholder="رمز عبور" dir="ltr">
								</div>
							</div>
							<div class="row">
								<label class="col-form-label col-sm-2 pt-0">دکمه های رادیویی</label>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
										<label class="form-check-label" for="gridRadios1">
											دکمه رادیویی اول
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
										<label class="form-check-label" for="gridRadios2">
											دکمه رادیویی دوم
										</label>
									</div>
									<div class="form-check disabled">
										<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
										<label class="form-check-label" for="gridRadios3">
											دکمه رادیویی سوم غیر فعال
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-2">چک باکس</div>
								<div class="col-sm-10">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" id="gridCheck1">
										<label class="form-check-label" for="gridCheck1">
											چک باکس نمونه
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-primary">ورود</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">اندازه برچسب فرم افقی</h6>
						<form>
							<div class="form-group row">
								<label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">ایمیل</label>
								<div class="col-sm-10">
									<input type="email" class="form-control form-control-sm text-left" id="colFormLabelSm" placeholder="col-form-label-sm" dir="ltr">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-2 col-form-label">ایمیل</label>
								<div class="col-sm-10">
									<input type="email" class="form-control text-left" id="colFormLabel" placeholder="col-form-label" dir="ltr">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">ایمیل</label>
								<div class="col-sm-10">
									<input type="email" class="form-control form-control-lg text-left" id="colFormLabelLg" placeholder="col-form-label-lg" dir="ltr">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">اندازه ستون</h6>
						<form>
							<div class="form-row">
								<div class="col-7">
									<input type="text" class="form-control" placeholder="شهر">
								</div>
								<div class="col">
									<input type="text" class="form-control" placeholder="استان">
								</div>
								<div class="col">
									<input type="text" class="form-control text-left" placeholder="کد پستی" dir="ltr">
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">متن راهنمای معمولی</h6>
						<label for="inputPassword5">رمز عبور</label>
						<input type="password" id="inputPassword5" class="form-control text-left" aria-describedby="passwordHelpBlock" dir="ltr">
						<small id="passwordHelpBlock" class="form-text text-muted">
							لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان
						</small>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">متن راهنمای درون خطی</h6>
						<form class="form-inline">
							<div class="form-group">
								<label for="inputPassword6">رمز عبور</label>
								<input type="password" id="inputPassword6" class="form-control mx-sm-3 text-left" aria-describedby="passwordHelpInline" dir="ltr">
								<small id="passwordHelpInline" class="text-muted">
									لورم ایپسوم متن ساختگی با تولید
								</small>
							</div>
						</form>
					</div>
				</div>

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">طرح های اعتبارسنجی فرم</h6>
						<form>
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="validationServer01">نام</label>
									<input type="text" class="form-control is-valid" id="validationServer01" placeholder="نام" value="استیو" required>
									<div class="valid-feedback">
										صحیح است!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="validationServer02">نام خانوادگی</label>
									<input type="text" class="form-control is-valid" id="validationServer02" placeholder="نام خانوادگی" value="جابز" required>
									<div class="valid-feedback">
										صحیح است!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="validationServerUsername">نام کاربری</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text" id="inputGroupPrepend3">@</span>
										</div>
										<input type="text" class="form-control text-left is-invalid" id="validationServerUsername" placeholder="نام کاربری" aria-describedby="inputGroupPrepend3" dir="ltr" required>
										<div class="invalid-feedback">
											لطفا یک نام کاربری انتخاب کنید.
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="validationServer03">شهر</label>
									<input type="text" class="form-control is-invalid" id="validationServer03" placeholder="شهر" required>
									<div class="invalid-feedback">
										لطفا یک شهر معتبر وارد نمایید.
									</div>
								</div>
								<div class="col-md-3 mb-3">
									<label for="validationServer04">استان</label>
									<input type="text" class="form-control is-invalid" id="validationServer04" placeholder="استان" required>
									<div class="invalid-feedback">
										لطفا یک استان معتبر وارد نمایید.
									</div>
								</div>
								<div class="col-md-3 mb-3">
									<label for="validationServer05">کدپستی</label>
									<input type="text" class="form-control text-left is-invalid" id="validationServer05" placeholder="کد پستی" dir="ltr" required>
									<div class="invalid-feedback">
										لطفا یک کدپستی معتبر وارد نمایید.
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-check">
									<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
									<label class="form-check-label" for="invalidCheck3">
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

			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
