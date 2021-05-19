@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit service</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/service/{{ $service->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">icon</label>
              <input type="text" class="form-control" value="{{ $service->icon }}" name="icon">
            </div>
            <div class="mb-3">
                <label class="form-label">titre</label>
                <input type="text" class="form-control" value="{{ $service->titre }}" name="titre">
              </div>
              <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $service->description }}" name="description">
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection