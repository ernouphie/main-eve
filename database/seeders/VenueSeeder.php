<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 18; $x++) {
	        DB::table('venues')->insert([
	            'name' => Str::random(rand(8,23)),
	            'address_id' => $x,
	            'email' => Str::random(10).'@gmail.com',
	            'password' => Hash::make('password'),
	        ]);
	    }


	   DB::table('venues')->insert([
	            'name' => "Venue_Kathmandu",
	            'address_id' => 19,
	            'email' => 'venuekathmandu@gmail.com',
	            'password' => Hash::make('kathmandupassword'),
	        ]);

	   DB::table('venues')->insert([
	            'name' => "Venue_pokhara",
	            'address_id' => 20,
	            'email' => 'venuepokhara@gmail.com',
	            'password' => Hash::make('pokharapassword'),
	        ]);
    }
}
