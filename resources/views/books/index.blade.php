<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Books</title>
</head>
<body>

@if(count($books))

    <div class="container col-6 font-monospace">
        <h2 class="m-lg-3">Books Table</h2>
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
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td><a href="{{route('books.show', $book->id)}}">{{ $book->title }}</a></td>
                    <th scope="col">{{$book->authors['name']}}</th>
                    <th scope="col">
                        @foreach($book->genres as $genre)
                            {{$genre->genre . ","}}
                        @endforeach
                    </th>
                </tr>
                </a>
            @endforeach
            </tbody>

        </table>
        <hr>
        <div> {{ $books->links() }} </div>
        <div>
            <a class="btn btn-primary" href="{{route('books.create')}}">Create</a>
            <a class="btn btn-success" href="{{route('main')}}">Main</a>
        </div>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
