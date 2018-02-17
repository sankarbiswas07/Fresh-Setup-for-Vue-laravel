<?php

namespace App\Http\Controllers;

use Auth;
use App\Master_train_type;
use Illuminate\Http\Request;

class MasterTrainTypeController extends Controller
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
        return view('masterAdminPages.addType');
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
        for($i=0;$i<count($request->type_name);$i++) {
            $data = new Master_train_type();
            $data->name = $request->type_name[$i];
            $data->save();
        }
        return redirect('dashboard')->with('success','New Train Type added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master_train_type  $master_train_type
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $list=Master_train_type::all();
        return view('masterAdminPages.showTrainTypes')->with('list', $list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master_train_type  $master_train_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Master_train_type $master_train_type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master_train_type  $master_train_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master_train_type $master_train_type)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master_train_type  $master_train_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master_train_type $master_train_type)
    {
        //
    }
}
