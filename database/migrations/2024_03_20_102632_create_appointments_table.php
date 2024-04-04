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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('infix')->nullable();
            $table->string('last_name');
            $table->string('email');
            $table->string('street');
            $table->string('house_number');
            $table->string('postal_code');
            $table->string('city');
            $table->string('phone_number');
            $table->string('brand');
            $table->string('model');
            $table->string('description');
            $table->string('license_plate');
            $table->enum('transaction', ['schakel', 'auto']);
            $table->enum('fuel', ['benzine', 'diesel', 'elektrisch']);
            $table->string('color');
            $table->enum('appointment_type', ['reparatie', 'keuring'])->default('reparatie');
            $table->dateTime('appointment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
