<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('agriculteurs', function (Blueprint $table) {
            $table->id('id_agriculteur');  // Colonne id_agriculteur (int)
            $table->string('nom');  // Colonne nom de l'agriculteur (string)
            $table->timestamps();  // Colonnes created_at et updated_at
        });
    }
    
};
