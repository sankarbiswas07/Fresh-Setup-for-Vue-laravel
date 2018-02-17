<?php
namespace App\Http\Controllers;
use App\Train_details;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class uploadController extends Controller {

    public function index()
    {
        return view('test.imageupload');
    }



    public function upload(Request $request){



        if(Input::hasFile('file')){

            //echo 'Uploaded';
            $file = Input::file('file');
            $file->move('uploads', 't2');
            $Train_details = new Train_details;
            $Train_details->no='t2';
            $Train_details->description='local';
            $Train_details->type_id='1';
            $Train_details->days='tuesday';
            $Train_details->name='barackporelocal';
            $Train_details->image ='t2';
            $Train_details->save();

        }

    }
}
