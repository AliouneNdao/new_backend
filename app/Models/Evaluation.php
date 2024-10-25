<?php

class Evaluation extends Model
{
    protected $fillable = [
        'note', 'commentaire', 'date', 'consommateur_id',
    ];

    // Relation avec Consommateur
    public function consommateur()
    {
        return $this->belongsTo(Consommateur::class);
    }
}


