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
        Schema::create('internship_competence', function (Blueprint $table) {
            $table->unsignedBigInteger('internship_id');
            $table->unsignedBigInteger('competence_id');
            $table->foreign('internship_id')->references('id')->on('internships')->onDelete('cascade');
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
            $table->primary(['internship_id', 'competence_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_competence');
    }
};
