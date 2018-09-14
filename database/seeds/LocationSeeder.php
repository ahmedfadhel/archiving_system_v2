<?php

use Illuminate\Database\Seeder;
use App\Location;
class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $location = [
            [
                'name' => 'Baghdad',
                'loc_code' => 'bg',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString()
            ],
            [
                'name' => 'Basrh',
                'loc_code' => 'bs',
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon\Carbon::now()->toDateTimeString()
            ]
        ];
        Location::insert($location);
    
    }
}
