@extends('layouts.dash')

@section('content')


   <div class="container" style="padding-top: 2vh">
       <div style="display: flex; margin-left: 6vw" >

           <p style="color:#399cf9;font-size: 48px;margin-right: 1vw">WELCOME ADMIN</p>
           <img src="{{url('img/logo.png')}}" alt="logo" style="width: 90px;height: 90px">
           <p style="color:#399cf9;font-size: 48px;margin-left: 1vw">ARCTC DASHBOARD

       </div>
       <hr style="background-color: #399cf9;height: 3px"/>
       <div class="row" style="margin-top: 7vh">
           <center>
           <div class="col-sm-3" >
               <button class="btn btn-default" style="background-color: white;border:5px solid #d757f6;width: 150px;height: 150px"><i class="fa fa-train fa-5x" style="color: #d757f6"></i></button>
               <label style="color: #d757f6;font-size: 55px;display: block">1012</label>
           </div>
           <div class="col-sm-3">
               <button class="btn btn-default" style="background-color: white;border:5px solid #ff8a84;width: 150px;height: 150px"><i class="fa fa-bullhorn fa-5x" style="color: #ff8a84"></i></button>
                <label style="color: #ff8a84;font-size: 55px;display: block">784</label>
           </div>
           <div class="col-sm-3">
               <button class="btn btn-default" style="background-color: white;border:5px solid #72bb53;width: 150px;height: 150px"><i class="fa fa-road fa-5x" style="color: #72bb53"></i></button>
               <label style="color: #72bb53;font-size: 55px;display: block">45</label>
           </div>
           <div class="col-sm-3">
               <button class="btn btn-default" style="background-color: white;border:5px solid #0c59cf;width: 150px;height: 150px"><i class="fa fa-user fa-5x" style="color: #0c59cf"></i></button>
               <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><label style="color: #0c59cf;font-size: 55px;display: block">Logout</label></a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   {{ csrf_field() }}
               </form>
           </div>
           </center>
       </div>
        <div style="margin-top: 27vh">

        </div>
    </div>


@endsection