<!DOCTYPE html>
<html>
<head>
    <title>Soumission #{{ $validation->id }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { color: #01aae0; text-align: center; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <div style="display: table; width: 100%;">
        <div style="display: table-cell; vertical-align: middle; text-align: center;">
            <img src="{{ public_path('assets/images/logo_abidajn.png') }}" style="width: 30%;" alt="logo du port d'abidjan">
        </div>
    </div>
    <h1>Détails de la Soumission</h1>
    <table>
        <tr>
            <th>Nom et Prénoms</th>
            <td>{{ $validation->name }} {{ $validation->prenom }}</td>
        </tr>
        <tr>
            <th>Matricule</th>
            <td>{{ $validation->matricule }}</td>
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
            <th>Choix</th>
            <td>{{ $validation->etat }}</td>
        </tr>
    </table>
</body>
</html>