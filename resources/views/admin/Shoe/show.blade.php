@extends('layouts.app')

@section('title')
  Dettaglio Scarpa
@endsection

@section('content')
  <div class="container">
    {{-- botton return to shoe list  --}}
    <div class="row">
      <a href="Admin.Shoe.index" class="btn ms-auto">Torna alla lista</a>
    </div>

    {{-- detail shoe  --}}
    <div class="row">
      <h2>
        Stai visualizzando la Scarpa: {{$Shoe->name}}
      </h2>
      {{-- list detail  --}}
      <div class="col-5">
        <ul>
          <li>Nome: {{$Shoe->name}}</li>
          <li>Brand: {{$Shoe->brand}}</li>
          <li>Taglia: {{$Shoe->size}}</li>
          <li>Prezzo {{$Shoe->price}}</li>
          <li>Tipologia: {{$Shoe->type}}</li>
        </ul>
      </div>
    </div>
  </div>
@endsection