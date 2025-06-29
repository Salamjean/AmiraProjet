<?php

namespace App\Http\Controllers;

use App\Models\Validation;
use App\Models\Vehicule;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ValidationController extends Controller
{
    public function create()
    {
        $vehicules = Vehicule::all();
        return view('create', compact('vehicules'));
    }

    public function index()
    {
        $validations = Validation::paginate(10);
        return view('index', compact('validations'));
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|min:3',
            'prenom' => 'required',
            'note' => 'required',
            'sanction' => 'required',
            'typeV' => 'required',
            'categorie' => 'required',
            'matricule' => 'required|max:4',
            'dateNaiss' => 'required|date|before:today',
            'dateEmbauche' => 'required|date',
            'ancien' => 'required|numeric',
            'immatriculation' => 'required',
            'marque' => 'required',
            'dateServ' => 'required|date',
            'direction' => 'required',
            'montant' => 'required|numeric|min:100000',
        ], [
            'name.required' => 'Le nom est obligatoire',
            'prenom.required' => 'Le prénom est obligatoire',
            'contact.required' => 'Le contact est obligatoire',
            'matricule.required' => 'Le matricule est obligatoire',
            'dateNaiss.required' => 'La date de naissance est obligatoire',
            'dateEmbauche.required' => 'La date d\'embauche est obligatoire',
            'ancien.required' => 'L\'ancienneté est obligatoire',
            'immatriculation.required' => 'L\'immatriculation est obligatoire',
            'marque.required' => 'La marque est obligatoire',
            'dateServ.required' => 'La date de service est obligatoire',
            'montant.required' => 'Le montant est obligatoire',
            'name.min' => 'Le nom doit contenir au minimum 3 caractères',
            'matricule.max' => 'Le matricule doit contenir au maximum 4 caractères',
            'dateNaiss.before' => 'La date de naissance doit être antérieure à la date actuelle',
            'direction.required' => 'La direction est obligatoire',
            'montant.min' => 'Le montant doit être superieur ou egale a 100000',
            'montant.numeric' => 'Le montant ne doit pas contenir des lettres et des caratères spéciaux'
        ]);
    
       // Déterminer l'état en fonction de l'ancienneté
$anciennete = (int)$request->ancien; // Convertir l'ancienneté en entier
$sanctionD = $request->sanction; // Récupérer la valeur de la sanction
$noteannuelle = $request->note;

// L'état sera 'Pris' seulement si l'ancienneté est >= 2 ET la sanction est 'non'
if ($anciennete >= 2 && $sanctionD == 'non' && $noteannuelle < 2) {
    $etat = 'Pris';
} else {
    $etat = 'Non pris';
}

// Générer une référence unique de 6 chiffres
do {
    $reference = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT); // Génère un nombre à 6 chiffres
} while (Validation::where('reference', $reference)->exists()); // Vérifie si la référence existe déjà

// Créer une nouvelle instance de Validation
$validation = new Validation();
$validation->name = $request->name;
$validation->prenom = $request->prenom;
$validation->note = $request->note;
$validation->sanction = $request->sanction;
$validation->typeV = $request->typeV;
$validation->categorie = $request->categorie;
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
$validation->reference = $reference; // Assigner la référence générée
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
