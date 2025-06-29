@extends('admin.layouts.template')
@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h2 class="h5 mb-0 fw-bold">
                        <i class="fas fa-car me-2"></i>Gestion des Véhicules
                    </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('vehicule.store') }}" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Type du véhicule</label>
                            <input type="text" name="types" value="{{old('types')}}" 
                                   class="form-control" placeholder="Ex: Berline, SUV...">
                            @error('types')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Immatriculation</label>
                            <input type="text" name="immatriculation" value="{{old('immatriculation')}}"
                                   class="form-control" placeholder="Ex: AB-123-CD">
                            @error('immatriculation')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Marque du véhicule</label>
                            <input type="text" name="modeles" value="{{old('modeles')}}"
                                   class="form-control" placeholder="Ex: Peugeot 308">
                            @error('modeles')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Date de mise en service</label>
                            <input type="date" name="date" value="{{old('date')}}"
                                   class="form-control">
                            @error('date')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-success px-4">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h4 class="h5 mb-0 fw-bold">
                        <i class="fas fa-file-export me-2"></i>Exporter/Importer des véhicules
                    </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="d-grid">
                                <a href="{{ route('vehicules.export') }}" class="btn btn-success btn-lg">
                                    <i class="fas fa-file-excel me-2"></i>Exporter en Excel
                                </a>
                                <small class="text-muted mt-1">Télécharger la liste complète des véhicules</small>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <form action="{{ route('vehicules.import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="file" class="form-label fw-bold">Importer un fichier Excel</label>
                                    <input type="file" name="file" class="form-control" required accept=".xlsx,.xls,.csv">
                                    <small class="text-muted">Formats acceptés: .xlsx, .xls, .csv</small>
                                </div>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fas fa-file-import me-2"></i>Importer
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
