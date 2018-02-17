<div class="sidebar">
    <div class="list-group">
        <span href="#" class="list-group-item active" style="background-color: #03a9f4">
            welcome <b>{{ Auth::user()->name }}</b>,
        </span>
            <a href="#" class="list-group-item" id="groupclick1">
                <i class="material-icons md-18">beenhere</i>Station<span class="badge">{{session('Scount')}}</span>
            </a>
        {{--ADD/EDIT/DELETE--}}
        <div id="group1">
                    <a href="{{route('addStationIndex')}}" class="list-group-item">
                        <i class="material-icons md-18">beenhere</i>Add Station
                    </a>

                    <a href="{{route('viewStations')}}" class="list-group-item">
                        <i class="fa fa-user fa-fw"></i>View Stations
                    </a>
        </div>
        {{--END ADD/EDIT/Delete--}}
            <a href="#" class="list-group-item" id="groupclick2">
                <i class="fa fa-search fa-fw"></i>Train Type<span class="badge">{{session('Ycount')}}</span>
            </a>
        {{--ADD/EDIT/DELETE--}}
        <div id="group2">
            <a href="{{route('addTrainIndex')}}" class="list-group-item">
                <i class="material-icons md-18">beenhere</i>Add Type
            </a>

            <a href="{{route('viewTrainTypes')}}" class="list-group-item">
                <i class="fa fa-user fa-fw"></i>View types
            </a>
        </div>
        {{--END ADD/EDIT/Delete--}}
            <a href="#" class="list-group-item" id="groupclick3">
                <i class="fa fa-user fa-fw"></i>Train Class<span class="badge">{{session('Ccount')}}</span>
            </a>
        {{--ADD/EDIT/DELETE--}}
        <div id="group3">
            <a href="{{route('addClassIndex')}}" class="list-group-item">
                <i class="material-icons md-18">beenhere</i>Add Class
            </a>

            <a href="{{route('viewClasses')}}" class="list-group-item">
                <i class="fa fa-user fa-fw"></i>View Classes
            </a>
        </div>
        {{--END ADD/EDIT/Delete--}}


            <a href="#" class="list-group-item" id="groupclick4">
                <i class="fa fa-folder-open-o fa-fw"></i>Train Details<span class="badge">{{session('Tcount')}}</span>
            </a>
        {{--ADD/EDIT/DELETE--}}
        <div id="group4">
            <a href="#" class="list-group-item">
                <i class="material-icons md-18">beenhere</i>Add Train
            </a>

            <a href="{{route('viewTrains')}}" class="list-group-item">
                <i class="fa fa-user fa-fw"></i>View Trains
            </a>
        </div>
        {{--END ADD/EDIT/Delete--}}




            <a href="#" class="list-group-item">
                <i class="fa fa-bar-chart-o fa-fw"></i>Add New Train Route <span class="badge">14</span>
            </a>
            <a href="#" class="list-group-item">

                 <img style="height:13px; width:10px;" src="{{url('/img/taka.png')}}">Fair List
            </a>
            <a href="{{route('logout')}}" class="list-group-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> <b style="color: black">Logout</b></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    </div>
</div>