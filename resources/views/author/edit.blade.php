@extends('layouts.admin');

@section('pageTitle') Update Author @endsection
@section('content')


    <div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
        <hr>
        <form action="{{route('author.update', $author->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name author</label>
                <input name="name" type="text" class="form-control" id="name"
                       value="{{old('name') ? old('name') : $author->name}}">
            </div>
            @error('name')
            <p class="text-danger ">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary">Update</button>
            <a class="float-end btn btn-warning m-lg-1" href="{{route('author.index')}}">Back</a>

        </form>
        <hr>
    </div>

@endsection
