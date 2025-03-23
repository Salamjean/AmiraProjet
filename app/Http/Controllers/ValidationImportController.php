<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ValidationImport;
use Maatwebsite\Excel\Facades\Excel;

class ValidationImportController extends Controller
{
    public function showImportForm()
    {
        return view('import-validation'); // Vue pour uploader le fichier Excel
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new ValidationImport, $request->file('file'));

        return redirect()->back()->with('success', 'Données importées avec succès !');
    }
}