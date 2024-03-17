<?php

namespace Database\Seeders;

use App\Models\WorkLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      WorkLocation::create([
        "code" => "SERPONG",
        "name" => "Serpong",
        "longitude" => 0.00,
        "latitude" => 0.00
      ]);
    }
}
