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
        Schema::table('utilisateurs', function (Blueprint $table) {
            // Ajoute la colonne 'role' seulement si elle n'existe pas déjà
            if (!Schema::hasColumn('utilisateurs', 'role')) {
                $table->string('role')->nullable(); // Ajoute une colonne 'role' de type string
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            // Supprime la colonne 'role' lors de la migration inverse
            if (Schema::hasColumn('utilisateurs', 'role')) {
                $table->dropColumn('role');
            }
        });
    }
};
