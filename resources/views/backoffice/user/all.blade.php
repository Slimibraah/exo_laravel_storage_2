@extends('layout.app')

@section('content')
    <h1 class="text-danger d-flex justify-content-center">User</h1>
    <a class="btn btn-success d-flex justify-content-center " href="/user/create">Ajouter</a>
    @if (session('message'))
        <div class=" alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($users as $user)
        <div class="d-flex justify-content-space-between"></div>
    
                <h3 class="d-flex ms-2 border border-3 justify-content-center">Nom</h3>
                    <a href="/user/{{ $user->id }}/show">{{ $user->nom}}</a>
                <h3 class="d-flex ms-2 border border-3 justify-content-center">prenom</h3>
                    <p class="">{{ $user->prenom}}</p>
    
                <h3 class="d-flex ms-2 border border-3 justify-content-center">age</h3>
                    <p>{{ $user->age }}</p>
                <h3 class="d-flex ms-2 border border-3 justify-content-center">email</h3>
                    <p>{{ $user->email }}</p>
                <h3 class="d-flex ms-2 border border-3 justify-content-center">password</h3>
                    <p>{{ $user->password }}</p>
                <h3 class="d-flex ms-2 border border-3 justify-content-center">Photo de profil</h3>
                    <img src="{{ asset("img/" . $user->pdp) }}" alt="">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary text-white" href="/user/{{ $user->id}}/edit">Edit</a>
                    <form action="/user/{{ $user->id}}/delete" method="POST">
                        @csrf

                     <button class="btn btn-danger btn-sm text-white justify-content-center" type="submit">Delete</button>
                    </form>
                    <form action="/user/{{ $user->id}}/download" method="post">
                        @csrf
                        <button class="btn btn-danger btn-sm text-white" type="submit">download</button>
                    </form>
        </div>
    @endforeach
@endsection