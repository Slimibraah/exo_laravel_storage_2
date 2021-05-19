@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">service</h5>
             <p>icon : {{ $data->icon }}</p>
             <p>titre : {{ $data->titre }}</p>

             <p>description:{{ $data->description }}</p>
            
          <a href="{{ route("service") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection