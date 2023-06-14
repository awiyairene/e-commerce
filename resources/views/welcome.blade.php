@extends('layout.layout')

@section('content')

<div>
    @foreach ($categories as $categorie)
      <div>
        <!-- Affichez les détails de l'article ici -->
        <h2>{{ $categorie->nom}}</h2>
        <p>{{ $categorie->description }}</p>
  .....
      </div>
    @endforeach
  </div>

@endsection