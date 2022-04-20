@extends('layouts.admin');

@section('pageTitle') Author @endsection
@section('content')

    <div class="container col-6 font-monospace ">
        <hr>
        <table class="table table-secondary">
            <thead>
            <tr>
                <th scope="scope" class="col-3">ID</th>
                <th scope="col" class="col-6">Name</th>
                <th scope="col">Num books</th>
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

        <a class="btn btn-primary" href="{{route('author.edit', $author->id)}}">Update</a>

        <form action="{{route('author.destroy', $author->id)}}" method="post" class="d-inline ">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Delete">
            <span class="m-lg-5">При удалении автора, удалятся связанные книги</span>
        </form>

        <a class="float-end btn btn-warning" href="{{route('author.index')}}">Back</a>
        <hr>
    </div>

@endsection
