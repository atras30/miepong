<?php

namespace Database\Seeders;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            "code" => "TEPUNG",
            "name" => "Tepung",
            "remaining_stock" => 0,
            "unit" => "kg",
            "reminder_threshold" => 3.5,
            "last_purchased" => Carbon::now()->subDays(7),
            "work_location_code" => "SERPONG"
        ]);
    }
}
