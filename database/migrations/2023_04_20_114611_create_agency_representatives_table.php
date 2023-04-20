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
        Schema::create('agency_representatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained();
            $table->string('representative');
            $table->string('position');
            $table->string('passport_id')->nullable();
            $table->string('tin')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_representatives');
    }
};
