@extends('layouts.admin');

@section('pageTitle') Welcome @endsection

@section('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')

    <div class="container col-6 font-monospace">
        <hr>
        <div>
            @if(auth()->user()->role == 'admin')
                <a class="btn btn-success" href="{{route('author.index')}}">Authors</a>
                <a class="btn btn-success" href="{{route('book.index')}}">Books</a>
                <a class="btn btn-success" href="{{route('genre.index')}}">Genres</a>
            @endif

            @if(auth()->user()->role != 'admin')
                <p>Go Api, man!</p>
            @endif

            <a class="btn btn-danger float-end" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </hr>
    </div>

@endsection
