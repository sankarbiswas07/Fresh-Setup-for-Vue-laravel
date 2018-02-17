@extends('layouts.master')

@section('content')
@foreach($test as $test)
 {{$test}}
    @endforeach

    @include('masterAdminPages.addStation')


@endsection

