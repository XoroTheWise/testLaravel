<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Genres</title>
</head>
<body>

@if(count($genres))

    <div class="container col-6 font-monospace">
        <h2 class="m-lg-3">Genres Table</h2>
        <hr>
        <table class="table table-secondary">
            <thead>
            <tr>
                <th scope="scope" class="col-4">ID</th>
                <th scope="col" class="col-3">Genre</th>
            </tr>
            </thead>

            <tbody>
            @foreach($genres as $genre)
                <tr>
                    <td>{{ $genre->id }}</td>
                    <td><a href="{{route('genres.show', $genre->id)}}">{{ $genre->genre }}</a></td>
                </tr>
                </a>
            @endforeach
            </tbody>

        </table>
        <hr>
        <div> {{ $genres->links() }} </div>
        <div>
            <a class="btn btn-primary" href="{{route('genres.create')}}">Create</a>
            <a class="btn btn-success" href="{{route('main')}}">Main</a>
        </div>
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
