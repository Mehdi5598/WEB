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
        Schema::create('postuler', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_etudiant');
            $table->unsignedBigInteger('ID_stage');
            $table->string('CV', 50)->nullable(false);
            $table->text('lettre_de_motivation')->nullable(false);
            $table->integer('Status_Code')->nullable(false);
            $table->timestamps();
        
            // Define composite primary key
            $table->primary(['ID_etudiant', 'ID_stage']);
        
            // Define foreign key constraints
            $table->foreign('ID_etudiant')->references('ID_etudiant')->on('etudiants');
            $table->foreign('ID_stage')->references('ID_stage')->on('stages');
        });
        
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postuler');
    }
};
