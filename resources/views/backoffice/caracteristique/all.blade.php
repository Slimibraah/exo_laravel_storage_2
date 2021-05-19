@extends('layout.app')

@section('content')
    <h1 class="text-danger d-flex justify-content-center">caracteristique</h1>
    <a class="btn btn-success d-flex justify-content-center " href="/caracteristique/create">Ajouter</a>
    @if (session('message'))
        <div class=" alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($caracteristiques as $caracteristique)
    <div class="d-flex justify-content-space-between"></div>
    
            <h3 class="d-flex ms-2 border border-3 justify-content-center">icon</h3>
            <div class="icon">{{ $caracteristique->icon }}</div>
            <h3 class="d-flex ms-2 border border-3 justify-content-center">chiffre</h3>
                <p class="">{{ $caracteristique->chiffre}}</p>
                
                <h3 class="d-flex ms-2 border border-3 justify-content-center">Nom</h3>
                    <a href="/caracteristique/{{ $caracteristique->id }}/show">{{ $caracteristique->nom}}</a>
                
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary text-white" href="/caracteristique/{{ $caracteristique->id}}/edit">Edit</a>
                <form action="/caracteristique/{{ $caracteristique->id}}/delete" method="POST">
                    @csrf

                     <button class="btn btn-danger btn-sm text-white justify-content-center" type="submit">Delete</button>
                </form>
                
            </div>
    
    @endforeach
@endsection