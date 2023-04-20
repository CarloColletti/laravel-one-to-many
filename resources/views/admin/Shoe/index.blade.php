@extends('layouts.app')

@section('cdn')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection

@section('title')
  Lista Scarpe
@endsection

@section('content')
  <div class="container">
    <div class="row">
      {{-- search bar  --}}
      <div class="row py-4">
        <div class="col-8">
          <form class="d-flex">
            <input class="form-control me-2" type="text" name="term" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>

        <div class="col-4">
          <div class="d-flex">
            <a href="{{ route('Admin.Shoe.create') }}" class="btn btn-outline-success ms-auto" type="submit">Nuova Scarpa</a>
          </div>
        </div>

      </div>


      {{-- table show all projects  --}}
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome Scarpa</th>
            <th scope="col">Brand</th>
            <th scope="col">Taglia</th>
            <th scope="col">prezzo</th>
            <th scope="col">Tipo</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($shoes as $shoe)
            <tr>
              <th scope="row">{{$shoe->id}}</th>
              <td>{{$shoe->name}}</td>
              <td>{{$shoe->brand}}</td>
              <td>{{$shoe->size}}</td>
              <td>{{$shoe->price}}€</td>
              <td>{{$shoe->type}}</td>
              {{-- button function --}}
              <td>
                <a href="{{ route('Admin.Shoe.show',['Shoe'=>$shoe]) }}" class="px-2">
                  <i class="bi bi-card-list"></i>
                </a>
                <a href="{{ route('Admin.Shoe.edit',['Shoe'=>$shoe]) }}" class="px-2">
                  <i class="bi bi-pencil-square"></i>
                </a>
                <button type="button" class="btn bi bi-trash" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$shoe->id}}"></button>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
      {{-- end table  --}}
    </div>
  </div>
@endsection