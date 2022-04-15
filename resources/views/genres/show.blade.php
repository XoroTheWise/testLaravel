<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>ShowGenre</title>
</head>
<body>

<div class="container col-6 font-monospace">
    <hr>
    <table class="table table-secondary">
        <thead>
        <tr>
            <th scope="scope" class="col-3">ID</th>
            <th scope="col" class="col-6">Genre</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{ $genre->id }}</td>
            <td>{{ $genre->genre }}</td>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{route('genres.edit', $genre->id)}}">Update</a>
    <form action="{{route('genres.destroy', $genre->id)}}" method="post" class="d-inline ">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Delete">
        <span class="m-lg-1">Перед удалением жанра, удалите связанные книги</span>
    </form>
    <a class="float-end btn btn-warning" href="{{route('genres.index')}}">Back</a>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
