<?php

// app/Models/Utilisateur.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Utiliser ce modèle pour l'authentification
use Spatie\Permission\Traits\HasRoles;

class Utilisateur extends Authenticatable
{
    use HasFactory, HasRoles;

    // Définir les champs remplissables
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'mot_de_passe',
        'role', // Inclure 'role' si nécessaire
    ];

    // Si tu utilises Laravel pour l'authentification, tu dois spécifier le champ du mot de passe
    protected $hidden = [
        'mot_de_passe', // Masquer ce champ lors des requêtes
    ];

    // Pour éviter les erreurs avec le champ 'mot_de_passe' et 'password', tu peux ajouter cette méthode
    public function setMotDePasseAttribute($password)
    {
        $this->attributes['mot_de_passe'] = bcrypt($password); // Hash du mot de passe
    }
}
