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
        Schema::create('climas', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');
            $table->float('temperatura');
            $table->float('temperatura_max');
            $table->float('temperatura_min');
            $table->integer('humedad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('climas');
    }
};
