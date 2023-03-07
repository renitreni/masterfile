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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position')->nullable();
            $table->string('position_category')->nullable();
            $table->date('applicant_date')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->enum('civil_status', ['married', 'divorced', 'separated', 'widowed']);
            $table->date('birthdate')->nullable();
            $table->text('short_address')->nullable();
            $table->text('complete_address')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('email')->nullable();
            $table->string('facebook')->nullable();
            $table->string('jobsite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
