<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Créer le rôle Administrateur
        $roleAdmin = Role::create(['name' => 'administrateur']);

        // Créer des permissions spécifiques
        Permission::create(['name' => 'gérer utilisateurs']);
        Permission::create(['name' => 'gérer produits']);
        Permission::create(['name' => 'gérer commandes']);
        Permission::create(['name' => 'gérer stocks']);

        // Assigner les permissions au rôle administrateur
        $roleAdmin->givePermissionTo([
            'gérer utilisateurs',
            'gérer produits',
            'gérer commandes',
            'gérer stocks'
        ]);
    }
}
