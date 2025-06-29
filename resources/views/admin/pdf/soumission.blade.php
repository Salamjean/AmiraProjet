<!DOCTYPE html>
<html>
<head>
    <title>Soumission #{{ $validation->id }}</title>
    <style>
        body { 
            font-family: 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.4;
            color: #444;
            padding: 0;
            margin: 0;
            font-size: 12px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 15px;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }
        .logo {
            width: 80px;
        }
        .title-container {
            flex-grow: 1;
            text-align: center;
        }
        h1 {
            color: #2c3e50;
            margin: 0;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        h2 {
            color: #2980b9;
            text-align: center;
            font-size: 16px;
            margin: 15px 0;
            padding-bottom: 8px;
            border-bottom: 1px dashed #bdc3c7;
        }
        h4 {
            color: #e74c3c;
            margin: 3px 0 0;
            font-size: 12px;
            font-style: normal;
            font-weight: 400;
        }
        .subtitle {
            text-align: center;
            color: #7f8c8d;
            margin-bottom: 20px;
            font-size: 11px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th {
            background-color: #34495e;
            color: white;
            padding: 8px 10px;
            text-align: left;
            font-weight: 500;
            width: 30%;
            font-size: 11px;
        }
        td {
            padding: 8px 10px;
            border-bottom: 1px solid #ecf0f1;
            background-color: #fff;
            font-size: 11px;
        }
        tr:nth-child(even) td {
            background-color: #f8f9fa;
        }
        .footer {
            font-size: 9px;
            text-align: center;
            color: #95a5a6;
            margin-top: 30px;
            padding-top: 10px;
            border-top: 1px dotted #bdc3c7;
            line-height: 1.3;
        }
        .highlight {
            font-weight: 600;
            color: #2980b9;
        }
        .signature-area {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
        }
        .signature-line {
            border-top: 1px solid #95a5a6;
            width: 180px;
            text-align: center;
            padding-top: 3px;
            font-size: 10px;
            color: #7f8c8d;
        }
        .status {
            font-weight: 600;
            padding: 3px 8px;
            border-radius: 3px;
            display: inline-block;
        }
        .status-approved {
            background-color: #27ae60;
            color: white;
        }
        .status-pending {
            background-color: #f39c12;
            color: white;
        }
        .status-rejected {
            background-color: #e74c3c;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ public_path('assets/images/logo_abidajn.png') }}" class="logo" alt="Logo du Port d'Abidjan">
            <div class="title-container">
                <h1>PORT AUTONOME D'ABIDJAN</h1>
                <h4>Une Référence Internationale</h4>
            </div>
        </div>

        <h2>SOUMISSION DES RÉFORMES DE VÉHICULES 2024-2025</h2>
        
        <div class="subtitle">Fiche de validation N° <span class="highlight">{{ $validation->reference }}</span></div>

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
                <th>Immatriculation</th>
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
                <td>{{ $validation->montant }} F CFA</td>
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
                <th>Statut</th>
                <td><span class="status status-{{ strtolower($validation->etat) }}">{{ $validation->etat }}</span></td>
            </tr>
        </table>

        <div class="signature-area">
            <div class="signature-line">Signature du demandeur</div>
            <div class="signature-line" style="font-weight: bold; "><i>{{ $validation->name }} {{ $validation->prenom }}</i></div>
        </div>

        <div class="footer">
            Port Autonome d'Abidjan, Société d'État au capital de 100.000.000.000 F CFA, régie par la loi n°2020-626 du 14 Août 2020 portant 
            définition et organisation des Sociétés d'État et par le décret n°92-940 du 23 décembre 1992 portant transformation du Port
            Autonome d'Abidjan (P.A.A) en Société d'État, dont le siège social est sis à Abidjan-Treichville, Rue A22 des Piroguiers,
            Boulevard du Port, adresse : BP V85 Abidjan et immatriculée au RCCM sous le numéro CI-ABJ-03-2021-M-00928,
            Tél : 27-21-23-80-00, Téléfax : 27-21-23-80-80, Web : www.portabidjan.ci
        </div>
    </div>
</body>
</html>