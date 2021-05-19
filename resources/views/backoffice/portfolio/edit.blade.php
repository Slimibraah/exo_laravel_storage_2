@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit portfolio</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/portfolio/{{ $portfolio->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control" value="{{ $portfolio->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" class="form-control" value="{{ $portfolio->image }}" name="image">
              </div>
              <div class="mb-3">
                <label class="form-label">catégorie</label>
                <input type="catégorie" class="form-control" value="{{ $photo->catégorie }}" name="catégorie">
              </div>
              <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $portfolio->description }}" name="description">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection