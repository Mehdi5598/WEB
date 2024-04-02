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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id('ID_evaluation');
            $table->string('commentaire', 50);
            $table->integer('Note');
            $table->string('Type_Eva', 50);
            $table->unsignedBigInteger('ID_etudiant');
            $table->unsignedBigInteger('ID_pilote');
            $table->unsignedBigInteger('ID_entreprise');
            $table->foreign('ID_etudiant')->references('ID_etudiant')->on('etudiants');
            $table->foreign('ID_pilote')->references('ID_pilote')->on('pilotes');
            $table->foreign('ID_entreprise')->references('ID_entreprise')->on('entreprises');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
