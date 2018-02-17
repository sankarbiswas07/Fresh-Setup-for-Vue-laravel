@extends('layouts.app')

@section('content')


    <center>
        <div class="container" style="margin-top: 13vh">
            <div class="row tab">
                <div class="col-xs-offset-2" >

                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks"  onclick="openResult(event,'first',id)" id="t1" style="background-color:#399cf9"></button>
                    </div>
                    <div class="col-xs-3" style="margin-top: -5px" >
                        <hr style="height:2px; background-color: black;"/>

                    </div>
                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks" onclick="openResult(event,'second',id)" id="t2"></button>
                    </div>
                    <div class="col-xs-3" style="margin-top: -5px">
                        <hr style="height:2px; background-color: black;"/>

                    </div>
                    <div class="col-xs-1">
                        <button class="btn btn-default tablinks"  onclick="openResult(event,'third',id)" id="t3"></button>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <hr/>
    <hr/>
    <div class="row">
        <div class="col-xs-2 col-xs-offset-1">
            <img src="{{url('img/msg.png')}}" alt="msg" class="img-responsive" style="width:50px; height:50px">
        </div>
        <div class="col-xs-7">
            <marquee><p>lorem impsum lorem impsum lorem impsum lorem impsum</p></marquee>
        </div>
        <div class="col-xs-2" >
            <img src="{{url('img/msg.png')}}" alt="msg" class="img-responsive" style="width:50px; height:50px">
        </div>
    </div>
    <form method="post" action="{{route('update',[$task->id])}}">
        <input type="hidden" name="id" value="{{$task->id}}">
        {{ csrf_field() }}
        <section id="first" style="display: block" class="tabcontent">
            <center><p style="font-size: 20px">BASIC DETAILS</p></center>
            <div class="container">
                <div class="row" style="margin-top:4.5vh">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input class="form-control" type="text" name="t_name" id="t_name" placeholder="Train Name" onkeyup="valName('smname', 2)" value="{{$task->name}}" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-minus-square fa-fw"></i></span>
                            <input class="form-control" type="text" name="t_no" id="t_no" placeholder="Train Number" onkeyup="valName('smname', 2)" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <select name="type" class="selectpicker show-tick" id="type" title="---Select type of train---">
                                <option value="Duronto">Duronto</option>
                                <option value="Rajdhani">Rajdhani</option>
                                <option value="Superfast">Superfast</option>
                                <option value="Local">Local</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="form-group">
                            <textarea class="form-control" name="desc" id="desc" placeholder="Description of the Train" rows="5" onkeyup="valCmnt()"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <center>
                <button id="t1btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top: 14vh" type="button" >Next</button>
            </center>
        </section>

        <section id="second" style="display:none" class="tabcontent">
            <center><p style="font-size: 20px">STARTING DETAILS</p></center>
            <div class="container">
                <div class="row" style="margin-top:5vh">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input class="form-control" type="text" name="src" id="src" placeholder="Source Station" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control" type="text" name="sdate" id="sdate" placeholder="Strat Date" data-provide="datetimepicker"/>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control" type="text" name="stime" id="stime" placeholder="Strat Time" data-provide="datetimepicker"/>
                        </div>
                    </div>

                </div>

                <div class="row" style="margin-top:5vh">
                    <center><p style="font-size: 15px">Days/week :</p></center>
                    <div class="col-lg-10 col-lg-offset-3">

                        <label class="checkbox-inline">
                            <input type="checkbox" value="Sunday" name="days[]">Sunday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Monday"  name="days[]">Monday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Tuesday"  name="days[]">Tuesday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Wednesday"  name="days[]">Wednesday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Thursday"  name="days[]">Thursday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Friday"  name="days[]">Friday
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="Saturday"  name="days[]">Saturday
                        </label>
                    </div>


                </div>
            </div>
            <center>
                <button id="t2btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top:1vh" type="button" >Next</button>
            </center>
        </section>

        <section id="third" style="display:none" class="tabcontent">
            <center><p style="font-size: 20px">ROUTES DETAILS</p></center>
            <div class="container" >
                <div class="row" style="margin-top:5vh" id="inp_wrap">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-train  fa-fw"></i></span>
                            <input class="form-control" type="text" name="stn[]" id="pgp" placeholder="Station" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control adate" type="text" name="enddate[]"  placeholder="Arrival Date" data-provide="datepicker" />
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            <input class="form-control atime" type="text" name="endtime[]"  placeholder="Arrival Time" data-provide="datepicker"/>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <button id="add" class="btn btn-default" style="background-color:#399cf9; color:white" type="button" >Add</button>
                    </div>


                </div>


            </div>

            <center>
                <button id="t3btn" class="btn btn-default" style="background-color:#399cf9; color:white;margin-left:-20px;margin-top:30.5vh" type="submit" >update</button>
            </center>
        </section>
    </form>
    <!--
        {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="panel panel-default" style="margin-top: 50vh">--}}


    {{--<div class="panel-body" >--}}
    {{--@if (session('status'))--}}
    {{--<div class="alert alert-success">--}}
    {{--{{ session('status') }}--}}
    {{--</div>--}}
    {{--@endif--}}

    {{----}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
            -->

@endsection
