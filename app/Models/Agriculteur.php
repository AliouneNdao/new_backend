<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculteur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',  // Champs modifiable pour l'agriculteur
    ];

    // Si tu as une relation avec la table des commandes, tu peux la définir ici
    public function commandes()
    {
        return $this->hasMany(Commande::class);  // Exemple de relation (si elle existe)
    }
}


