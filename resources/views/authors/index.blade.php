<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Authors</title>
</head>
<body>

@if(count($authors))

    <div class="container col-6 font-monospace">
        <h2 class="m-lg-3">Authors Table</h2>
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
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td><a href="{{route('authors.show', $author->id)}}">{{ $author->name }}</a></td>
                    <td>{{ count($author->books)}}</td>
                </tr>
                </a>
            @endforeach
            </tbody>

        </table>
        <hr>
        <div> {{ $authors->links() }} </div>
        <div>
            <a class="btn btn-primary" href="{{route('authors.create')}}">Create</a>
            <a class="btn btn-success" href="{{route('main')}}">Main</a>
        </div>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
