@extends('layouts.admin');

@section('pageTitle') Book @endsection
@section('content')

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
                <td scope="col">{{$book->author['name']}}</td>
                <td scope="col">
                    @foreach($book->genres as $genre)
                        {{$genre->name . ","}}
                    @endforeach
                </td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('book.edit', $book->id)}}">Update</a>
        <form action="{{route('book.destroy', $book->id)}}" method="post" class="d-inline ">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">

        </form>
        <a class="float-end btn btn-warning" href="{{route('book.index')}}">Back</a>
        <hr>
    </div>

@endsection
