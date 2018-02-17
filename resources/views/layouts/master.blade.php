<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ARCTC') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/master.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">


<style>
    .md-18 { font-size: 15px;}

</style>
</head>
<body style="overflow-x: hidden">

<div id="app">
    {{--Admin navbar--}}

    @include('inc.adminNav')
    {{--side pannel--}}
    <div class="row">
        <div class="col-md-3">
        @include('inc.masterSidePannel')
        </div>
        {{--Admin middle section--}}
        <div class="col-md-9 ">
            @include('inc.errors')
            @yield('content')
        </div>

    </div>
        <div style="margin-top:74.8vh;">
        @include('inc.foot')
        </div>
    https://files.slack.com/files-pri/T2T2QLJ9X-F958XNC5U/20180205_162248.jpg
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
    // script for grouping side pannel
    $('#group1').hide();
    $('#group2').hide();
    $('#group3').hide();
    $('#group4').hide();

    $('#groupclick1').click(function () {
        $('#group1').toggle();
        $('#group2').hide();
        $('#group3').hide();
    });
    $('#groupclick2').click(function () {
        $('#group2').toggle();
        $('#group1').hide();
        $('#group3').hide();
    });
    $('#groupclick3').click(function () {
        $('#group3').toggle();
        $('#group2').hide();
        $('#group1').hide();
    });
    $('#groupclick4').click(function(){
        $('#group4').toggle();
        $('#group2').hide();
        $('#group1').hide();
        $('#group3').hide();
    }) ;
    //script for show table which is inharited from 3 cdn written bellow
    $(document).ready(function() {
        $('#example').DataTable();
    } );

</script>

<script src="{{ URL::asset('js/master.js') }}"></script>
<script src="{{ URL::asset('js/masterType.js') }}"></script>
<script src="{{ URL::asset('js/class.js') }}"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>-

{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

</body>
</html>
