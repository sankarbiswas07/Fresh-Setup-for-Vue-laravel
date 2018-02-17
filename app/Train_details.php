<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train_details extends Model
{
    //table name
    protected $table = 'train_details';
    //Primary key
    public $primaryKey = 'id';
    //foreign key
    public $foreignKey = 'type_id';
    //Timestamp
    public $timestamp = true;

//    public function master_train_type(){
//        return $this->belongsTo('App\Master_train_type','type_id');
//    }
//
//    public function train_route(){
//        return $this->hasMany('App\Train_route');
//    }
//     public function fair_lists(){
//        return $this->belongsToMany('App\Train_details');
//     }

}
