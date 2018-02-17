<?php

use App\Master_station_entry;
use Illuminate\Database\Seeder;

class MasterStationEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test=new Master_station_entry;
        $test->name='agarpara';
        $test->abbr='agar';
        $test->next_station_distance=3;
        $test->save();
        $test=new Master_station_entry;
        $test->name='agarpara';
        $test->abbr='agar';
        $test->next_station_distance=3;
        $test->save();


    }
}
