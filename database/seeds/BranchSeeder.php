<?php

use Illuminate\Database\Seeder;
use App\Branch;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $branch = Branch::create([
            'name' => 'الكرادة',
            'brch_code'=>'bg-1',
            'location_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
