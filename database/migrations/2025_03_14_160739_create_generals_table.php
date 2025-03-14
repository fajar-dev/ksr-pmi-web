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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('youtube');
            $table->string('tiktok');
            $table->string('about');
            $table->string('mission');
            $table->string('vision');
            $table->string('history');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
