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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('localite');
            $table->integer('duree');
            $table->string('entreprise');
            $table->integer('salaire');
            $table->integer('promo');
            $table->date('date');
            $table->integer('number_place');
            $table->integer('number_apply')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
