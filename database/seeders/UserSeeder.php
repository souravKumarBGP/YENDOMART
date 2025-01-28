<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Seed the default data in users table
        User::create([
            "name"=> "Sourav Rupani",
            "email"=> "s@gmail.com",
            "role"=> "admin",
            "password"=> Hash::make("SouravRupani"),
            "profile_img"=> "YNWfbpdA2WMSnXbPETxPUZ8cPTWDoYjU2g3lVz5q.jpg"
        ]);
    }
}
