<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commercant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_commercant', // ID unique du commerçant
        'acheter_en_gros', // Pour gérer les achats en gros
        'gerer_stock', // Pour gérer le stock de produits
    ];

    // Relation avec les commandes
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'commercant_id');
    }

    // Relation avec les produits
    public function produits()
    {
        return $this->hasMany(Produit::class, 'commercant_id');
    }
}

