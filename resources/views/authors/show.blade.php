<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>testLaraka</title>
</head>
<body>

<div class="container col-6 font-monospace ">
    <hr>
    <table class="table table-secondary">
        <thead>
        <tr>
            <th scope="scope" class="col-3">ID</th>
            <th scope="col" class="col-6">Name</th>
            <th scope="col">Num Books</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name }}</td>
            <td>{{ count($author->books)}}</td>
        </tr>
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{route('authors.edit', $author->id)}}">Update</a>

    <form action="{{route('authors.destroy', $author->id)}}" method="post" class="d-inline ">
        @csrf
        @method('delete')
        <input class="btn btn-danger" type="submit" value="Delete">
        <span class="m-lg-5">Перед удалением автора, удалите связанные книги</span>
    </form>

    <a class="float-end btn btn-warning" href="{{route('authors.index')}}">Back</a>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
