<!DOCTYPE html>
<html>
<head>
    <title>Soumission #{{ $validation->id }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color:rgb(17, 43, 121); text-align: center; }
        h2 { color:rgb(17, 43, 121); text-align: center; }
        h4 { color:rgb(241, 6, 6); text-align: center; }
        h6 { color:rgb(17, 43, 121); text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div style="display: flex; align-items: center; width: 100%;">
        <div style="width: 30%;">
            <img src="{{ public_path('assets/images/logo_abidajn.png') }}" style="width: 100%;" alt="logo du port d'abidjan">
        </div>
        <div style="width: 70%; padding-left: 20px;">
            <h1>PORT AUTONOME D'ABIDJAN</h1>
            <h4><em>Une Référence Internationale</em></h4>
        </div>
    </div>
    <h2>Soumission des Réformes de vehicules 2024-2025</h2>
    <table>
        <tr>
            <th>N°</th>
            <td>{{ $validation->reference }}</td>
        </tr>
        <tr>
            <th>Nom et Prénoms</th>
            <td>{{ $validation->name }} {{ $validation->prenom }}</td>
        </tr>
        <tr>
            <th>Matricule</th>
            <td>{{ $validation->matricule }}</td>
        </tr>
        <tr>
            <th>Direction</th>
            <td>{{ $validation->direction }}</td>
        </tr>
        <tr>
            <th>Fonction</th>
            <td>{{ $validation->fonction }}</td>
        </tr>
        
        <tr>
            <th>Date de Naissance</th>
            <td>{{ $validation->dateNaiss }}</td>
        </tr>
        <tr>
            <th>Date d'embauche</th>
            <td>{{ $validation->dateEmbauche }}</td>
        </tr>
        <tr>
            <th>Ancienneté</th>
            <td>{{ $validation->ancien }}</td>
        </tr>
        <tr>
            <th>Immatriculation du véhicule</th>
            <td>{{ $validation->immatriculation }}</td>
        </tr>
        <tr>
            <th>Marque du véhicule</th>
            <td>{{ $validation->marque }}</td>
        </tr>
        <tr>
            <th>Date de mise en service</th>
            <td>{{ $validation->dateServ }}</td>
        </tr>
        <tr>
            <th>Catégorie</th>
            <td>{{ $validation->categorie }}</td>
        </tr>
        <tr>
            <th>Note Annuelle</th>
            <td>{{ $validation->note }}</td>
        </tr>
        <tr>
            <th>Sanction disciplinaire</th>
            <td>{{ $validation->sanction }}</td>
        </tr>
        
        <tr>
            <th>Montant proposé</th>
            <td>{{ $validation->montant }}</td>
        </tr>
        <tr>
            <th>Date de soumission</th>
            <td>{{ $validation->created_at->format('d/m/Y') }}</td>
        </tr>
        <tr>
            <th>Heure de soumission</th>
            <td>{{ $validation->created_at->format('H:i:s') }}</td>
        </tr>
        <tr>
            <th>OBS</th>
            <td>{{ $validation->etat }}</td>
        </tr>
    </table>
    <h6>Port Autonome d'Abidjan, Société d'État au capital de 100.000.000.000 F CFA, régie par la loi n°2020-626 du 14 Août 2020 portant 
        définition et organisation des Sociétés d'État et par le décret n°92-940 du 23 décembre 1992 portant transformation du Port
         Autonome d'Abidjan (P.A.A) en Société d'État, dont le siège social est sis à Abidjan-Treichville, Rue A22 des Piroguiers,
          Boulevard du Port, adresse : BP V85 Abidjan et immatriculée au RCCM sous le numéro CI-ABJ-03-2021-M-00928,
          Tél : 27-21-23-80-00, Téléfax : 27-21-23-80-80, Web : www.portabidjan.ci</h6>
</body>
</html>