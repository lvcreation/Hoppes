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
        Schema::disableForeignKeyConstraints();
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('prenom');
            $table->string('adresse');
            $table->string('phone');
            $table->string('Ephone');
            $table->string('nom_du_vague');
            $table->string('formation');
            $table->integer('duree');
            $table->integer('droit');
            $table->text('sary');
            $table->string('mois1')->nullable();
            $table->string('mois2')->nullable();
            $table->string('mois3')->nullable();
            $table->string('mois4')->nullable();
            $table->string('mois5')->nullable();
            $table->string('entrer');
            $table->string('sortie');
            $table->integer('statue');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("etudiants",function(Blueprint $table){
            $table->dropForeign("vague_id");
            $table->dropForeign("formation_id");
            $table->dropForeign("ecolage_id");
            $table->dropForeign("duree_id");
        });
        Schema::dropIfExists('etudiants');
    }
};
