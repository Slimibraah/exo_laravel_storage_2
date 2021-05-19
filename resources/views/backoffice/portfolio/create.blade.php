@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Create portfolio</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/portfolio/store" enctype="multipart/form-data">
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
                <label class="form-label">catégorie</label>
                <select class="form-select" name="catégorie">
                    <option value="item1">Item 1</option>
                    <option value="item2">Item 2</option>
                    <option value="item3">Item 3</option>
                    <option value="item4">Item 4</option>
                    <option value="item5">Item 5</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
