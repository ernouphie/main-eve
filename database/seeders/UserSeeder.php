<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 0; $x <= 10; $x++) {
	        DB::table('users')->insert([
	            'name' => Str::random(10),
	            'email' => Str::random(10).'@gmail.com',
	            'password' => Hash::make('password'),
	            'phone' => Str::random(10),
	            'role' => "user",
	        ]);
	    }

	    DB::table('users')->insert([
	        'name' => "Admin",
	        'email' => "admin@admin.com",
	        'password' => Hash::make('adminpassword'),
	        'phone' => Str::random(10),
	        'role' => "admin",
	    ]);

	    DB::table('users')->insert([
	        'name' => "User User",
	        'email' => "user@user.com",
	        'password' => Hash::make('userpassword'),
	        'phone' => Str::random(10),
	        'role' => "user",
	    ]);
    }
}
