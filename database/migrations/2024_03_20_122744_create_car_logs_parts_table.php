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
        Schema::create('car_logs_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_log_id')->references('id')->on('car_logs');;
            $table->foreignId('part_id')->references('id')->on('parts');
            $table->integer('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_logs_parts');
    }
};
