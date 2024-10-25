<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
use Spatie\Permission\Models\Role;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        $utilisateur = Utilisateur::find(1); // Sélectionne l'utilisateur par ID
        
        // Assigner le rôle administrateur
        if ($utilisateur) {
            $utilisateur->assignRole('administrateur');
        }
    }
}

