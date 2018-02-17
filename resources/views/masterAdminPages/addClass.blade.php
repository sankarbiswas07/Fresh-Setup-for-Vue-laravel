@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="{{route("addClassSub")}}" method="Post">
            {{csrf_field()}}
                <div id="class_wrap">

                    <div class="row" style="margin-top:4.5vh;margin-left: -3vw">
                        <div class="col-lg-9">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                                <input class="form-control" type="text" name="class_name[]" id="type_name" placeholder="Class Name" />
                            </div>
                        </div>

                        <div class="col-lg-1">
                            <button id="class_add" class="btn btn-default">Add</button>
                        </div>
                    </div>
                </div>
            <br/>
            <div class="row">
                <div class="col-lg-offset-4">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection