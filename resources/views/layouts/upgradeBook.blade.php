<div class="container col-6 font-monospace" style="width: 700px; margin-top: 100px">
    <hr>
    <form action="@yield('actionForm')" method="post">
        @csrf
        @yield('methodForm')

        <div class="mb-3">
            <label for="title" class="form-label">Title book</label>
            <input name="title" type="text" class="form-control" id="title" value="@yield('valueForm')">

            @yield('bookIdForm')

            @error('title')
            <p class="text-danger ">{{$message}}</p>
            @enderror

        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>

            @yield('selectedAuthorsForm')

            @error('author_id')
            <p class="text-danger ">{{$message}}</p>
            @enderror

        </div>
        <div class="form-group mb-3">
            <label for="genre" class="form-label">Genres</label>
            <select multiple id="genre" class="form-control" name="genre_id[]">

                @yield('genresForm')

            </select>

            @error('genre_id')
            <p class="text-danger ">{{$message}}</p>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">@yield('nameButton')</button>
        <a class="float-end btn btn-warning m-lg-1" href="{{route('book.index')}}">Back</a>
    </form>
    <hr>
</div>
