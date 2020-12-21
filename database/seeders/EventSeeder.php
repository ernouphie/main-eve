<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        function randomDate($start_date, $end_date)
		{
		    // Convert to timetamps
		    $min = strtotime($start_date);
		    $max = strtotime($end_date);

		    // Generate random number using above bounds
		    $val = rand($min, $max);

		    // Convert back to desired date format
		    return date('Y-m-d', $val);
		}

        for ($x = 0; $x <= 10; $x++) {
	        DB::table('events')->insert([
	            'event_start' => randomDate(20200101,20200202),
	            'event_end' => randomDate(20200303,20200404),
	            'event_description' => Str::random(rand(0,244)),
	        ]);
	    }
    }
}
