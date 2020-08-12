<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Test Project : @yield('title')</title>
    <!-- Favicon-->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- Bootstrap Core Css -->
    <link href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="{{ asset('plugins/node-waves/waves.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ asset('css/themes/all-themes.css')}}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-fileinput-master/css/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>

    @yield('header')
</head>
<body class="theme-red">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('index') }}">test project</a>
            @guest<a class="navbar-brand" href="{{ route('voyager.login') }}">Админка</a>@endguest

        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
    @auth
        <div class="user-info">
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ \Illuminate\Support\Facades\Auth::user()->name }}</div>
                <div class="email">{{ \Illuminate\Support\Facades\Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="{{ route('voyager.dashboard') }}"><i class="material-icons">input</i>Админ панель</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endauth
    <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header"> <a href="{{ route('index') }}"  class=" waves-effect waves-block">Главное меню</a></li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                        <i class="material-icons">library_music</i>
                        <span>Компании</span>
                    </a>
                    <ul class="ml-menu" style="display: none;">
                        <li>
                            <a href="{{ route('index') }}"  class=" waves-effect waves-block">Все доступные</a>
                        </li>
                    </ul>
        </div>
        <!-- #Menu -->
    </aside>

</section>

<section class="content">

    @if(session()->has('success'))
        <p class="alert alert-success">{{ session()->get('success') }}</p>
    @endif
    @if(session()->has('warning'))
        <p class="alert alert-warning">{{ session()->get('warning') }}</p>
    @endif
    @yield('content')


</section>



<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap Core Js -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
<!-- Select Plugin Js -->
<script src="{{ asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
<!-- Dropzone Plugin Js -->
<script src="{{ asset('plugins/dropzone/dropzone.js')}}"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{ asset('plugins/node-waves/waves.js')}}"></script>
@yield('footer')

<!-- Custom Js -->
<script src="{{ asset('js/admin.js')}}"></script>
<!--<script src="/js/pages/index.js"></script>-->

@yield('js')


</body>

</html>


