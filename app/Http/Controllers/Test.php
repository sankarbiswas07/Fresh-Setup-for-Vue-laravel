<?php

namespace App\Http\Controllers;

use App\Master_station_entry;
use App\Train_details;
use Auth;
use App\Fair_list;
use App\Master_train_class;
use Illuminate\Support\Facades\Input;
use DB;
use Response;
use Illuminate\Http\Request;

class Test extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test(){
       // $test = Fair_list::orderBy('created_at','desc')->get();

       // $test =  Fair_list::join('master_train_classes as classes','fair_lists.class_id','=','classes.id' )->first();


    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $test = Fair_list::join('master_train_classes as classes','fair_lists.class_id','=','classes.id')
            ->join('train_details as detail','fair_lists.train_no','=','detail.no')->get();
        return view('show')->with('test2', $test);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fair_list $fair_list
     * @return \Illuminate\Http\Response
     */
    public function show(Fair_list $fair_list)
    {
        return view('sroute');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fair_list $fair_list
     * @return \Illuminate\Http\Response
     */
    public function edit($task)
    {
        $test = Fair_list::join('master_train_classes as classes','fair_lists.class_id','=','classes.id')
            ->join('train_details as detail','fair_lists.train_no','=','detail.no')->find($task);
        return view('updateadmin.homeupdate')->with('task', $test);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Fair_list $fair_list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        Train_details::where('id', '=', $request->id)->update(['name' => $request->t_name]);

        return redirect('show');

    }
    public function autocomplete(Request $request)
    {
        $term = $request->term;

        $queries = DB::table('master_station_entries') //Your table name
        ->where('name', 'like', '%'.$term.'%') //Your selected row
        ->take(6)->get();

        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name]; //you can take custom values as you want
        }
        return response()->json($results);
    }

    public function fairautocomplete(Request $request)
    {
        $term = $request->term;

        $queries = DB::table('master_train_classes') //Your table name
        ->where('name', 'like', '%'.$term.'%') //Your selected row
        ->take(6)->get();

        foreach ($queries as $query)
        {
            $results[] = ['id' => $query->id, 'value' => $query->name]; //you can take custom values as you want
        }
        return response()->json($results);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fair_list $fair_list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fair_list $fair_list)
    {

    }
}