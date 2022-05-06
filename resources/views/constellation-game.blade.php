<x-header />
<div class="container">
    <h2 style="text-align: center; font-size: 50px; color: white;">Which constellation is this?</h2>
    <br>
    <div>
        <img src="/noname/{{ $constellation->image_name }}-noname.jpg" 
        style="display: block; margin-left: auto; margin-right: auto;" 
        width="600" height="400">
    </div>
    <div style="width: 300px; display: block; margin-left: auto; margin-right: auto;">
        {{-- <div class="col-sm"> --}}
            <br>
            <br>
            <form method="POST" action="/constellation-game/check">
                @csrf 
                {{-- <label style="font-size: 30px; color: white;">Your Answer:</label> --}}
                <input type="text" class="form-control" name="constellation_name" placeholder="Take a guess!" required>
                <input  type="hidden" name="constellation_id" value="{{ $constellation->id }}">
                <button type="submit" class="btn btn-dark" style="display: block; margin-left: auto;">Check</button>
            </form>
        {{-- </div> --}}
        {{-- <div class="col-sm">
            <br>
            <br>
            <form method="GET" action="/constellation-game">
                @csrf
                <button type="submit" class="btn btn-dark" style="float: left;">Next</button>
            </form>   
        </div> --}}
    </div>

</div>
<x-footer />