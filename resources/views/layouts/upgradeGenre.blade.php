<div class="container col-6 font-monospace">
    <hr>
    <form action="@yield('actionForm')" method="post">
        @csrf
        @yield('methodForm')

        <div class="mb-3">
            <label for="name" class="form-label">Name genre</label>
            <input name="name" type="text" class="form-control" id="name" value="@yield('valueForm')">

            @error('name')
            <p class="text-danger ">{{$message}}</p>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">@yield('nameButton')</button>
        <a class="float-end btn btn-warning m-lg-1" href="{{route('genre.index')}}">Back</a>
    </form>
    <hr>
</div>
