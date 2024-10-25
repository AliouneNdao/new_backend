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
        Schema::create('consommateurs', function (Blueprint $table) {
            $table->id('id_consommateur');  // Colonne id_consommateur (int)
            $table->timestamps();  // Colonnes created_at et updated_at
        });
    }
    
};
