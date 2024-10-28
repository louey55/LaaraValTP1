extends('layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2>Ajout nouvel Etudiant</h2>

</div>

<div class="pull-right">

<a class="btn btn-

primary" href="{{ route('etudiant') }}"> Back</a>

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

<form action=" {{route('etudiant.ajouter')}}" method="POST">
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Nom:</strong>

<input type="text" name="nom"  class="form-control"> </div>


</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group"> <strong>prenom</strong>

<input type="text" name="prenon" class="form-control">


</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Classe :</strong>

<select name="classe_id" class="form-control"> @foreach($classes as $classes)


<option value="{{$classes->id}}" selected>{{$classes-libelle}}</option>
@endforeach

</select>



</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-primary">Submit</button>

</div>

</div>
</form>




<form action="{{ route('etudiant.update', Setudiant->id) }}" method="POST">

@csrf

@method('PUT')

<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Nom:</strong>

<input type="text" name="nom" value="(( Setudiant-

nom }}" class="form-control"> </div>


</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group"> <strong>Nom 1</strong>

<input type="text" name="prenon" value="{{Setudiant-prenom))" class="form-control">


</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Classe :</strong>

<select name="classe_id" class="form-control"> @foreach($classes as $classes)

@if($classes->id == $etudiant->classes_id)

<option value="{{$classes->id}}" selected>{{$classes-libelle}}</option>


@else

<option value="{{$classes->id}}">{{$classes-libelle}}</option>
</select>

@endif

@endforeach

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-primary">Submit</button>

</div>

</div>

@endsection




<div class="col-xs-12 col-sm-12 col-md-12 text-center">

<button type="submit" class="btn btn-primary" Submit></button>

</div>

</div>

</form>

Bendsection