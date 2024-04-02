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
        Schema::create('demandes', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_stage');
            $table->unsignedBigInteger('Id_competence');

            $table->primary(['ID_stage', 'Id_competence']);

            $table->foreign('ID_stage')->references('ID_stage')->on('stages');
            $table->foreign('Id_competence')->references('Id_competence')->on('competences');
            
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
