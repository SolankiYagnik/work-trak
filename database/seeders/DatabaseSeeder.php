<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "admin",
            "last_name" => "company",
            "email" => "admin@gmail.com",
            "image" => "hello.png",
            "password" => Hash::make("admin@1234"),
            "role" => "company_admin"
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
