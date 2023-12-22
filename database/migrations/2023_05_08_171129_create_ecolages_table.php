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
        Schema::create('ecolages', function (Blueprint $table) {
            $table->id();
            $table->integer('mois1')->unique();
            $table->integer('mois2')->unique();
            $table->integer('mois3')->unique();
            $table->integer('mois4')->unique();
            $table->integer('mois5')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecolages');
    }
};
