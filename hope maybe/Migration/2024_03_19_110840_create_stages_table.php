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
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('ID_stage');
            $table->integer('duree');
            $table->date('date_stage');
            $table->integer('base_remuneration');
            $table->integer('nombre_places');
            $table->string('type_promotion', 50);
            $table->unsignedBigInteger('ID_entreprise');
            $table->foreign('ID_entreprise')->references('ID_entreprise')->on('entreprises');
        });
        
        
    }
        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
