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
                <div class="row text-center">
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_one" style="height:150px"></div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_two" style="height:150px"></div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_three" style="height:150px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_four" style="height:150px"></div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_five" style="height:150px"></div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div id="justgage_six" style="height:150px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="justgage_seven" style="height:300px"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="justgage_eight" style="height:300px"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div id="justgage_nine" style="height:300px"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="justgage_ten" style="height:300px"></div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- end::main content -->

    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- Justgage -->
    <script src="{{ asset('vendors/charts/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('vendors/charts/justgage/justgage.js') }}"></script>
    <script src="{{ asset('assets/js/examples/charts/justgage.js') }}"></script>
    <div class="colors">
        <!-- To use theme colors with Javascript -->
        <div class="bg-primary"></div>
        <div class="bg-primary-bright"></div>
        <div class="bg-secondary"></div>
        <div class="bg-secondary-bright"></div>
        <div class="bg-info"></div>
        <div class="bg-info-bright"></div>
        <div class="bg-success"></div>
        <div class="bg-success-bright"></div>
        <div class="bg-danger"></div>
        <div class="bg-danger-bright"></div>
        <div class="bg-warning"></div>
        <div class="bg-warning-bright"></div>
    </div>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
