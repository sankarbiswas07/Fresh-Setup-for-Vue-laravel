<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_station_entry extends Model
{
    //table name
    protected $table = 'master_station_entries';
    //Primary key
    public $primaryKey = 'id';

    public $timestamp = true;

}
