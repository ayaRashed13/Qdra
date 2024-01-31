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
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('job_id')->constrained('jobs','id')->cascadeOnDelete();
            $table->foreignId('country_id')->constrained('countries','id')->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('cities','id')->cascadeOnDelete();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_requests');
    }
};
