@extends('layout.layout')

@section('content')

 <div class="card">
    <div class="card-header">
        <h4>Add Category</h4>

    </div>
    <div class="card-body">
        <form action="categorie/store" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom">

                </div>

                <div class="col-md-6">
                    <label for="">Descrption</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>

                </div>
                <div class="col-md-12">
                  
                    <input type="file" name="image" class="form-control">

                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                    <a href="categorie" class="btn btn-danger">Retour</a>


                </div>

            </div>
        </form>
    </div>
   
  </div>

@endsection