@extends('layout.comics')

@section('content')
<div class="comic-show container text-center">

    <h1>{{$comic->title}}</h1>
    <img class="my-5" src="{{$comic->image}}" alt="">
    <p>{{$comic->type}}</p>
    <a href="{{route('comics.index')}}" class="btn btn-primary">Indetro</a>

</div>
@endsection
