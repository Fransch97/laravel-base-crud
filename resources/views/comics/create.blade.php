@extends('layout.comics')

@section('content')




<div class="container my-5">
    <h1 class="my-5">Aggiungi fumetto</h1>
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group my-4">
          <label>Titolo</label>
          <input type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Titolo">
          @error('title')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group my-4">
          <label >Img URL</label>
          <input type="text" value="{{old('image')}}"  class="form-control @error('image') is-invalid @enderror" name="image" placeholder="URL">
          @error('image')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group my-4 ">
            <label class="form-check-label">Tipo</label>
            <input type="text" value="{{old('type')}}"  class="form-control @error('type') is-invalid @enderror" placeholder="Type" name="type" >
            @error('type')
            <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary my-5">Submit</button>
    </form>
</div>
@endsection
