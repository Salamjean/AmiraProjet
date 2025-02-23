<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    th {
        background-color: #f2f2f2;
        text-align: center;
    }
    a {
        color: blue;
        text-decoration: none;
    }
    a:hover {
        color: red;
    }

</style>
<body>
    <h1 style="text-align:center">Bienvenue à votre dashboard <br> M. {{ Auth::user()->name }}</h1>
    <div>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1>Dashboard</h1>
            <a href="{{ route('logout.admin') }}"><button>Deconnexion</button></a>
        </div>
        <table>
            <tr style="text-align: center">
                <th>Nom et Prénoms </th>
                <th>Matricule </th>
                <th>Fonction de l'agent</th>
                <th>Date de Naissance </th>
                <th>Date d'embauche </th>
                <th>Anciennété </th>
                <th>Immatriculation du véhicule</th>
                <th>Marque du véhicule</th>
                <th>Date de mise en service du véhicule</th>
                <th>Montatnt proposé </th>
                <th>Date </th>
            </tr>
            @foreach ($validations as $validation)
                <tr style="text-align: center">
                    <td>{{ $validation->name }}</td>
                    <td>{{ $validation->matricule }}</td>
                    <td>{{ $validation->fonction }}</td>
                    <td>{{ $validation->dateNaiss }}</td>
                    <td>{{ $validation->dateEmbauche }}</td>
                    <td>{{ $validation->ancien }}</td>
                    <td>{{ $validation->immatriculation }}</td>
                    <td>{{ $validation->marque }}</td>
                    <td>{{ $validation->dateServ }}</td>
                    <td>{{ $validation->montant }}</td>
                    <td>{{ $validation->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>