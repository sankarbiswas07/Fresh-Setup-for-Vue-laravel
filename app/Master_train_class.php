<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_train_class extends Model
{
    //table name
    protected $table = 'master_train_classes';
    //Primary key
    public $primaryKey = 'id';

    public $timestamp = true;
//
//    public function fair_lists(){
//        return $this->belongsTo('App\Fair_list');
//    }
}
