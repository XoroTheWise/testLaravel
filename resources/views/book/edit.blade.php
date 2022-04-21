@extends('layouts.admin')

@section('pageTitle') Update book @endsection
@section('content')

    <div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
        <hr>
        <form action="
                @if(!empty($book))
                    {{route('book.update', $book->id)}}
                @endif
                @if(empty($book))
                    {{route('book.store')}}
                @endif
            " method="post">

            @csrf

            @if(!empty($book))
                @method('patch')
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title book</label>
                <input name="title" type="text" class="form-control" id="title"
                       @if(!empty($book))
                            value="{{old('title') ? old('title') : $book->title}}">
                            <input name="book_id" id="book_id" value="{{$book->id}} " style="display: none">
                       @endif
                       @if(empty($book))
                            value="{{old('title')}}">
                       @endif

                @error('title')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>

                <select id="author" class="form-select" name="author_id">
                    @foreach($author as $thisAuthor)
                        <option
                            @if(!empty($book))
                                {{ $thisAuthor->id == $book->author->id ? ' selected ' : '' }}
                            @endif
                                value="{{$thisAuthor->id}}">{{$thisAuthor->name}}
                        </option>
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
                        @if(!empty($book))
                            @foreach($book->genres as $bookGenre)
                            {{ $thisGenre->id == $bookGenre->id ? ' selected ' : '' }}
                            @endforeach
                            value="{{$thisGenre->id}}">{{$thisGenre->name}}
                        @endif
                        @if(empty($book))
                            value="{{$thisGenre->id}}"
                            {{ (collect(old('genres'))->contains($thisGenre->id)) ? ' selected ' : '' }}
                            >{{$thisGenre->name}}
                        @endif
                        </option>
                    @endforeach

                </select>

                @error('genres')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">
                @if(!empty($book))
                    Update
                @endif
                @if(empty($book))
                    Create
                @endif

            </button>
            <a class="float-end btn btn-warning m-lg-1" href="{{route('book.index')}}">Back</a>
        </form>
        <hr>
    </div>
@endsection
