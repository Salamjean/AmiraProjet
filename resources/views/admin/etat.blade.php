@extends('admin.layouts.template')
@section('content')
<h4 style="text-align: center; font-weight:bold; color:#01aae0">Mettre à jour le choix</h4>
<div class="p-5">
    <form class="user" action="{{ route('etatUpdate.admin', $validation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="agentName" style="color: black; display:flex; justify-content:center"   >Nom de l'agent qui a fait la demande</label>
            <input type="text" class="form-control form-control-user" id="agentName" value="{{$validation->name.' '.$validation->prenom }}" style="text-align: center;" readonly>
        </div>
        <label for="etatRadio" style="color: black; display:flex; justify-content:center">État du choix</label><br> 
        <div class="form-group" style="display: flex; justify-content:center; gap:20px">

            <div class="form-check">
                <input class="form-check-input" type="radio" value="Non pris" id="etatNonPrisRadio" name="etat" checked> 
                <label class="form-check-label" for="etatNonPrisRadio" style="color: black;">
                    Non Pris
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" value="Pris" id="etatPrisRadio" name="etat"> 
                <label class="form-check-label" for="etatPrisRadio" style="color: black;">
                    Pris
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-user btn-block" style="background-color: #01aae0; color: white">
            Mèttre à jour
        </button>
    </form>
    <hr>
</div>
</div>
@endsection