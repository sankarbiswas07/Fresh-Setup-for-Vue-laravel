@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 13vh">

        <div class="row">
        <div class="col-md-3">
            <p style="color: black;font-size: 20px">Train Name: {{}}</p>
        </div>
        <div class="col-md-3">
            <p style="color: black;font-size: 20px">Train No: {{}}</p>
        </div>
        <div class="col-md-3">
            <p style="color: black;font-size: 20px">Strats from: {{}}</p>
        </div>
        <div class="col-md-3">
            <p style="color: black;font-size: 20px">Time : {{}}</p>
        </div>

    </div>

    </div>

    <div class="container" style="margin-top: 3vh">
        {{--{{$train}}--}}
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr style="background-color: #399cf9">
                    <th colspan="3" class="text-center">Route Details</th>

                </tr>
                <tr style="background-color: #399cf9">
                    <th class="text-center">Station</th>
                    <th class="text-center">Arrival Date</th>
                    <th class="text-center">Arrival Time</th>

                </tr>
                </thead>


                <tbody>
                @foreach ($routes as $route)

                    <tr>
                        <td>{{  }}</td>
                        <td>{{  }}</td>
                        <td>{{  }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div style="margin-top: 60.5vh">

        </div>
    </div>
