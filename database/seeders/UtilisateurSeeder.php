<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class UtilisateurSeeder extends Seeder
{
    public function run()
    {
        Utilisateur::create([
            'nom' => 'Alioune',
            'prenom' => 'Prenom', // Assure-toi de fournir une valeur ici
            'email' => 'alioune@example.com',
            'mot_de_passe' => bcrypt('motdepasse'), // Hash le mot de passe
            'role' => 'admin', // Assigne le rôle d'admin
        ]);
    }
}
