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
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="row">
                            <div class="col mb-4">
                                <span class="pie-1">226/360</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-2">0.52/1.561</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-3">1,4</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-4">226,134</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-5">0.52,1.041</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="row">
                            <div class="col mb-4">
                                <span class="pie-6">226/360</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-7">0.52/1.561</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-8">1,4</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-9">226,134</span>
                            </div>
                            <div class="col mb-4">
                                <span class="pie-10">0.52,1.041</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="row">
                            <div class="col mb-4">
                                <span class="line-1">2,5,9,6,5,-9,-7,3,7,5</span>
                            </div>
                            <div class="col mb-4">
                                <span class="line-2">5,3,9,6,5,9,7,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="line-3">-5,3,9,6,5,9,-3,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="line-4">8,3,2,6,5,9,7,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="line-5">8,3,2,6,-5,9,7,3,5,2</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <div class="row">
                            <div class="col mb-4">
                                <span class="bar-1">2,5,9,6,5,-9,-7,3,7,5</span>
                            </div>
                            <div class="col mb-4">
                                <span class="bar-2">5,3,9,6,5,9,7,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="bar-3">-5,3,9,6,5,9,-3,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="bar-4">8,3,2,6,5,9,7,3,5,2</span>
                            </div>
                            <div class="col mb-4">
                                <span class="bar-5">8,3,2,6,-5,9,7,3,5,2</span>
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

    <!-- Peity -->
    <script src="{{ asset('vendors/charts/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/js/examples/charts/peity.js') }}"></script>

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
