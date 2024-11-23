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
				<h6 class="card-title">پایه</h6>
				<div class="table-responsive">
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>نام</th>
								<th>موقعیت</th>
								<th>دفتر</th>
								<th>سن</th>
								<th>تاریخ شروع</th>
								<th>حقوق</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>کارا دنورز</td>
								<td>دستیار فروش</td>
								<td>تبریز</td>
								<td>46</td>
								<td>1391/12/06</td>
								<td>145,600 تومان</td>
							</tr>
							<tr>
								<td>بری الن</td>
								<td>طراح وب</td>
								<td>همدان</td>
								<td>47</td>
								<td>1391/03/21</td>
								<td>356,250 تومان</td>
							</tr>
							<tr>
								<td>لورل لنس</td>
								<td>مدیر سیستم</td>
								<td>همدان</td>
								<td>21</td>
								<td>1398/02/27</td>
								<td>103,500 تومان</td>
							</tr>
							<tr>
								<td>اولیور کوئین</td>
								<td>توسعه دهنده</td>
								<td>اهواز</td>
								<td>30</td>
								<td>1390/07/14</td>
								<td>86,500 تومان</td>
							</tr>
							<tr>
								<td>تامی مرلین</td>
								<td>طراح وب</td>
								<td>تبریز</td>
								<td>51</td>
								<td>1398/11/13</td>
								<td>183,000 تومان</td>
							</tr>
							<tr>
								<td>جان دیگل</td>
								<td>توسعه دهنده جاوا اسکریپت</td>
								<td>مشهد</td>
								<td>29</td>
								<td>1391/06/27</td>
								<td>183,000 تومان</td>
							</tr>
							<tr>
								<td>روی هارپر</td>
								<td>پشتیبان مشتری</td>
								<td>تبریز</td>
								<td>27</td>
								<td>1391/01/25</td>
								<td>112,000 تومان</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>نام</th>
								<th>موقعیت</th>
								<th>دفتر</th>
								<th>سن</th>
								<th>تاریخ شروع</th>
								<th>حقوق</th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				<h6 class="card-title">جدول جاوا اسکریپت</h6>
				<div class="alert alert-info alert-with-border" role="alert">
					<i class="ti-alert m-r-10"></i> مرورگر خود را در اندازه موبایل باز کنید.
				</div>
				<table class="table table-bordered table-striped table-responsive-stack" id="tableOne">
					<thead class="thead-dark">
						<tr>
							<th>نام</th>
							<th>رنگ</th>
							<th>طعم</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>اپل</td>
							<td>سبز و قرمز</td>
							<td>شیرین و ترش</td>
						</tr>
						<tr>
							<td>موز</td>
							<td>زرد</td>
							<td>شیرین</td>
						</tr>
						<tr>
							<td>انبه</td>
							<td>سبز نارنجی</td>
							<td>تند</td>
						</tr>
						<tr>
							<td>نارنجی</td>
							<td>نارنجی</td>
							<td>شیرین و ترش</td>
						</tr>
						<tr>
							<td>زغال اخته</td>
							<td>آبی</td>
							<td>کمی شیرین</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</main>
	<!-- end::main content -->


@include('template.footerA(scripts)');
