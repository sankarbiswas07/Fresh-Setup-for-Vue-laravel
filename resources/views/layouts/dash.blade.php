<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ARCTC') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/bootstrap-drawer.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet">
</head>
<body class="has-drawer">
<div id="drawerExample" class="drawer dw-xs-10 dw-sm-6 dw-md-3 fold" aria-labelledby="drawerExample">
    <div class="drawer-controls">
        <a id="dwr" href="#drawerExample" data-toggle="drawer" href="#drawerExample" aria-foldedopen="false" aria-controls="drawerExample" class="btn btn-primary btn-sm" style="background-color: transparent;padding-bottom:2vh;margin-left:-10px;margin-top:-1vh;border: none;display: block">

            <i id="dwr_i" class="fa fa-chevron-right fa-fw fa-3x" style="padding-top:49vh;color:#399cf9 "></i>

        </a>
    </div>
    <div class="drawer-contents">
        <div class="drawer-heading" style="display: flex">
            <b><h1 class="drawer-title">AICTC</h1></b>
            <img id="n_logo" src="{{url('img/logo.png')}}" style="float: right;width: 50px;height: 50px;margin-left: 10vw; display: block"/>
        </div>
        <div class="drawer-body">
            <img src="{{url('img/nav_img.jpg')}}" alt="nav_img" class="img-responsive"/>
            <p style="color: black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                ex ea commodo
                consequat.</p>

        </div>
        <hr/>
        <ul class="drawer-nav">
            <li role="presentation"><a href="{{route('view')}}" style="color: black">Add Train</a></li>
            <li role="presentation"><a href="#" style="color: black">Update Train</a></li>
            <li role="presentation"><a href="{{route('show')}}" style="color: black">Show Trains</a></li>
        </ul>
        <hr/>

        <div class="drawer-body">
            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod--}}
            {{--tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,--}}
            {{--quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo--}}
            {{--consequat.</p>--}}
            <p style="font-size: 15px">Hello, {{ Auth::user()->name }} </p>

            <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b style="color: black">Logout from</b> AICTC</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </div>
        <hr/>



        <div class="drawer-body"">
        <center><p style="font-size: 20px">Quick Links <i class="fa fa-link fa-fw" style="color: #000;"></i></p></center>
        <a href="" style="color: black">link 1</a><br/>
        <a href="" style="color: black">link 2</a><br/>
        <a href="" style="color: black">link 3</a><br/>
        <a href="" style="color: black">link 4</a>
    </div>
</div>
</div>
<div id="app" style="background-color:white">


    @yield('content')

    @include('inc.foot')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/drawer.js') }}"></script>
<script src="{{ URL::asset('js/home.js') }}"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

</body>
</html>
