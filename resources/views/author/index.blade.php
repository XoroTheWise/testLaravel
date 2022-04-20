@extends('layouts.admin');

@section('pageTitle') Authors @endsection
@section('content')


    @if(count($authors))

        <div class="container col-6 font-monospace">
            <h2 class="m-lg-3">Authors Table</h2>
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
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->id }}</td>
                        <td><a href="{{route('author.show', $author->id)}}">{{ $author->name }}</a></td>
                        <td>{{ count($author->books)}}</td>
                    </tr>
                    </a>
                @endforeach
                </tbody>

            </table>
            <hr>
            <div> {{ $authors->links() }} </div>
            <div>
                <a class="btn btn-primary" href="{{route('author.create')}}">Create</a>
                <a class="btn btn-success" href="{{route('main')}}">Main</a>
            </div>
        </div>
    @endif

@endsection
