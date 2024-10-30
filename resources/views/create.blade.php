@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajout nouvel Etudiant</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('etudiant') }}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br>
    <br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- Formulaire pour ajouter un nouvel étudiant -->
<form action="{{ route('etudiant.ajouter') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom:</strong>
                <input type="text" name="prenom" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Classe :</strong>
                <select name="classes_id" class="form-control">
                    @foreach($classe as $classes)
                        <option value="{{ $classes->id }}">{{ $classes->libelle }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- Formulaire pour mettre à jour un étudiant -->
@if(isset($etudiant))
<form action="{{ route('etudiant.update', $etudiant->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" value="{{ $etudiant->nom }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prénom:</strong>
                <input type="text" name="prenom" value="{{ $etudiant->prenom }}" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Classe :</strong>
        <select name="classes_id" class="form-control"> <!-- Changer ici -->
            @foreach($classe as $classes)
                <option value="{{ $classes->id }}">{{ $classes->libelle }}</option>
            @endforeach
        </select>
    </div>
</div>

</div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
@endif

@endsection
