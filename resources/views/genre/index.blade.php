@extends('layouts.admin');

@section('pageTitle') Genres Table @endsection
@section('content')

    <div class="container col-6 font-monospace">
        @if(count($genres))
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
                        <td><a href="{{route('genre.show', $genre->id)}}">{{ $genre->name }}</a></td>
                    </tr>
                    </a>
                @endforeach
                </tbody>

            </table>
            <hr>
            <div> {{ $genres->links() }} </div>
        @endif
        <div>
            <a class="btn btn-primary" href="{{route('genre.create')}}">Create</a>
            <a class="btn btn-success" href="{{route('main')}}">Main</a>
        </div>
    </div>

@endsection


