@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img src="{{ asset("img/" . $data->pdp) }}" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">User</h5>
             <p>nom : {{ $data->nom }}</p>
            <p>prenom:{{ $data->prenom }}</p>
            <p>age:{{ $data->age }}</p>
            <p>email:{{ $data->email }}</p>
            <p>password:{{ $data->password}}</p>
          <a href="{{ route("user") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection