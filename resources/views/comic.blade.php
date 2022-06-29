@extends('layout.comics')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Copertina</th>
        <th scope="col">Nome</th>
      </tr>
    </thead>
    <tbody>
        {{-- @dd($comics) --}}
    @foreach ($comics as $comic )

      <tr>
        <th scope="row">{{$comic->id}}</th>
        <td><img src="{{$comic->image}}" style="width: 90px; height: 140px" alt=""></td>
        <td>{{$comic->title}}</td>
        <td><a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Show</a></td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection