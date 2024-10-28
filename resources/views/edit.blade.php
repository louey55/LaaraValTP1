@extends('layout')

@section('content')

<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Modifier Étudiant</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('etudiant') }}">Retour</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Il y a eu quelques problèmes avec votre entrée.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" value="{{ $etudiant->nom }}" class="form-control" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom:</strong>
                <input type="text" name="prenom" value="{{ $etudiant->prenom }}" class="form-control" required>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Classe :</strong>
                <select name="classes_id" class="form-control" required>
                    @foreach($classes as $classe)
                        <option value="{{ $classe->id }}" {{ $classe->id == $etudiant->classe_id ? 'selected' : '' }}>
                            {{ $classe->libelle }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </div>
    </div>
</form>

@endsection
