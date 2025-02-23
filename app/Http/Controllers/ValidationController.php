<?php

namespace App\Http\Controllers;

use App\Models\Validation;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function index()
    {
        $validations = Validation::all();
        return view('index', compact('validations'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'prenom' => 'required',
            'contact' => 'required',
            'matricule'=>'required',
            'fonction'=>'required',
            'dateNaiss'=>'required',
            'dateEmbauche'=>'required',
            'ancien'=>'required',
            'immatriculation'=>'required',
            'marque'=>'required',
            'dateServ'=>'required',
            'montant'=>'required',
        ],[
            'name.required'=>'Le nom est obligatoire',
            'prenom.required'=>'Le prénom est obligatoire',
            'contact.required'=>'Le contact est obligatoire',
           'matricule.required'=>'Le matricule est obligatoire',
              'fonction.required'=>'La fonction est obligatoire',
                'dateNaiss.required'=>'La date de naissance est obligatoire',
                'dateEmbauche.required'=>'La date d\'embauche est obligatoire',
                'ancien.required'=>'L\'ancienneté est obligatoire',
                'immatriculation.required'=>'L\'immatriculation est obligatoire',
                'marque.required'=>'La marque est obligatoire',
                'dateServ.required'=>'La date de service est obligatoire',
                'montant.required'=>'Le montant est obligatoire',
                'name.min'=>'Le nom doit contenir au minimum 3 caractères',
                'matricule.min'=>'Le matricule doit contenir au minimum 6 caractères',
                'fonction.min'=>'La fonction doit contenir au minimum 3 caractères',
                'dateNaiss.before'=>'La date de naissance doit être antérieure à la date actuelle', 
        ]);

        $validation = new Validation();
        $validation->name = $request->name;
        $validation->prenom = $request->prenom;
        $validation->contact = $request->contact;
        $validation->matricule = $request->matricule;
        $validation->fonction = $request->fonction;
        $validation->dateNaiss = $request->dateNaiss;
        $validation->dateEmbauche = $request->dateEmbauche;
        $validation->ancien = $request->ancien;
        $validation->etat = 'Non pris';
        $validation->immatriculation = $request->immatriculation;
        $validation->marque = $request->marque;
        $validation->dateServ = $request->dateServ;
        $validation->montant = $request->montant;
        $validation->save();

        return redirect()->route('create.reforme')->with('success','Validation enregistrée avec succès');

    }
}
