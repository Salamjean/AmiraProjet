<?php

namespace App\Services;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\Vehicule;

class ExcelService
{
    /**
     * Exporte les véhicules vers un fichier Excel
     */
    public function exportVehicules($vehicules)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // En-têtes
        $sheet->setCellValue('A1', 'Immatriculation');
        $sheet->setCellValue('B1', 'Modèle');
        $sheet->setCellValue('C1', 'Type');
        $sheet->setCellValue('D1', 'Date mise en service');
        
        // Données
        $row = 2;
        foreach ($vehicules as $vehicule) {
            $sheet->setCellValue('A'.$row, $vehicule->immatriculation);
            $sheet->setCellValue('B'.$row, $vehicule->modeles);
            $sheet->setCellValue('C'.$row, $vehicule->types);
            $sheet->setCellValue('D'.$row, $vehicule->date);
            $row++;
        }

        $writer = new Xlsx($spreadsheet);
        $filename = 'vehicules_'.now()->format('Ymd_His').'.xlsx';
        $path = storage_path('app/exports/'.$filename);
        
        // Crée le dossier s'il n'existe pas
        if (!file_exists(dirname($path))) {
            mkdir(dirname($path), 0755, true);
        }
        
        $writer->save($path);
        return $path;
    }

    /**
     * Importe les véhicules depuis un fichier Excel
     */
    public function importVehicules($file)
    {
        // Charge le fichier Excel
        $spreadsheet = IOFactory::load($file->getRealPath());
        $sheet = $spreadsheet->getActiveSheet();
        
        // Convertit en tableau
        $rows = $sheet->toArray();
        
        // Supprime l'en-tête
        array_shift($rows);
        
        foreach ($rows as $row) {
            // Vérifie que la ligne contient des données
            if (!empty($row[0])) {
                Vehicule::updateOrCreate(
                    ['immatriculation' => $row[0]], // Colonne A
                    [
                        'modeles' => $row[1] ?? null, // Colonne B
                        'types' => $row[2] ?? null,   // Colonne C
                    ],
                    ['date' => $row[1] ?? null] // Colonne D
                );
            }
        }
    }
}