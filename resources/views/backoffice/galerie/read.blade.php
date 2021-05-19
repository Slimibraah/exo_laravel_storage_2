@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <i class='icofont-simple-smile'></i>
        <div class="card-body">
          <h5 class="card-title">galerie</h5>
             <p>nom : {{ $data->nom }}</p>
             <img src="{{ asset("img/" . $data->image) }}" class="card-img-top" alt="">
             <p>description:{{ $data->description }}</p>
            
          <a href="{{ route("caracteristique") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection