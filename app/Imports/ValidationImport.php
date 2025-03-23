<?php

namespace App\Imports;

use App\Models\Validation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ValidationImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Validation([
            'name'            => $row['nom'],
            'reference'       => $row['reference'],
            'prenom'          => $row['prenom'],
            'note'            => $row['note'],
            'sanction'        => $row['sanction'],
            'typeV'           => $row['type_vehicule'],
            'categorie'       => $row['categorie'],
            'contact'         => $row['contact'],
            'matricule'       => $row['matricule'],
            'fonction'        => $row['fonction'],
            'dateNaiss'       => $row['date_naissance'],
            'dateEmbauche'   => $row['date_embauche'],
            'ancien'         => $row['anciennete'],
            'etat'           => $row['etat'],
            'direction'       => $row['direction'],
            'immatriculation' => $row['immatriculation'],
            'marque'         => $row['marque'],
            'dateServ'       => $row['date_service'],
            'montant'        => $row['montant'],
        ]);
    }
}