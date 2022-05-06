<x-header />

    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    {{-- TODO: do this implicitly --}}
                    <a href="/movie/{{ $movie->id }}"><img src="https://via.placeholder.com/185x275"></a>
                    <label>Title: {{ $movie->name }}</label>
                </div>
            @endforeach
        </div>
    </div>

<x-footer />