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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('codename')->unique();
            $table->string('manufacturer');
            $table->string('model');
            $table->date('release_date')->nullable();
            $table->enum('status', ['active', 'beta', 'deprecated'])->default('active');
            $table->string('image_url')->nullable();
            $table->json('specs')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};