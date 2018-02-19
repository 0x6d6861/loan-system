<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="fullscreen-bg">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">

    <style>
        .modal-content{
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
        }
    </style>
    @yield('style')
</head>
<body>
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <!--<form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                        <span class="input-group-btn"><button type="button" class="btn btn-default">Go</button></span>
                    </div>
                </form>-->
                <ul class="nav navbar-nav" style="margin-left: 30px;">
                    <li class=""><a href="#"><i class="lnr lnr-thumbs-up"></i> <span>Get a Loan</span></a></li>
                    <li><a href="#"><i class="lnr lnr-drop"></i> <span>Lend</span></a></li>
                </ul>
                {{--<div class="navbar-btn navbar-btn-right">--}}
                    {{--<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>--}}
                {{--</div>--}}
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">5</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
                                <li><a href="#" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Basic Use</a></li>
                                <li><a href="#">Working With Data</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Troubleshooting</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">


                            <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <img src="{{ Auth::user()->avatar }}/resize/100/100/1" class="img-circle" alt="Avatar">
                                    <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('profile') }}"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                                    <li><a href="{{ route('messages') }}"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
                                    <li><a href="{{ route('settings') }}"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="lnr lnr-exit"></i> <span>Logout</span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest

                        </li>
                        <!-- <li>
                            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->

        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{ route('loans') }}" class="{{ Request::is('loans') ? 'active' : '' }}"><i class="lnr lnr-code"></i> <span>Loans</span></a></li>
                        <li><a href="{{ route('lends') }}" class="{{ Request::is('lends') ? 'active' : '' }}"><i class="lnr lnr-chart-bars"></i> <span>Lends</span></a></li>
                        <li><a href="{{ route('messages') }}" class="{{ Request::is('messages') ? 'active' : '' }}"><i class="lnr lnr-cog"></i> <span>Messages</span></a></li>
                        <li><a href="{{ route('payments') }}" class="{{ Request::is('payments') ? 'active' : '' }}"><i class="lnr lnr-alarm"></i> <span>Payments</span></a></li>
                        <li><a href="{{ route('settings') }}" class="{{ Request::is('settings') ? 'active' : '' }}"><i class="lnr lnr-dice"></i> <span>Settings</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <div class="main">
            <!-- MAIN CONTENT -->
            <div class="main-content">
                <div class="container-fluid">
                    @yield('content')
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

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/scripts/klorofil-common.js') }}"></script>
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}
<script src="{{ asset('js/jquery.form.js') }}"></script>

    @yield('script')
</body>
</html>
