@extends('admin.layouts.template')
@section('content')
<div class="container-fluid py-4">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h4 class="mb-0 fw-bold">
                    <i class="fas fa-car me-2"></i>Liste des véhicules
                </h4>
                <a href="{{ route('vehicules.index') }}" class="btn btn-light btn-sm">
                    <i class="fas fa-plus me-1"></i> Ajouter
                </a>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="py-3">Immatriculation</th>
                            <th class="py-3">Modèle</th>
                            <th class="py-3">Type</th>
                            <th class="py-3">Date mise en service</th>
                            <th class="py-3 text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vehicules as $vehicule)
                        <tr>
                            <td class="align-middle fw-bold">{{ $vehicule->immatriculation }}</td>
                            <td class="align-middle">{{ $vehicule->modeles }}</td>
                            <td class="align-middle">
                                <span class="badge bg-info">{{ $vehicule->types }}</span>
                            </td>
                            <td class="align-middle">{{ date('d/m/Y', strtotime($vehicule->date_de_mise_en_service)) }}</td>
                            <td class="align-middle text-end">
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light">
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted small">
                    Affichage de {{ $vehicules->count() }} véhicules
                </div>
                <div>
                    {{ $vehicules->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        @if (Session::has('success1'))
            Swal.fire({
                icon: 'success',
                title: 'Suppression réussie',
                text: '{{ Session::get('success1') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: '#f8f9fa',
                iconColor: '#28a745',
                confirmButtonColor: '#28a745'
            });
        @endif

        @if (Session::has('success'))
            Swal.fire({
                icon: 'success',
                title: 'Validation réussie',
                text: '{{ Session::get('success') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: '#f8f9fa',
                iconColor: '#28a745',
                confirmButtonColor: '#28a745'
            });
        @endif

        @if (Session::has('error'))
            Swal.fire({
                icon: 'error',
                title: 'Erreur',
                text: '{{ Session::get('error') }}',
                showConfirmButton: true,
                confirmButtonText: 'OK',
                background: '#f8f9fa',
                iconColor: '#dc3545',
                confirmButtonColor: '#dc3545'
            });
        @endif
    });
</script>
@endsection