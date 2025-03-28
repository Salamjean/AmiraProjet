@extends('admin.layouts.template')
@section('content')
<h4 style="text-align: center; font-weight:bold; color:#01aae0">LA LISTE DE TOUTES LES SOUMISSIONS</h4>
<div class="card shadow mb-4">
    <div class="card-header py-3 " style="background-color: #01aae0; display: flex; justify-content: space-between; align-items: center;">
        <h6 class="m-0 font-weight-bold text-white" style="margin-right: 15px;">Liste de toutes les soumissions</h6>
        <div style="display: flex; align-items: center;">
            <!-- Champ de recherche -->
            <input type="text" id="searchInput" placeholder="Rechercher..." style="margin-right: 10px; padding: 5px; border-radius: 4px; border: 1px solid #ccc;">
            <!-- Pagination -->
            <div class="pagination-container">
                <nav aria-label="Pagination">
                    <ul class="pagination pagination-sm mb-0">
                        @if ($validations->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">«</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $validations->previousPageUrl() }}" rel="prev">«</a></li>
                        @endif

                        @foreach ($validations->getUrlRange(1, $validations->lastPage()) as $page => $url)
                            @if ($page == $validations->currentPage())
                                <li class="page-item active" style="background-color: #01aae0; color: white; border-color: #01aae0;"><span class="page-link" style="color: white; border-color: #01aae0;">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach

                        @if ($validations->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $validations->nextPageUrl() }}" rel="next">»</a></li>
                        @else
                            <li class="page-item disabled"><span class="page-link">»</span></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align: center">
                        <th>N°</th>
                        <th>Nom et Prénoms</th>
                        <th>Matricule</th>
                        <th>Fonction de l'agent</th>
                        <th>Date de Naissance</th>
                        <th>Date d'embauche</th>
                        <th>Note Annuelle</th>
                        <th>Sanction disciplinaire</th>
                        <th>Type de vehicule</th>
                        <th>Catégorie</th>
                        <th>Anciennété</th>
                        <th>Direction</th>
                        <th>Immatriculation du véhicule</th>
                        <th>Marque du véhicule</th>
                        <th>Date de mise en service du véhicule</th>
                        <th>Montant proposé</th>
                        <th>Date</th>
                        <th>Proposition</th>
                        <th>OBS</th>
                        <th>Télécharger</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($validations as $validation)
                    <tr style="text-align: center">
                        <td>{{ $validation->reference }}</td>
                        <td>{{ $validation->name.' '.$validation->prenom }}</td>
                        <td>{{ $validation->matricule }}</td>
                        <td>{{ $validation->fonction }}</td>
                        <td>{{ $validation->dateNaiss }}</td>
                        <td>{{ $validation->dateEmbauche }}</td>
                        <td>{{ $validation->note }}</td>
                        <td>{{ $validation->sanction }}</td>
                        <td>{{ $validation->typeV }}</td>
                        <td>{{ $validation->categorie }}</td>
                        <td>{{ $validation->ancien }}</td>
                        <td>{{ $validation->direction }}</td>
                        <td>{{ $validation->immatriculation }}</td>
                        <td>{{ $validation->marque }}</td>
                        <td>{{ $validation->dateServ }}</td>
                        <td>{{ $validation->montant }}</td>
                        <td>{{ $validation->created_at->format('d/m/Y') }}</td>
                        <td>VALEUR MAXIMALE</td>
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
                            <!-- Lien pour télécharger le PDF -->
                            <a href="{{ route('download.pdf', $validation->id) }}" class="btn btn-primary btn-sm">
                                <i class="fas fa-download"></i> PDF
                            </a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="19" class="text-center">Aucune soumission effectuée</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fonction de recherche
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#dataTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            });
        });

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