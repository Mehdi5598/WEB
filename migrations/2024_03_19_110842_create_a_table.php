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
        Schema::create('a', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_etudiant');
            $table->unsignedBigInteger('Id_competence');

            $table->primary(['ID_etudiant', 'Id_competence']);
            
            $table->foreign('ID_etudiant')->references('ID_etudiant')->on('etudiants');
            $table->foreign('Id_competence')->references('Id_competence')->on('competences');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a');
    }
};
