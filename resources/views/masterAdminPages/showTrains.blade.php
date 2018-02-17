@extends('layouts.master')
@section('content')
   {{--{{json_encode($list)}}--}}
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>No</th>
                <th>Description</th>
                <th>image</th>
                <th>Type Name</th>
                <th>Running On</th>
                <th>Departure Time</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach( $list as $line)
                <tr>

                    <td>{{$line->id}}</td>
                    <td>{{$line->name}}</td>
                    <td>{{$line->noo}}</td>
                    <td>{{$line->description}}</td>
                    <td>
                        <img style="width:30px; height: 30px;" src="{{ URL::to('/uploads/' . $line->image) }}"/>
                    </td>
                    <td>{{$line->type_name}}</td>
                    <td>{{$line->days}}</td>
                    <td>{{$line->departure_time}}</td>
                    <td>
                        <a href="#" class="btn btn-success btn-xs">Edit</a>
                        <a href="#" class="btn btn-danger btn-xs"> Del</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection