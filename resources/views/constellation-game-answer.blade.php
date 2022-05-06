<x-header />

<div class="container">
    @if($guess === str_replace('_', ' ', $constellation->image_name))
    <h2 style="text-align: center; font-size: 50px; color: white;">Correct!</h2>
    @else
    <h2 style="text-align: center; font-size: 50px; color: white;">Incorrect</h2>
    <h3 style="text-align: center; color: white;">Your Guess: {{ $guess }}</h3>
    @endif
    <br>
    <div>
        <img src="/images/{{ $constellation->image_name }}.jpg" 
        style="display: block; margin-left: auto; margin-right: auto;" 
        width="600" height="400">
    </div>
    <div style="width: 300px; display: block; margin-left: auto; margin-right: auto;">
        <br>
        <br>
        <form method="GET" action="/constellation-game">
            @csrf
            <button type="submit" class="btn btn-dark" style="width: 100px; display: block; margin-left: auto; margin-right: auto;">Next</button>
        </form>
    </div>
</div>

<x-footer />