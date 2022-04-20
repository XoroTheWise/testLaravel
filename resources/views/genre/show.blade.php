@extends('layouts.admin');

@section('pageTitle') Genre @endsection
@section('content')

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
                <td>{{ $genre->name }}</td>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('genre.edit', $genre->id)}}">Update</a>
        <form action="{{route('genre.destroy', $genre->id)}}" method="post" class="d-inline ">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
            <span class="m-lg-5">При удалении жанра, жанр так же удалится у книг</span>
        </form>
        <a class="float-end btn btn-warning" href="{{route('genre.index')}}">Back</a>
        <hr>
    </div>

@endsection

