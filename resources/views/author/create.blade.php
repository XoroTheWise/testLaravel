@extends('layouts.admin');

@section('pageTitle') Create Author @endsection
@section('content')

    <div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
        <span>Для добавление нового пользователя, зарегистрируйте его</span>
        <hr>

        <a class="btn btn-danger" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
            {{ __('logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <a class="float-end btn btn-warning" href="{{route('author.index')}}">Back</a>
    </div>

@endsection
