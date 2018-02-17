<?php

namespace App\Http\Controllers;
use App\Http\Controllers\URL;
use App\Master_station_entry;
use App\Master_train_class;
use App\Master_train_type;
use Auth;
use App\Train_details;
use App\Train_route;
use App\Fair_list;
use Illuminate\Support\Facades\Input;
use Response;
use Illuminate\Http\Request;

class TrainDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }


    public function landing()
    {
        $user = Auth::user();
        if ( $user->flag== 'admin'){
            return view('dashboard');
        }
        else{
            $count_station= Master_station_entry::all();
            $countS= count($count_station);

            $count_class= Master_train_class::all();
            $countC= count($count_class);

            $count_type= Master_train_type::all();
            $countY= count($count_type);

            $count_train= Train_details::all();
            $countT= count($count_train);

            session(['Scount' => $countS, 'Ccount' => $countC, 'Ycount' => $countY, 'Tcount'=> $countT]);

           return view('masterAdminPages.addStation')->with('Tcount',$countT)->with('Scount',$countS)->with('Ccount',$countC)->with('Ycount',$countY);
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stations = Master_train_type::all();
        return view('home')->with('stations',$stations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Input::hasFile('file')){

            $file = Input::file('file');
            $img_name=$request->no;
            $file->move('uploads',$img_name);
            $Train_details = new Train_details;
            $Train_details->name=$request->name;
            $Train_details->no=$request->no;
            $Train_details->description=$request->desc;
            $Train_details->type_id=$request->input('type');
            $day = implode(", ",$request->days);
            $Train_details->days=$day;
            $Train_details->image=$request->no;
            $Train_details->save();
            //echo 'Uploaded';
        }
        $stations = Master_train_type::all();

        for($i=0;$i<count($request->stn);$i++) {
            $Train_routes = new Train_route;
            $Train_routes->train_no=$request->no;

            $stn = Master_station_entry::where('name','=',$request->stn[$i])->first();
            $Train_routes->station_id=$stn->id;
            $Train_routes->distance=$stn->next_station_distance;
            $Train_routes->save();
        }

        for($i=0;$i<count($request->fair);$i++) {
            $fair_list = new Fair_list;
            $fair_list->train_no=$request->no;

            $class = Master_train_class::where('name','=',$request->class[$i])->first();
            $fair_list->class_id=$class->id;
            $fair_list->fair=$request->fair[$i];
            $fair_list->save();
        }

        return view('home')->with('stations',$stations);

    }

    public function search(){
        $name=$_GET['name'];
        $dist = Master_station_entry::where('name','=',$name)->first();
        if(count($dist)==1) {
            $d = $dist->next_station_distance;
        }
        else{
            $d = 0;
        }
        return Response::json($d);

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Train_details  $train_details
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        //$list = Train_details::all();
        $list = Train_details::join('master_train_types','train_details.type_id','=','master_train_types.id')
            ->select(
                'train_details.id',
                'train_details.name',
                'train_details.no as noo',
                'train_details.description',
                'train_details.image',
                'train_details.days',
                'train_details.departure_time',
                'master_train_types.name as type_name'
            )->get();

       // echo $list;
  return view('masterAdminPages.showTrains')->with('list',$list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Train_details  $train_details
     * @return \Illuminate\Http\Response
     */
    //merge
    public function edit($train_details)
    {
        $train_details = Train_details::find($train_details);
        return view('updateadmin.homeupdate')->with('task',$train_details);
    }
//merge
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Train_details  $train_details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Train_details $train_details)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Train_details  $train_details
     * @return \Illuminate\Http\Response
     */
    public function destroy(Train_details $train_details)
    {
        //
    }
}
