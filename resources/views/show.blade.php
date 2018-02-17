@extends('layouts.app')

@section('content')


<div class="container" style="margin-top: 10vh">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr style="background-color: #399cf9">
                <th colspan="10" class="text-center">Train Details</th>

            </tr>
            <tr style="background-color: #399cf9">
                <th class="text-center">Name</th>
                <th class="text-center">No.</th>
                <th class="text-center">Type</th>
                <th class="text-center">Desvription</th>
                <th class="text-center">Source Stn.</th>
                <th class="text-center">Departure Date</th>
                <th class="text-center">Departure Date</th>
                <th class="text-center">Days/Week</th>
                <th class="text-center">Route</th>
                <th class="text-center">Update</th>

            </tr>
            </thead>


            <tbody>
            @foreach($test2 as $test1)

            <tr>
                <td>{{$test1->name}}</td>
                <td>{{$test1->no}}</td>
                {{--<td>{{  }}</td>--}}
                {{--<td>{{  }}</td>--}}
                {{--<td>{{  }}</td>--}}
                {{--<td>{{  }}</td>--}}
                {{--<td>{{  }}</td>--}}
                {{--<td>{{  }}</td>--}}
                {{--<td><a href="{{route('sroute',[$train->t_no])}}"><button class="btn btn-default" style="background-color:#399cf9; color:white;" type="button">Route</button></a></td>--}}
                <td><a href="{{route('edit',[$test1->id])}}"><button class="btn btn-default" style="background-color:#399cf9; color:white;" type="button">Update</button></a></td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin-top: 38.5vh">

    </div>
</div>


@endsection