@extends('admin.layouts.template')
@section('content')
<h4 style="text-align: center; font-weight:bold; color:#01aae0">LA LISTES DE TOUTES LES SOUMISSIONS</h4>
<div class="card shadow mb-4">
    <div class="card-header py-3 " style="background-color: #01aae0">
        <h6 class="m-0 font-weight-bold text-white">Listes de toutes les soumissions</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align: center">
                        <th>Nom et Prénoms</th>
                        <th>Matricule</th>
                        <th>Fonction de l'agent</th>
                        <th>Date de Naissance</th>
                        <th>Date d'embauche</th>
                        <th>Anciennété</th>
                        <th>Immatriculation du véhicule</th>
                        <th>Marque du véhicule</th>
                        <th>Date de mise en service du véhicule</th>
                        <th>Montant proposé</th>
                        <th>Date</th>
                        <th>Etat</th>
                        <th>Choix</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody> <!-- Correction : <tfoot> devient <tbody> pour le corps du tableau -->
                    @foreach ($validations as $validation)
                    <tr style="text-align: center">
                        <td>{{ $validation->name.' '.$validation->prenom}}</td>
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
                        <td>
                            <a href="{{ route('etat.admin', $validation->id) }}"><img src="{{ asset('assets/images/pen.png') }}" style="width: 20px"></a>
                        </td>
                        <td>
                            <span class="badge @if($validation->etat == 'en attente') badge-warning 
                                @elseif($validation->etat == 'Pris') badge-success
                                @elseif($validation->etat == 'Non pris') badge-danger 
                                @else badge-secondary 
                                @endif">
                                {{ $validation->etat }}
                            </span>
                        </td>
                        <td>
                            <form action="{{ route('delete.admin', $validation->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: none; border: none; padding: 0; cursor: pointer;">
                                    <img src="{{ asset('assets/images/delete.png') }}" style="width: 20px">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<script>
    $(document).ready(function() {
        @if (Session::has('success1'))
            Swal.fire({
                icon: 'success',
                title: 'Suppression réussie',
                text: '{{ Session::get('success1') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: '#ffcccc',
                color: '#b30000'
            });
        @endif

        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Validation réussie',
                text: '{{ Session::get('success') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: 'white',
                color: '#006600'
            });
        @endif

        @if (Session::has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '{{ Session::get('error') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: '#f86750',
                color: '#ffffff'
            });
        @endif
    });
</script>

@endsection