<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UtilisateurSeeder::class,
            // Autres seeders si nécessaire
        ]);
    }
}

