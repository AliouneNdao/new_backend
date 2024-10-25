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
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->integer('note');
            $table->string('commentaire');
            $table->date('date');
            $table->unsignedBigInteger('consommateur_id'); // Clé étrangère vers la table consommateurs
            $table->foreign('consommateur_id')->references('id')->on('consommateurs')->onDelete('cascade'); // Relation avec consommateur
            $table->timestamps();
        });
        
    }
};
