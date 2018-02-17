<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="fullscreen-bg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">


    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">

</head>
<body>
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                @yield('content')
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <footer>
        <div class="container-fluid">
            {{--<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>--}}
        </div>
    </footer>
</div>
<!-- END WRAPPER -->

    <!-- Scripts -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
<script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
