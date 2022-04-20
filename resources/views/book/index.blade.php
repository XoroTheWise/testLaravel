@extends('layouts.admin');

@section('pageTitle') Books Table @endsection
@section('content')

    <div class="container col-6 ">
        @if(count($books))
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
                        <td><a href="{{route('book.show', $book->id)}}">{{ $book->title }}</a></td>
                        <td scope="col">{{$book->author['name']}}</td>
                        <td scope="col">
                            @foreach($book->genres as $genre)
                                {{$genre->name . ","}}
                            @endforeach
                        </td>
                    </tr>
                    </a>
                @endforeach
                </tbody>

            </table>
            <hr>
            <div> {{ $books->links() }} </div>
        @endif
        <div>
            <a class="btn btn-primary" href="{{route('book.create')}}">Create</a>
            <a class="btn btn-success" href="{{route('main')}}">Main</a>
        </div>
    </div>

@endsection
