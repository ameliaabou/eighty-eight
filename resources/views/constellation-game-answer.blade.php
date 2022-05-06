<x-header />
<div class="container">
    @if($guess === str_replace('_', ' ', $constellation->image_name))
    <h2 style="text-align: center; font-size: 50px; color: white;">Correct!</h2>
    @else
    <h2 style="text-align: center; font-size: 50px; color: white;">Incorrect</h2>
    <h3 style="text-align: center; color: white;">Your Guess: {{ $guess }}</h3>
    @endif
    <br>
    {{-- <h2 style="text-align: center; font-size: 50px; color: white;">Guess the Constellation!</h2> --}}
    <div>
        <img src="/images/{{ $constellation->image_name }}.jpg" 
        style="display: block; margin-left: auto; margin-right: auto;" 
        width="600" height="400">
    </div>
    <div style="width: 300px; display: block; margin-left: auto; margin-right: auto;">
        {{-- <div class="col-sm">
            <form method="POST" action="/constellation-game/check">
                @csrf 
                <label style="font-size: 30px; color: white;">Your Answer:</label>
                <input type="text" class="form-control" name="constellation_name">
                <input  type="hidden" name="constellation_id" value="{{ $constellation->id }}">
                <button type="submit" class="btn btn-dark" style="float: right;">Check</button>
            </form>
        </div> --}}
        {{-- <div class="col-sm"> --}}
            <br>
            <br>
            <form method="GET" action="/constellation-game">
                @csrf
                <button type="submit" class="btn btn-dark" style="width: 100px; display: block; margin-left: auto; margin-right: auto;">Next</button>
            </form>   
        {{-- </div> --}}
    </div>

</div>
<x-footer />