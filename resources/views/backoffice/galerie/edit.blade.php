@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit galerie</h2>
        <form method="POST" action="/galerie/{{ $galerie->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control" value="{{ $galerie->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" class="form-control" value="{{ $galerie->image }}" name="image">
              </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $galerie->description }}" name="description">
              </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection