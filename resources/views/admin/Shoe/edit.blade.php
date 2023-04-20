@extends('layouts.app')

@section('title')
  Modifica Scarpa
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <h2>
        Stai modificando i dati della scarpa: {{$Shoe->name}}
      </h2>
      {{-- form mod new shoes  --}}
      <form action="{{ route('Admin.Shoe.update', $Shoe) }}" method="POST" class="row py-5">
        {{-- token  --}}
        @csrf

        {{-- method  --}}
        @method('put')

        {{-- input group  --}}
        <div class="col-5">
          <div class="container px-0">
            <div class="row">
              {{------------------ insert data  ------------------}}

              {{-- name shoe  --}}
              <label for="name" class="form-label">Nome della scarpa:</label>
              <div class="input-group mb-4">
                <input type="text" class="form-control" name='name' id='name' value="{{$Shoe->name}}">
              </div>

              {{-- name brand  --}}
              <label for="brand" class="form-label">Nome del brand:</label>
              <div class="input-group mb-4">
                <input type="text" class="form-control" name='brand' id='brand' value='{{$Shoe->brand}}'>
              </div>

              {{-- size shoe  --}}
              <label for="size" class="form-label">Misura</label>
              <div class="input-group mb-4">
                <input type="number" class="form-control" name='size' id='size' value="{{$Shoe->size}}">
              </div>

              {{-- price shoe  --}}
              <label for="price" class="form-label">Prezzo</label>
              <div class="input-group mb-4">
                <input type="number" class="form-control" name='price' id='price' value='{{$Shoe->price}}'>
              </div>

              {{-- type of shoes --}}
              <label for="type" class="form-label" value='{{$Shoe->type}}'>Tipo di Scarpa:</label>
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

      {{-- botton return to shoe list  --}}
      <div class="row py-5">
        <div class="col-2 ms-auto">
          <a href="{{ route('Admin.Shoe.index') }}" class="btn btn-outline-success">Torna alla lista</a>
        </div>
      </div>
    </div>
  </div>
@endsection