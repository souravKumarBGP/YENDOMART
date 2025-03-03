<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Seed the default data in users table
        User::create([
            "full_name"=> "Sourav Rupani",
            "email"=> "souravrupani@gmail.com",
            "phone"=> "9065608408",
            "countary"=> "india",
            "state"=> "bihar",
            "district"=> "bhagalpur",
            "pincode"=> "813205",
            "famous_place"=> "Nathnagar karela gramin bank",
            "delivery_address"=> "Nathnagar karel gramin bank",
            "role"=> "admin",
            "password"=> "souravrupani@gmail.com",
            "profile_img"=> "image/profile_img/YNWfbpdA2WMSnXbPETxPUZ8cPTWDoYjU2g3lVz5q.jpg"
        ]);

        User::create([
            "full_name"=> "	Zafar Mustafa",
            "email"=> "zafar701@gmail.com",
            "phone"=> "7763999333",
            "countary"=> "india",
            "state"=> "bihar",
            "district"=> "bhagalpur",
            "pincode"=> "812002",
            "famous_place"=> "Tatarpur nathnagar road",
            "delivery_address"=> "Tatarpur nathnagar road",
            "role"=> "admin",
            "password"=> "itcarelappywalazafar701@gmail.com",
            "profile_img"=> "image/profile_img/XxqHdHJqVmySs8Y2bEKF0HqjnIc0c2OVeoddBcRS.webp"
        ]);

        User::create([
            "full_name"=> "	Muzaffar Mustafa",
            "email"=> "muzaffarmustafa26@gmail.com",
            "phone"=> "7763999333",
            "countary"=> "india",
            "state"=> "bihar",
            "district"=> "bhagalpur",
            "pincode"=> "812002",
            "famous_place"=> "Tatarpur nathnagar road",
            "delivery_address"=> "Tatarpur nathnagar road",
            "role"=> "admin",
            "password"=> "itcarelappywalamuzaffarmustafa26@gmail.com",
            "profile_img"=> "image/profile_img/HX9twWaXVQR1uGK1QkrTyWzqoeO8MVBe5Kjo95hS1.webp"
        ]);

    }
}
