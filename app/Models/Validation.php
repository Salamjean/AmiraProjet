<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{
    protected $fillable = [
        'name',
        'prenom',
        'contact',
        'matricule',
        'fonction',
        'dateNaiss',
        'etat',
        'dateEmbauche',
        'ancien',
        'immatriculation',
        'marque',
        'dateServ',
        'montant',
    ];
}
