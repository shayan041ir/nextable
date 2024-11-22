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
						<h6 class="card-title">ویرایشگر درون خطی</h6>
						<div class="row">
							<div class="col-md-6">
								<div id="editor-demo4" contenteditable="true">
									<h1>
										<b>ویرایشگر CK <br>
											لورم <br> لورم ایپسوم</b>
									</h1>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<p>
										<img src="assets/media/image/ckeditor-logo.png" alt="CKEditor logo" style="float:left"></p>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت <strong>لورم ایپسوم متن ساختگی با تولید سادگی</strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه</p>
								</div>
								<div id="editor-demo5" contenteditable="true">
									<h3>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</h3>
									<p>
										لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت</p>
								</div>
							</div>
							<div class="col-md-6">
								<div id="editor-demo6" contenteditable="true">
									<h3>لورم ایپسوم متن ساختگی با تولید</h3>
									<p><strong>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از</strong> لورم ایپسوم <a data-cke-saved-href="https://ckeditor.com/" href="https://ckeditor.com/">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</a>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم</p>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه</p>
									<p><s>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و</s></p>
								</div>
							</div>
						</div>
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
