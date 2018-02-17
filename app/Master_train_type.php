<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_train_type extends Model
{
    //table name
    protected $table = 'master_train_types';
    //Primary key
    public $primaryKey = 'id';

    public $timestamp = true;

//    public function train_details(){
//       return $this->hasMany('App\Train_details');
//    }
}
