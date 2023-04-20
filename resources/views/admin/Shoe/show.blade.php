@extends('layouts.app')

@section('title')
  Dettaglio Scarpa
@endsection

@section('content')
  <div class="container">
    {{-- detail shoe  --}}
    <div class="row">
      <h2>
        Stai visualizzando la Scarpa: {{$Shoe->name}}
      </h2>
      {{-- list detail  --}}
      <div class="col-7">
        <ul>
          <li>Nome: {{$Shoe->name}}</li>
          <li>Brand: {{$Shoe->brand}}</li>
          <li>Taglia: {{$Shoe->size}}</li>
          <li>Prezzo {{$Shoe->price}}</li>
          <li>Tipologia: {{$Shoe->type}}</li>
        </ul>
      </div>

      {{-- image shoe  --}}
      <div class="col-5">
        <img src="{{ $Shoe->img }}" alt="">
      </div>
    </div>

    {{-- botton return to shoe list  --}}
    <div class="row py-5">
      <div class="col-2 ms-auto">
        <a href="{{ route('Admin.Shoe.index') }}" class="btn btn-outline-success">Torna alla lista</a>
      </div>
    </div>

  </div>
@endsection