@extends('layouts.admin');

@section('pageTitle') Create Book @endsection
@section('content')

    <div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
        <hr>
        <form action="{{route('book.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title book</label>
                <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">

                @error('title')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>

                <select id="author" class="form-select" name="author_id">
                    @foreach($author as $thisAuthor)
                        <option
                            value="{{$thisAuthor->id}}">{{$thisAuthor->name}}</option>
                    @endforeach
                </select>

                @error('author_id')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <div class="form-group mb-3">
                <label for="genre" class="form-label">Genres</label>
                <select multiple id="genre" class="form-control" name="genres[]">

                    @foreach($genre as $thisGenre)
                        <option
                            value="{{$thisGenre->id}}"
                            {{ (collect(old('genres'))->contains($thisGenre->id)) ? ' selected ' : '' }}
                            >{{$thisGenre->name}}
                        </option>
                    @endforeach

                </select>

                @error('genres')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <a class="float-end btn btn-warning m-lg-1" href="{{route('book.index')}}">Back</a>
        </form>
        <hr>
    </div>

@endsection
