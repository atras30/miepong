<?php

namespace Database\Seeders;

use App\Models\SalesNoteHeader;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesNoteHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstWhere("email", "atrasshalhan@gmail.com");
        SalesNoteHeader::create([
            "image_path" => "path/to/image.jpg",
            "work_location_code" => "SERPONG",
            "user_id" => $user->id,
        ]);
    }
}
