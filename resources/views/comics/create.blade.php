@extends('layout.comics')

@section('content')




<div class="container my-5">

    <h1 class="my-5">Aggiungi fumetto</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group my-4">
          <label>Titolo</label>
          <input type="text" class="form-control" name="title" placeholder="Titolo">
        </div>
        <div class="form-group my-4">
          <label >Img URL</label>
          <input type="text" class="form-control" name="image" placeholder="URL">
        </div>
        <div class="form-group my-4 ">
            <label class="form-check-label">Tipo</label>
            <input type="text" class="form-control" placeholder="Type" name="type" >
        </div>
        <button type="submit" class="btn btn-primary my-5">Submit</button>
    </form>
</div>
@endsection
