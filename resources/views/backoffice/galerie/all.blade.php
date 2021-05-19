@extends('layout.app')


@section('content')
    <h1 class="text-danger border-bottom">galerie</h1>
    <a class="btn btn-success " href="/galerie/create">Ajouter</a>
    @foreach ($galeries as $galerie)
    
        <h3 class="d-flex ms-2 border border-3 justify-content-center">Nom</h3>
        <a href="/galerie/{{ $galerie->id }}/show">{{ $galerie->nom}}</a>
        <h3 class="d-flex ms-2 border border-3 justify-content-center">Image</h3>
        <img src={{asset("img/" . $galerie->image) }} alt="">
        <h3 class="d-flex ms-2 border border-3 justify-content-center">Description</h3>
        <p>{{ $galerie->description}}</p>

        
        <a class="btn btn-primary text-white" href="/galerie/{{ $galerie->id}}/edit">Edit</a>
        <form action="/galerie/{{ $galerie->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
            <form action="/galerie/{{ $galerie->id}}/download">
            @csrf
            <button class="btn btn-danger btn-sm text-white" type="submit">download</button>
            </form>
    @endforeach
@endsection