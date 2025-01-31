<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
    }
}
