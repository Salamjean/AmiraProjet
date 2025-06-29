<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use App\Services\ExcelService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;

class VehiculeController extends Controller
{
    
 public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.index', compact('vehicules'));
    }

    public function export(ExcelService $excelService)
    {
        $path = $excelService->exportVehicules(Vehicule::all());
        return response()->download($path)->deleteFileAfterSend(true);
    }

    public function import(Request $request, ExcelService $excelService)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        $excelService->importVehicules($request->file('file'));
        
        return redirect()->route('vehicule.listes.import')->with('success', 'Véhicules importés avec succès !');
    }

   public function store(Request $request) {
    $validated = $request->validate([
        'types' => 'required|string',
        'immatriculation' => 'required|unique:vehicules,immatriculation',
        'modeles' => 'required|string',
        'date' => 'required|date'
    ]);

    try {
        $vehicules = new Vehicule();
        $vehicules->types = $request->types;
        $vehicules->immatriculation = $request->immatriculation;
        $vehicules->modeles = $request->modeles;
        $vehicules->date = $request->date;  // Correction ici
        $vehicules->save();

        return redirect()->route('vehicule.listes.import')->with('success', 'Véhicule enregistré avec succès');

    } catch (Exception $e) {
        // Vous pouvez logger l'erreur ici
        Log::error('Erreur lors de l\'enregistrement du véhicule : ' . $e->getMessage());
        return back()->withErrors('Erreur lors de l\'enregistrement du véhicule.')->withInput();
    }
}

    public function listes(){
        $vehicules = Vehicule::paginate(10);
        return view('vehicule.listes',compact('vehicules'));
    }
}
