@extends('layouts.admin');

@section('pageTitle') Update genre @endsection
@section('content')
    <div class="container col-6 font-monospace">
        <hr>
        <form action="
                @if(!empty($genre))
                    {{route('genre.update', $genre->id)}}
                @endif
                @if(empty($genre))
                    {{route('genre.store')}}
                @endif
            " method="post">
            @csrf

            @if(!empty($genre))
                @method('patch')
            @endif


            <div class="mb-3">
                <label for="name" class="form-label">Name genre</label>
                <input name="name" type="text" class="form-control" id="name"
                       @if(!empty($genre))
                            value="{{old('name') ? old('name') : $genre->name}}"
                       @endif
                       @if(empty($genre))
                            value="{{old('name')}}"
                       @endif
                >

                @error('name')
                <p class="text-danger ">{{$message}}</p>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">
                @if(!empty($genre))
                    Update
                @endif
                @if(empty($genre))
                    Create
                @endif
            </button>
            <a class="float-end btn btn-warning m-lg-1" href="{{route('genre.index')}}">Back</a>
        </form>
        <hr>
    </div>

@endsection


