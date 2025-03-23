<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    protected $fillable = [
        'name',
        'prenom',
        'note',
        'sanction',
        'typeV',
        'categorie',
        'contact',
        'matricule',
        'fonction',
        'dateNaiss',
        'etat',
        'dateEmbauche',
        'direction',
        'ancien',
        'immatriculation',
        'marque',
        'dateServ',
        'montant',
    ];
}
