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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating');
            $table->string('description');
            $table->unsignedBigInteger('giving_user_id');
            $table->unsignedBigInteger('receiving_user_id');
            $table->unsignedBigInteger('post_id');
            $table->timestamps();
            $table->foreign('giving_user_id')->references('id')->on('user_creations')->onDelete('cascade');
            $table->foreign('receiving_user_id')->references('id')->on('user_creations')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('users_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
