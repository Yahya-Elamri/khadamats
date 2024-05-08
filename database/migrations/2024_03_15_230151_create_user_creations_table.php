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
        Schema::create('user_creations', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone',10)->nullable();
            $table->string('adresse');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('description')->nullable();
            $table->string('profile_image')->default("Default-profile-pic.jpg");
            $table->string('cv')->nullable();
            $table->string('categorie')->nullable();
            $table->string('proffession')->nullable();
            $table->string('diplome')->nullable();
            $table->string('experience')->nullable();
            $table->string('disponibilite')->nullable();
            $table->boolean('availabilite')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_creations');
    }
};
