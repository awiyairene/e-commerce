@extends('layout.layout')

@section('content')
    <div class="d-flex justify-content-between">
        <h1></h1>
        <a href="{{ route('categorie.create') }}" class="btn btn-primary"></a>
        <br>
        @foreach ($categories as $categorie)
        <a href="{{route('categorie.show' , $categorie->id)}}">
            <h4 class="text-primary">{{$categorie->nom}}</h4>
        </a>
        <p>{{$categorie->description}}</p>
        @endforeach
        <div class="container text-center" >
          @include('categorie.titre')

            <div class="row ">
        
              <div class="col s12">
                <h1>CATEGORIES</h1>
                <hr>
                <a href="/categorie/create" class="btn btn-primary">Ajouter</a>
                <hr>
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($categories as $categorie)
                    <tr>
                      <td>{{ $categorie->id}}</td>
                      <td>{{ $categorie->nom}}</td>
                      <td>{{ $categorie->description}}</td>
                      <td>{{ $categorie->image}}</td>
            
                      <td>
                        <a href="#" class="btn btn-info">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                      </td>
        
                    </tr>
                    @endforeach 
                    
                  </tbody>
                </table>
              </div>
        
        
            </div>
          </div>
        
    </div>
@endsection