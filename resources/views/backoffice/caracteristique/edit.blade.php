@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit caracteristique</h2>
        <form method="POST" action="/caracteristique/{{ $caracteristique->id }}/update">
            @csrf
            <div class="row">
              <div class="col-3">
                <h4>1</h4>
                <i class='icofont-simple-smile'></i>
              </div>
              <div class="col-3">
                <h4>2</h4>
                <i class='icofont-document-folder'></i>
              </div>
              <div class="col-3">
                <h4>3</h4>
                <i class='icofont-live-support'></i>
              </div>
              <div class="col-3">
                <h4>4</h4>
                <i class='icofont-users-alt-5'></i>
              </div>
            </div>
            <label class="form-label">icon</label>
            <select name="icon" class="form-control">
              <option value="<i class='icofont-simple-smile'></i>">1</option>
              <option value="<i class='icofont-document-folder'></i>">2</option>
              <option value="<i class='icofont-live-support'></i>">3</option>
              <option value="<i class='icofont-users-alt-5'></i>">4</option>
            </select>

            <div class="mb-3">
                <label class="form-label">chiffre</label>
                <input type="number" class="form-control" value="{{ $caracteristique->chiffre }}" name="chiffre">
              </div>  
              <div class="mb-3">
                <label class="form-label">nom</label>
                <input type="text" class="form-control" value="{{ $caracteristique->nom }}" name="nom">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection