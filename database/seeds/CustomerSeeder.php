<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $customer = Customer::create([
            'name' => 'زبون الاول',
            'descrption' => 'وصف الزبون',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
