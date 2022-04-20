@extends('layouts.admin');

@section('pageTitle') Update book @endsection
@section('content')

    @extends('layouts.upgradeBook')
        @section('actionForm'){{route('book.update', $book->id)}}@endsection
        @section('methodForm')@method('patch')@endsection
        @section('valueForm'){{old('title') ? old('title') : $book->title}}@endsection
        @section('bookIdForm')<input name="book_id" id="book_id" value="{{$book->id}} " style="display: none">@endsection
        @section('selectedAuthorsForm')
            <select id="author" class="form-select" name="author_id">
                @foreach($authors as $thisAuthor)
                    <option

                        {{ $thisAuthor->id == $book->author->id ? ' selected ' : '' }}
                        value="{{$thisAuthor->id}}">{{$thisAuthor->name}}</option>
                @endforeach
            </select>
        @endsection
        @section('genresForm')
            @foreach($genres as $genre)
                <option
                    @foreach($book->genres as $bookGenre)
                    {{ $genre->id == $bookGenre->id ? ' selected ' : '' }}
                    @endforeach
                    value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        @endsection

        @section('genresForm')
            @foreach($genres as $genre)
                <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
        @endsection
        @section('nameButton')Update @endsection

@endsection
