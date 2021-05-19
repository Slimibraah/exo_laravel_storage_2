@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit user</h2>
            <ul>
                @foreach ($errors->all() as $message) 
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        <form method="POST" action="/user/{{ $user->id }}/update" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="form-label">nom</label>
                     <input type="text" class="form-control" value="{{ $user->nom }}" name="nom">
                </div>

                
                <div class="mb-3">
                    <label class="form-label">prenom</label>
                    <input type="text" class="form-control" value="{{ $user->prenom }}" name="prenom">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">age</label>
                    <input type="number" class="form-control" value="{{ $user->age }}" name="age">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" name="email">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">password</label>
                    <input type="password" class="form-control" value="{{ $user->password }}" name="password">
                </div> 
                
                <div class="mb-3">
                    <label class="form-label">Photo de profil</label>
                    <input type="file" class="form-control" value="{{ $user->pdp }}" name="pdp">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
@endsection