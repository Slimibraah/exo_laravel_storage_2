@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <i class='icofont-simple-smile'></i>
        <div class="card-body">
          <h5 class="card-title">caracteristique</h5>
             <p>icon : {{ $data->icon }}</p>
            <p>chiffre:{{ $data->chiffre }}</p>
            <p>nom:{{ $data->nom }}</p>
            
          <a href="{{ route("caracteristique") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection