@extends('layout.app')


@section('content')
    <h1 class="text-danger border-bottom">service</h1>
    <a class="btn btn-success " href="/service/create">Ajouter</a>
    @foreach ($services as $service)
        <div>

            <i>{{ $service->icon}}</i>
        </div>
        <p>titre : {{ $service->titre}}</p>
        <p>description : {{ $service->description}}</p>

        <a class="btn btn-primary text-white" href="/service/{{ $service->id}}/edit">Edit</a>
        <form action="/service/{{ $service->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
            
    @endforeach
@endsection