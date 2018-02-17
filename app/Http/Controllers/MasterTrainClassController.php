<?php

namespace App\Http\Controllers;

use App\Master_train_class;
use Illuminate\Http\Request;

class MasterTrainClassController extends Controller
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
        return view('masterAdminPages.addClass');
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
            $data = new Master_train_class;
            $data->name = $request->type_name[$i];
            $data->save();
        }
        return redirect('dashboard')->with('success','New Class added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Master_train_class  $master_train_class
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $list= Master_train_class::all();
        return view('masterAdminPages.showClass')->with('list', $list);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Master_train_class  $master_train_class
     * @return \Illuminate\Http\Response
     */
    public function edit(Master_train_class $master_train_class)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Master_train_class  $master_train_class
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master_train_class $master_train_class)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Master_train_class  $master_train_class
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master_train_class $master_train_class)
    {
        //
    }
}
