@extends('layout.comics')

@section('content')
<div class="container text-center">
    <h1 class="my-5">Errore 4o4</h1>
    <h2 class="my-5">{{$exception->getMessage()}}</h2>
    <a href="{{route('comics.index')}}" class="btn btn-primary">Indetro</a>
</div>
@endsection
