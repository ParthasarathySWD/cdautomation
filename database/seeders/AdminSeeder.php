<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "name" => "Parthasarathy",
            "email" => "parthasarathy.m@avanzegroup.com",
            "password" => bcrypt("partha"),
            "role" => "admin"
        ])
    }
}
