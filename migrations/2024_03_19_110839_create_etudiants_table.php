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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->bigIncrements('ID_etudiant');
            $table->string('Nom_etudiant', 50);
            $table->string('Prenom_etudiant', 50);
            $table->string('Centre', 50);
            $table->integer('Promotion');
            $table->string('E_mail', 50)->unique();
            $table->string('password', 50);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
