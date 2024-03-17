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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string("code");
            $table->string("name");
            $table->integer("remaining_stock");
            $table->string("unit")->nullable()->comment("eg: butir, biji, kg, buah");
            $table->integer("reminder_threshold")->comment("jumlah minimum supaya user dapat segera diberitahukan untuk membeli item tertentu");
            $table->timestamp("last_purchased");
            $table->string("work_location_code");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
