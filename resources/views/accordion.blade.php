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
				<h6 class="card-title">باز و بسته شونده پایه</h6>
				<div class="accordion" id="accordionExample">

					<div class="card">
						<div class="card-header" id="headingOne">
							<button class="btn btn-link primary-font" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								آیتم قابل بستن 1
							</button>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="headingTwo">
							<button class="btn btn-link primary-font collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								آیتم قابل بستن 2
							</button>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-header" id="headingThree">
							<button class="btn btn-link primary-font collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								آیتم قابل بستن 3
							</button>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
							<div class="card-body">
								لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (پیش فرض)</h6>
						<div class="accordion custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (اولیه)</h6>
						<div class="accordion accordion-primary custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (هشدار)</h6>
						<div class="accordion accordion-warning custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-chevron-up"></i>
									<i class="accordion-status-icon open fa fa-chevron-down"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (موفقیت)</h6>
						<div class="accordion accordion-success custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-close"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-close"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-close"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (خطر)</h6>
						<div class="accordion accordion-danger custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-circle"></i>
									<i class="accordion-status-icon open fa fa-circle-o"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-circle"></i>
									<i class="accordion-status-icon open fa fa-circle-o"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-circle"></i>
									<i class="accordion-status-icon open fa fa-circle-o"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="col-md-4">

				<div class="card">
					<div class="card-body">
						<h6 class="card-title">باز و بسته شونده سفارشی (تیره)</h6>
						<div class="accordion accordion-dark custom-accordion">

							<div class="accordion-row open">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 1</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-minus"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</p>
									<div class="row m-b-15">
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-five.jpg" alt="image" class="img-fluid">
										</div>
										<div class="col-md-6">
											<img src="assets/media/image/portfolio-four.jpg" alt="image" class="img-fluid">
										</div>
									</div>
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 2</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-minus"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
								</div>
							</div>

							<div class="accordion-row">
								<a href="#" class="accordion-header">
									<span>باز و بسته شونده 3</span>
									<i class="accordion-status-icon close fa fa-plus"></i>
									<i class="accordion-status-icon open fa fa-minus"></i>
								</a>
								<div class="accordion-body">
									<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده</p>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
