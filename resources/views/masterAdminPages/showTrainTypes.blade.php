@extends('layouts.master')
@section('content')
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach( $list as $line)
                <tr>
                    <td>{{$line->id}}</td>
                    <td>{{$line->name}}</td>
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