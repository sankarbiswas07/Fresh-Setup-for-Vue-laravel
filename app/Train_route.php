<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train_route extends Model
{
    //table name
    protected $table = 'train_routes';
    //Primary key
    public $primaryKey = 'id';

    public $timestamp = true;

//    public function train_details(){
//        return $this->hasMany('App\Train_details', 'train_no');
//    }
//
//    public function master_station_id(){
//        return $this->hasMany('App\Master_station_entry', 'station_id');
//    }
}
