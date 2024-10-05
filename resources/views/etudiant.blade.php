@extends('layout')
@section('content')

<div class="row" style="margin-top: 5rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Liste des Etudiants</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="#">Create New Student</a>
        </div>
    </div>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($liste as $value)
            <tr>
                <td>{{$loop->index}}</td>
                <td>{{$value->nom}}</td>
                <td>{{$value->prenom}}</td>
                <td>
                    <a class="btn btn-info" href="#">Show</a>
                    <a class="btn btn-primary" href="#">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
