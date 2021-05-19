@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create galerie</h2>
        <form method="POST" action="/galerie/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">image</label>
                <input type="file" class="form-control"  name="image">
              </div>
              <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
              </div>
               
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
