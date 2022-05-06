<x-header />

<div class="container">
    <h2 style="text-align: center; font-size: 50px; color: white;">Favorites</h2>
    <hr>
    <div class="row">
        @if($favorites->count() > 0)
            @foreach ($favorites as $favorite)
                <div class="col" style="margin-bottom: 20px">
                    <div class="card" style="width: 302px;">
                        <a href="/constellation/{{ $favorite->constellation_id }}"><img src="/images/{{ $favorite->constellations->image_name }}.jpg" width="300" height="200"></a>
                        <label class="h4" style="text-align: center; float: left;">
                            {{ $favorite->constellations->alias }}</label>
                            <form method="POST" action="/remove-from-favorites">
                                @csrf
                                <input  type="hidden" name="constellation_id" value="{{ $favorite->constellation_id }}">
                                <button type="submit" class="btn btn-dark" style=" position:absolute; top:0; right:0; width: 30px; height: 30px; padding: 0px;">
                                    X
                                </button>
                            </form>
                        
                    </div>
                </div>
            @endforeach
        @else
            <h3 style="text-align: center; color: white;">No favorites :(</h3>
        @endif
    </div>
</div>

<x-footer />