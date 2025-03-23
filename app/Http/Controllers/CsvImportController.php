<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Validation;
use App\Libraries\SimpleXLSX;

class CsvImportController extends Controller
{
    public function showImportForm()
    {
        return view('import-csv'); // Vue pour uploader le fichier CSV
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        $file = $request->file('file');
        $filePath = $file->getRealPath();

        // Charger le fichier Excel avec SimpleXLSX
        if ($xlsx = simpleXLSX::parse($filePath)) {
            $rows = $xlsx->rows(); // Récupérer toutes les lignes du fichier

            // Ignorer la première ligne (en-têtes)
            array_shift($rows);

            foreach ($rows as $row) {
                Validation::create([
                    'immatriculation' => $row[2] ?? null, // 'immatriculation'
                    'marque'         => $row[3] ?? null, // 'marque'
                    'dateServ'       => $row[4] ?? null, // 'date_service'
                ]);
            }

            return redirect()->back()->with('success', 'Données importées avec succès !');
        } else {
            return redirect()->back()->with('error', 'Erreur lors de la lecture du fichier Excel.');
        }
    }
}