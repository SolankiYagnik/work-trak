<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // User::create([
        //     "name" => "admin",
        //     "last_name" => "company",
        //     "email" => "admin@gmail.com",
        //     "password" => Hash::make("admin@12")
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'last_name'=> 'company',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('admin@1234'),
        // ]);
    }
}
