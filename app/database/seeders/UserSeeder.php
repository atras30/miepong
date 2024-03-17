<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
           "name"  => "Atras Shalhan",
           "email"  => "atrasshalhan@gmail.com",
           "password"  => bcrypt("testing12345"),
           "work_location_code"  => "SERPONG",
        ]);
    }
}
