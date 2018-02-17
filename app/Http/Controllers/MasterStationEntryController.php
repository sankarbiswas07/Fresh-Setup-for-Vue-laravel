<?php

namespace App\Http\Controllers;

use App\Master_station_entry;
use Illuminate\Http\Request;

class MasterStationEntryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('masterAdminPages.addStation');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for($i=0;$i<count($request->stn_name);$i++) {
            $data = new Master_station_entry();
            $data->name = $request->stn_name[$i];
            $data->abbr = $request->stn_abbr[$i];
            $data->next_station_distance =$request->distance[$i];
            $data->save();
        }
        return redirect('dashboard')->with('success','New Train added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master_station_entry  $master_station_entry
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $list= Master_station_entry::all();
        return view('masterAdminPages.showStation')->with('list', $list);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master_station_entry  $master_station_entry
     * @return \Illuminate\Http\Response
     */
    public function edit(Master_station_entry $master_station_entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master_station_entry  $master_station_entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master_station_entry $master_station_entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master_station_entry  $master_station_entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master_station_entry $master_station_entry)
    {
        //
    }
}
