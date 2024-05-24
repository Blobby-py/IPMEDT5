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
        Schema::create('esp32_devices', function (Blueprint $table) {
            $table->id();
            $table->ipAddress('ip_address')->unique();
            $table->integer('dobbelstenen_over')->default(6);
            $table->integer('dobbelstenen_bak')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esp32_devices');
    }
};

