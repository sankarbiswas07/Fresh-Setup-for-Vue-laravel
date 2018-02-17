@extends('layouts.master')
@section('content')
    <div class="container">
        <form action="{{route('addStationSub')}}" method="post">
            {{csrf_field()}}
            <div id="stn_wrap">
                <div class="row" style="margin-top:4.5vh;margin-left: -3vw">
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input class="form-control" type="text" name="stn_name[]" id="stn_name" placeholder="Station Name" onkeyup="valName('smname', 2)" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>
                            <input class="form-control" type="text" name="stn_abbr[]" id="stn_abbr" placeholder="Station Abbr." onkeyup="valName('smname', 2)" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>
                            <input class="form-control" type="text" name="distance[]" id="distance" placeholder="Next Stn. Distance" onkeyup="valName('smname', 2)" />
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button id="stn_add" class="btn btn-default">Add</button>
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