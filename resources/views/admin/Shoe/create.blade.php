@extends('layouts.app')

@section('title')
  Aggiungi Scarpa
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <h2>
        Inserisci i dati della nuova Scarpa
      </h2>
      {{-- form add new shoes  --}}
      <form action="{{ route('Admin.Shoe.store') }}" method="POST" class="row py-5">
        {{-- token  --}}
        @csrf
        {{-- input group  --}}
        <div class="col-5">
          <div class="container px-0">
            <div class="row">
              {{------------------ insert data  ------------------}}

              {{-- name shoe  --}}
              <label for="name" class="form-label">Nome della scarpa:</label>
              <div class="input-group mb-4">
                <input type="text" class="form-control" name='name' id='name' placeholder="Nome">
              </div>

              {{-- name brand  --}}
              <label for="brand" class="form-label">Nome del brand:</label>
              <div class="input-group mb-4">
                <input type="text" class="form-control" name='brand' id='brand' placeholder="brand">
              </div>

              {{-- size shoe  --}}
              <label for="size" class="form-label">Misura</label>
              <div class="input-group mb-4">
                <input type="number" class="form-control" name='size' id='size'>
              </div>

              {{-- price shoe  --}}
              <label for="price" class="form-label">Prezzo</label>
              <div class="input-group mb-4">
                <input type="number" class="form-control" name='price' id='price'>
              </div>

              {{-- type of shoes --}}
              <label for="type" class="form-label">Nome del type:</label>
              <div class="mb-3">
                <select class="form-select form-control" name='type' id='type'>
                  <option value="elegant">Elegante</option>
                  <option value="sportive">Sportivo</option>
                  <option value="casual">Casual</option>
                </select>
              </div>

              {{-- PLACEHOLDER save storege image  --}}
              
              {{-- <label for="img" class="form-label">Carica un'immagine</label>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="img" name='img'>
              </div> --}}

              {{-- -------------------------------- --}}

            </div>
          </div>
        </div>

        {{-- image preview (placeholder)  --}}
        <div class="col-6">
          {{-- da inserire quando si aggiungeranno fisicamente le immagini  --}}
        </div>

        {{-- save data  --}}
        <div class="col-2">
          <button type="submit" class="btn btn-outline-success">Salva</button>
        </div>
      </form>


    </div>
  </div>
@endsection