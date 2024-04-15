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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_score',100);
            $table->string('second_score',100);
            $table->string('memo',100);
            $table->foreignId('first_team_id')->constrained('teams');
            $table->foreignId('second_team_id')->constrained('teams');
            $table->foreignId('user_id')->constrained(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
