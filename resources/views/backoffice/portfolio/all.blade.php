@extends('layout.app')

@section('content')
    <h1 class="text-danger d-flex justify-content-center">portfolio</h1>
    <a class="btn btn-success d-flex justify-content-center " href="/portfolio/create">Ajouter</a>
    @if (session('message'))
        <div class=" alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($portfolios as $portfolio)
        <div class="d-flex justify-content-space-between"></div>
    
                <h3 class="d-flex ms-2 border border-3 justify-content-center">Nom</h3>
                    <a href="/portfolio/{{ $portfolio->id }}/show">{{ $portfolio->nom}}</a>
                    <h3 class="d-flex ms-2 border border-3 justify-content-center">image</h3>
                        <img src="{{ asset("img/" . $portfolio->image) }}" alt="">
                <h3 class="d-flex ms-2 border border-3 justify-content-center">catégorie</h3>
                    <p class="">{{ $portfolio->catégorie}}</p>
    
                <h3 class="d-flex ms-2 border border-3 justify-content-center">description</h3>
                    <p>{{ $portfolio->description }}</p>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary text-white" href="/portfolio/{{ $portfolio->id}}/edit">Edit</a>
                    <form action="/portfolio/{{ $portfolio->id}}/delete" method="POST">
                        @csrf

                     <button class="btn btn-danger btn-sm text-white justify-content-center" type="submit">Delete</button>
                    </form>
                    <form action="/portfolio/{{ $portfolio->id}}/download" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm text-white" type="submit">download</button>
                    </form>
        </div>
    @endforeach
@endsection