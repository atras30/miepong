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
        Schema::create('item_historical_movements', function (Blueprint $table) {
            $table->id();
            $table->string("item_code");
            $table->enum("type", ["IN", "OUT"])->comment("eg: membeli (in) / memakai barang (out)");
            $table->integer("remaining_stock");
            $table->timestamp("date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_historical_movements');
    }
};
