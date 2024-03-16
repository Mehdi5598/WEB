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
        Schema::create('pilote', function (Blueprint $table) {
            $table->id();
            $table->string('nom_pilote');
            $table->string('prenom_pilote');
            $table->string('centre');
            $table->string('password');
            $table->string('email');
            $table->integer('promotion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilote');
    }
};
