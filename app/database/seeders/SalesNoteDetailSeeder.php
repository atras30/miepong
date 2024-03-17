<?php

namespace Database\Seeders;

use App\Models\SalesNoteDetail;
use App\Models\SalesNoteHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalesNoteDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $header = SalesNoteHeader::find(1);

        SalesNoteDetail::create([
            "sales_note_header_id" => $header->id,
            "name" => ""
        ]);
    }
}
