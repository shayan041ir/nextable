	<!-- begin::navigation -->
	<div class="navigation">
		<div class="navigation-icon-menu">
			<ul>
				<li class="active" data-toggle="tooltip" title="داشبورد">
					<a href="#navigationDashboards" title="داشبوردها">
						<i class="icon ti-pie-chart"></i>
						<span class="badge badge-warning">2</span>
					</a>
				</li>
				<li data-toggle="tooltip" title="برنامه ها">
					<a href="#navigationApps" title="برنامه ها">
						<i class="icon ti-package"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="پلاگین ها">
					<a href="#navigationPlugins">
						<i class="icon ti-brush-alt"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="عناصر">
					<a href="#navigationElements">
						<i class="icon ti-layers"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="صفحات">
					<a href="#navigationPages" title="صفحات کاربری">
						<i class="icon ti-user"></i>
					</a>
				</li>
			</ul>
			<ul>
				<li data-toggle="tooltip" title="ویرایش پروفایل">
					<a href="#" class="go-to-page">
						<i class="icon ti-settings"></i>
					</a>
				</li>
				<li data-toggle="tooltip" title="خروج">
					<a href="{{ route('login') }}" class="go-to-page">
						<i class="icon ti-power-off"></i>
					</a>
				</li>
			</ul>
		</div>
		<div class="navigation-menu-body">

            <ul id="navigationDashboards" class="navigation-active">
				<li class="navigation-divider">داشبورد</li>
				<li>
					<a class="active" href="{{ url('/') }}">فروش و مدیریت مشتری</a>
				</li>
				<li>
					<a href="{{ route('dashboard-two') }}">پشتیبانی <span class="badge badge-warning">2</span></a>
				</li>
				<li>
					<a href="{{ route('dashboard-three') }}">آمار وب سایت </a>
				</li>
				<li class="navigation-divider">سایر</li>
				<li>
					<a href="{{ route('widgets') }}">ویجت های بیشتر</a>
				</li>
				<li class="navigation-divider">خلاصه</li>
				<li>
					<a href="#" class="mb-2">
						<div class="d-flex align-items-center">
							<div>
								<div class="icon-block bg-warning text-white mr-3">
									<i class="ti-bar-chart"></i>
								</div>
							</div>
							<div>
								<h6 class="font-size-13 line-height-22 primary-font m-b-5">مجموع فروش</h6>
								<h4 class="m-b-0 primary-font font-weight-bold line-height-30">15,687</h4>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="mb-2">
						<div class="d-flex align-items-center">
							<div>
								<div class="icon-block bg-success text-white mr-3">
									<i class="ti-email"></i>
								</div>
							</div>
							<div>
								<h6 class="font-size-13 line-height-22 primary-font m-b-5">مجموع تیکت ها</h6>
								<h4 class="m-b-0 primary-font font-weight-bold line-height-30">214</h4>
							</div>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="d-flex align-items-center">
							<div>
								<div class="icon-block bg-info text-white mr-3">
									<i class="ti-user"></i>
								</div>
							</div>
							<div>
								<h6 class="font-size-13 line-height-22 primary-font m-b-5">بازدید کنندگان</h6>
								<h4 class="m-b-0 primary-font font-weight-bold line-height-30">30,313</h4>
							</div>
						</div>
					</a>
				</li>
			</ul>

            <ul id="navigationApps">
				<li class="navigation-divider">اپ ها</li>
				<li>
					<a href="{{ route('chat') }}">گفتگو</a>
				</li>
				<li>
					<a href="{{ route('inbox') }}">ایمیل</a>
				</li>
				<li>
					<a href="{{ route('calendar') }}">تقویم</a>
				</li>
				<li>
					<a href="{{ route('gallery') }}">گالری</a>
				</li>
				<li class="navigation-divider">دوستان</li>
				<li>
					<a href="#" class="d-flex">
						<div>
							<figure class="avatar avatar-state-success avatar-xs mr-3">
								<span class="avatar-title bg-warning rounded-circle">ت</span>
							</figure>
						</div>
						<div class="flex-grow-1">
							<h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">مری جین
							</h6>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="d-flex">
						<div>
							<figure class="avatar avatar-state-warning avatar-xs mr-3">
								<img src="assets/media/image/avatar.jpg" class="rounded-circle" alt="image">
							</figure>
						</div>
						<div class="flex-grow-1">
							<h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">جانی دپ
							</h6>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="d-flex">
						<div>
							<figure class="avatar avatar-state-danger avatar-xs mr-3">
								<span class="avatar-title bg-info rounded-circle">آ</span>
							</figure>
						</div>
						<div class="flex-grow-1">
							<h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">تونی استارک
							</h6>
						</div>
					</a>
				</li>
				<li>
					<a href="#" class="d-flex">
						<div>
							<figure class="avatar avatar-state-info avatar-xs mr-3">
								<span class="avatar-title bg-danger rounded-circle">ک</span>
							</figure>
						</div>
						<div class="flex-grow-1">
							<h6 class="m-b-0 d-flex font-weight-normal justify-content-between primary-font">استیو راجرز
							</h6>
						</div>
					</a>
				</li>
			</ul>

            <ul id="navigationPlugins">
				<li class="navigation-divider">پلاگین ها</li>
				<li><a href="{{ route('sweet_alert') }}">هشدار Sweet </a></li>
				<li><a href="{{ route('lightbox') }}">لایت باکس </a></li>
				<li><a href="{{ route('toast') }}">توست </a></li>
				<li><a href="{{ route('tour') }}">تور </a></li>
				<li><a href="{{ route('slick_slide') }}">اسلاید Slick </a></li>
				<li><a href="{{ route('nestable') }}">لیست تو در تو </a></li>
				<li>
					<a href="#">نمودار ها</a>
					<ul>
						<li><a href="{{ route('chart_apex') }}">Apex</a></li>
						<li><a href="{{ route('chartjs') }}">Chartjs</a></li>
						<li><a href="{{ route('chart_justgage') }}">Justgage</a></li>
						<li><a href="{{ route('chart_morris') }}">Morris</a></li>
						<li><a href="{{ route('chart-peity') }}">Peity</a></li>
					</ul>
				</li>
				<li>
					<a href="#">نقشه ها</a>
					<ul>
						<li><a href="{{ route('google_map') }}">نقشه گوگل</a></li>
						<li><a href="{{ route('vector_map') }}">نقشه وکتور</a></li>
					</ul>
				</li>
			</ul>

			<ul id="navigationElements">
				<li class="navigation-divider">عناصر</li>
				<li>
					<a href="#">پایه</a>
					<ul>
						<li><a href="{{ route('alerts') }}">اعلان‌ها </a></li>
						<li><a href="{{ route('badge') }}">نشان </a></li>
						<li><a href="{{ route('buttons') }}">دکمه ها </a></li>
						<li><a href="{{ route('pagination') }}">صفحه‌بندی </a></li>
						<li><a href="{{ route('dropdown') }}">منوی کشویی </a></li>
						<li><a href="{{ route('accordion') }}">باز و بسته شونده </a></li>
						<li><a href="{{ route('carousel') }}">اسلایدر </a></li>
						<li><a href="{{ route('typography') }}">تایپوگرافی </a></li>
						<li><a href="{{ route('list_group') }}">گروه لیست </a></li>
						<li><a href="{{ route('media_object') }}">رسانه </a></li>
						<li><a href="{{ route('images') }}">تصاویر </a></li>
						<li><a href="{{ route('progress') }}">پیشرفت </a></li>
						<li><a href="{{ route('modal') }}">مودال </a></li>
						<li><a href="{{ route('spinners') }}">چرخنده ها </a></li>
						<li><a href="{{ route('navs') }}">ناوبری ها </a></li>
						<li><a href="{{ route('tab') }}">تب </a></li>
						<li><a href="{{ route('tooltip') }}">راهنما (تولتیپ) </a></li>
						<li><a href="{{ route('popovers') }}">پاپ اور </a></li>
					</ul>
				</li>
				<li>
					<a href="#">فرم ها</a>
					<ul>
						<li><a href="{{ route('basic_form') }}">فرم پایه </a></li>
						<li><a href="{{ route('custom_form') }}">فرم سفارشی </a></li>
						<li><a href="{{ route('advanced_form') }}">فرم پیشرفته </a></li>
						<li><a href="{{ route('datepicker') }}">انتخاب گر تاریخ </a></li>
						<li><a href="{{ route('timepicker') }}">انتخاب گر زمان </a></li>
						<li><a href="{{ route('colorpicker') }}">انتخاب گر رنگ </a></li>
						<li><a href="{{ route('form-validation') }}">اعتبارسنجی فرم </a></li>
						<li><a href="{{ route('form-wizard') }}">فرم مرحله ای </a></li>
						<li><a href="{{ route('file-upload') }}">آپلود فایل </a></li>
						<li><a href="#">ویرایشگر CK</a>
							<ul>
								<li><a href="{{ route('ckeditor-article') }}">ویرایشگر مقاله </a></li>
								<li><a href="{{ route('ckeditor-inline') }}">ویرایشگر درون خطی </a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="tables.html">جدول‌ها</a>
					<ul>
						<li>
							<a href="{{ route('tables') }}">جدول‌های پایه </a>
						</li>
						<li>
							<a href="{{ route('data-table') }}">جدول اطلاعات </a>
						</li>
						<li>
							<a href="{{ route('responsive-table') }}">جدول واکنشگرا </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">کارت ها </a>
					<ul>
						<li><a href="{{ route('basic-cards') }}">کارت های پایه </a></li>
						<li><a href="{{ route('image-cards') }}">کارت های تصویری </a></li>
						<li><a href="{{ route('card-scroll') }}">کارت های اسکرول دار </a></li>
						<li><a href="{{ route('other-cards') }}">سایر </a></li>
					</ul>
				</li>
				<li><a href="{{ route('colors') }}">رنگ ها </a></li>
				<li>
					<a href="{{ route('avatar') }}">آواتار ها</a>
				</li>
				<li>
					<a href="{{ route('icons') }}">آیکن‌ها</a>
				</li>
			</ul>
			<ul id="navigationPages">
				<li class="navigation-divider">صفحات</li>
				<li><a href="{{ route('profile') }}">پروفایل </a></li>
				<li><a href="{{ route('timeline') }}">خط زمانی </a></li>
				<li><a href="{{ route('invoice') }}">صورتحساب </a></li>
				<li><a href="{{ route('pricing-table') }}">جداول قیمت ها </a></li>
				<li><a href="{{ route('search-result') }}">نتایج جستجو </a></li>
				<li><a href="{{ route('login') }}">ورود </a></li>
				<li><a href="{{ route('register') }}">ثبت نام </a></li>
				<li><a href="{{ route('recover-password') }}">بازیابی رمز عبور </a></li>
				<li><a href="lock-screen.html">قفل صفحه </a></li>
				<li>
					<a href="#">قالب های ایمیل</a>
					<ul>
						<li><a href="email-template-basic.html">پایه</a></li>
						<li><a href="email-template-alert.html">هشدار</a></li>
						<li><a href="email-template-billing.html">صورتحساب</a></li>
					</ul>
				</li>
				<li>
					<a href="#">صفحات خطا </a>
					<ul>
						<li><a href="404.html">404 </a></li>
						<li><a href="404-2.html">404 نسخه 2</a></li>
						<li><a href="503.html">503 </a></li>
						<li><a href="mean-at-work.html">تعمیرات </a></li>
					</ul>
				</li>
				<li><a href="blank-page.html">صفحه شروع</a></li>
				<li>
					<a href="#">سطح منو</a>
					<ul>
						<li><a href="#">سطح منو </a>
							<ul>
								<li><a href="#">سطح منو </a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- end::navigation -->
