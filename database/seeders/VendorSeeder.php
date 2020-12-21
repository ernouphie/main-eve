<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 18; $x++) {
	        DB::table('vendors')->insert([
	            'name' => Str::random(rand(8,23)),
	            'address_id' => $x,
	            'email' => Str::random(10).'@gmail.com',
	            'password' => Hash::make('password'),
	        ]);
	    }


	    DB::table('vendors')->insert([
	            'name' => "Kathmandu_Vendor",
	            'address_id' => 19,
	            'email' => 'kathmanduvendor@gmail.com',
	            'password' => Hash::make('kathmandupassword'),
	        ]);

	    DB::table('vendors')->insert([
	            'name' => "Pokhara_Vendor",
	            'address_id' => 20,
	            'email' => 'pokharavendor@gmail.com',
	            'password' => Hash::make('pokharapassword'),
	        ]);
    }
}
