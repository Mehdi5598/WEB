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
        // Schema::create('pilot', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('centre');
        //     $table->string('password');
        //     $table->string('email')->unique();
        //     $table->string('Promo');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });

        Schema::create('pilotes', function (Blueprint $table) {
            $table->bigIncrements('ID_pilote');
            $table->string('Nom_pilote', 50);
            $table->string('Prenom_pilote', 50);
            $table->string('Centre', 50);
            
            
            $table->string('Promotion', 50);
            
            $table->unsignedBigInteger('ID_users');
            $table->foreign('ID_users')->references('ID_users')->on('users');


            $table->timestamps();
            
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilot');
    }
};
