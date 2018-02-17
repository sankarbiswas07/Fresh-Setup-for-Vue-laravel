<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fair_list extends Model
{
    //table name
    protected $table = 'fair_lists';
    //Primary key
    public $primaryKey = 'id';

    public $timestamp = true;

//    public function train_details(){
//        return $this->hasMany('App\Train_details', 'train_no');
//    }
//
//    public function master_train_classes(){
//       return $this->hasMany('App\Master_train_claass','class_id');
//    }


}
