<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>testLaraka</title>
</head>
<body>

<div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
    <hr>
    <form action="{{route('authors.update', $author->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="name" class="form-label">Name author</label>
            <input name="name" type="text" class="form-control" id="name" value="{{$author->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a class="float-end btn btn-warning m-lg-1" href="{{route('authors.index')}}">Back</a>

    </form>
    <hr>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
