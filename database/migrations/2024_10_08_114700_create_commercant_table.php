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
        Schema::create('commercants', function (Blueprint $table) {
            $table->id('id_commercant');  // Colonne id_commercant (int)
            $table->boolean('acheter_en_gros')->default(false);  // Colonne acheter_en_gros (boolean)
            $table->integer('stock')->default(0);  // Colonne gérer stock (integer)
            $table->timestamps();  // Colonnes created_at et updated_at
        });
    }
    
};
