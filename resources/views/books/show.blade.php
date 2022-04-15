<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>ShowBook</title>
</head>
<body>

<div class="container col-6 font-monospace ">
    <hr>
    <table class="table table-secondary">
        <thead>
        <tr>
            <th scope="scope" class="col-3">ID</th>
            <th scope="col" class="col-4">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genres</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <th scope="col">{{$book->authors['name']}}</th>
            <th scope="col">
                @foreach($book->genres as $genre)
                    {{$genre->genre . ","}}
                @endforeach
            </th>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('books.edit', $book->id)}}">Update</a>
    <form action="{{route('books.destroy', $book->id)}}" method="post" class="d-inline ">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Delete">

    </form>
    <a class="float-end btn btn-warning" href="{{route('books.index')}}">Back</a>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
