<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_note_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("sales_note_header_id");
            $table->string("name");
            $table->string("item_code");
            $table->integer("quantity");
            $table->integer("remaining_stock");
            $table->integer("price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_note_details');
    }
};
