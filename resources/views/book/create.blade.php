@extends('layouts.admin');

@section('pageTitle') Create Book @endsection
@section('content')

    @extends('layouts.upgradeBook')
        @section('actionForm'){{route('book.store')}}@endsection
        @section('valueForm'){{old('title')}}@endsection
        @section('selectedAuthorsForm')
            <select id="author" class="form-select" name="author_id">
                @foreach($author as $thisAuthor)
                    <option
                        value="{{$thisAuthor->id}}">{{$thisAuthor->name}}</option>
                @endforeach
            </select>
        @endsection
        @section('genresForm')
            @foreach($genre as $thisGenre)
                <option  value="{{$thisGenre->id}}">{{$thisGenre->name}}</option>
            @endforeach
        @endsection
        @section('nameButton')Create @endsection

@endsection
