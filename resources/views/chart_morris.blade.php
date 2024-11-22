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

    <!-- Morris -->
    <link rel="stylesheet" href="{{ asset('vendors/charts/morris/morris.css') }}" type="text/css">

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

        <div class="card">
            <div class="card-body">
                <div class="morris-chart" id="bar-chart" style="height: 250px;"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="morris-chart" id="line-chart" style="height: 250px;"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="morris-chart" id="stacked" style="height: 250px;"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="morris-chart" id="area-chart" style="height: 250px;"></div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="morris-chart" id="pie-chart" style="height: 250px;"></div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- Morris -->
    <script src="{{ asset('vendors/charts/morris/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('vendors/charts/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/js/examples/charts/morris.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
