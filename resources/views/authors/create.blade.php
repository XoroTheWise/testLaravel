<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>testLaraka</title>
</head>
<body>

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
    <a class="float-end btn btn-warning" href="{{route('authors.index')}}">Back</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
</body>
</html>
