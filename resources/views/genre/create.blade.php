@extends('layouts.admin')

@section('pageTitle') Create genre @endsection
@section('content')

    @extends('layouts.upgradeGenre')
        @section('actionForm'){{route('genre.store')}}@endsection
        @section('valueForm'){{old('name')}}@endsection
        @section('nameButton')Create @endsection

@endsection
