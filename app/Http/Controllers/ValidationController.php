<?php

namespace App\Http\Controllers;

use App\Models\Validation;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ValidationController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function index()
    {
        $validations = Validation::paginate(4);
        return view('index', compact('validations'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|min:3',
            'prenom' => 'required',
            'contact' => 'required',
            'matricule' => 'required|min:6',
            'fonction' => 'required|min:3',
            'dateNaiss' => 'required|date|before:today',
            'dateEmbauche' => 'required|date',
            'ancien' => 'required|numeric',
            'immatriculation' => 'required',
            'marque' => 'required',
            'dateServ' => 'required|date',
            'direction' => 'required',
            'montant' => 'required|numeric',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'prenom.required' => 'Le prénom est obligatoire',
            'contact.required' => 'Le contact est obligatoire',
            'matricule.required' => 'Le matricule est obligatoire',
            'fonction.required' => 'La fonction est obligatoire',
            'dateNaiss.required' => 'La date de naissance est obligatoire',
            'dateEmbauche.required' => 'La date d\'embauche est obligatoire',
            'ancien.required' => 'L\'ancienneté est obligatoire',
            'immatriculation.required' => 'L\'immatriculation est obligatoire',
            'marque.required' => 'La marque est obligatoire',
            'dateServ.required' => 'La date de service est obligatoire',
            'montant.required' => 'Le montant est obligatoire',
            'name.min' => 'Le nom doit contenir au minimum 3 caractères',
            'matricule.min' => 'Le matricule doit contenir au minimum 6 caractères',
            'fonction.min' => 'La fonction doit contenir au minimum 3 caractères',
            'dateNaiss.before' => 'La date de naissance doit être antérieure à la date actuelle',
            'direction.required' => 'La direction est obligatoire'
        ]);
    
        // Déterminer l'état en fonction de l'ancienneté
        $anciennete = (int)$request->ancien; // Convertir l'ancienneté en entier
        $etat = ($anciennete >= 2) ? 'Pris' : 'Non pris';
    
        // Créer une nouvelle instance de Validation
        $validation = new Validation();
        $validation->name = $request->name;
        $validation->prenom = $request->prenom;
        $validation->contact = $request->contact;
        $validation->matricule = $request->matricule;
        $validation->fonction = $request->fonction;
        $validation->dateNaiss = $request->dateNaiss;
        $validation->dateEmbauche = $request->dateEmbauche;
        $validation->ancien = $request->ancien;
        $validation->direction = $request->direction;
        $validation->etat = $etat; // Définir l'état en fonction de l'ancienneté
        $validation->immatriculation = $request->immatriculation;
        $validation->marque = $request->marque;
        $validation->dateServ = $request->dateServ;
        $validation->montant = $request->montant;
        $validation->save();
    
        // Redirection avec un message de succès
        return redirect()->route('create.reforme')->with('success', 'Validation enregistrée avec succès');
    }

    public function downloadPDF($id)
{
    // Récupérer la soumission par son ID
    $validation = Validation::findOrFail($id);

    // Générer le PDF
    $pdf = Pdf::loadView('admin.pdf.soumission', compact('validation'));

    // Télécharger le PDF
    return $pdf->download('soumission_' . $validation->id . '.pdf');
}
}
