@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("img/" . $data->image) }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">Portfolio</h5>
             <p>nom : {{ $data->nom }}</p>
            <p>catégorie:{{ $data->catégorie }}</p>
            <p>description:{{ $data->description }}</p>
           
          <a href="{{ route("portfolio") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection