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

<body class="form-membership">
    @include('template.page_loader');
    <div class="form-wrapper">

        <!-- logo -->
        <div class="logo">
            <img src="assets/media/image/logo-sm.png" alt="image">
        </div>
        <!-- ./ logo -->

        <h5>ورود</h5>
        @if (isset($Rnum))
            <h6>{{ $Rnum }}</h6>
        @endif
        <br>
        {{-- {{ session('verification_code') }} --}}

        <!-- form -->
        <form class="needs-validation" method="post" action="{{ route('send') }}">
            @csrf
            <div class="form-group d-flex flex-row-reverse">
                <input id="intTextBox" type="text" class="form-control frm-code mx-1 text-center" maxlength="1"
                    value="" name="S1" pattern="[0-9]*" inputmode="numeric" autofocus />
                <input type="text" class="form-control frm-code mx-1 text-center" maxlength="1" value=""
                    name="S2" pattern="[0-9]*" inputmode="numeric" />
                <input type="text" class="form-control frm-code mx-1 text-center" maxlength="1" value=""
                    name="S3" pattern="[0-9]*" inputmode="numeric" />
                <input type="text" class="form-control frm-code mx-1 text-center" maxlength="1" value=""
                    name="S4" pattern="[0-9]*" inputmode="numeric" />
            </div>
            <button class="btn btn-primary btn-block">تایید و ادامه</button>
            <form method="POST" action="{{ route('send.sendnum') }}" class="mt-3">
                @csrf
                <button class="btn btn-link text-muted btn-sm">ارسال مجدد کد</button>
            </form>
        </form>
        <!-- Plugin scripts -->
        <script src="{{ asset('vendors/bundle.js') }}"></script>

        <!-- App scripts -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script>
            document.querySelectorAll('.frm-code').forEach((input, index, inputs) => {
                input.addEventListener('input', function() {
                    if (this.value.length === 1 && index < inputs.length - 1) {
                        inputs[index + 1].focus(); // انتقال به فیلد بعدی
                    }
                });
            });
        </script>
</body>

</html>
