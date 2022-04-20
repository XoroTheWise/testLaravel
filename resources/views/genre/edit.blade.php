@extends('layouts.admin');

@section('pageTitle') Update genre @endsection
@section('content')

    @extends('layouts.upgradeGenre')
        @section('actionForm'){{route('genre.update', $genre->id)}}@endsection
        @section('methodForm') @method('patch') @endsection
        @section('valueForm'){{old('name') ? old('name') : $genre->name}}@endsection
        @section('nameButton')Update @endsection

@endsection
