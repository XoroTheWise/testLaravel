<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>EditBook</title>
</head>
<body>

<div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
    <hr>
    <form action="{{route('books.update', $book->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title book</label>
            <input name="title" type="text" class="form-control" id="title" value="{{$book->title}}">
            <input name="bookId" id="bookId" value="{{$book->id}} " style="display: none">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <select id="author" class="form-select" name="authorId">
                @foreach($authors as $author)
                    <option
                        {{ $author->id == $book->authors->id ? ' selected ' : '' }}
                        value="{{$author->id}}">{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select multiple id="genre" class="form-control" name="genreId[]">
                @foreach($genres as $genre)
                    <option
                        @foreach($book->genres as $bookGenre)
                        {{ $genre->id == $bookGenre->id ? ' selected ' : '' }}
                        @endforeach
                        value="{{$genre->id}}">{{$genre->genre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="float-end btn btn-warning m-lg-1" href="{{route('books.index')}}">Back</a>

    </form>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
