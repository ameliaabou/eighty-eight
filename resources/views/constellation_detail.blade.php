<x-header />

    <div class="container">
        <h2 style="text-align: center; font-size: 50px; color: white;">
            {{ $constellation->name }}, {{ $constellation->alias }}
        </h2>
        <div>
            <img src="/noname/{{ $constellation->image_name }}-noname.jpg" 
            style="display: block; margin-left: auto; margin-right: auto;" 
            width="600" height="400">
        </div>

        <div style="text-align: center;">
            <p>
                <label class="h4" style="color: white;">Hemisphere: {{ $constellation->hemisphere }}</label> <br>
                <label class="h4" style="color: white;">Season: {{ $constellation->season }}</label>
                <form method="POST" action="/add-to-favorites">
                    @csrf
                    <div class="form-group">
                        <input  type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input  type="hidden" name="constellation_id" value="{{ $constellation->id }}">
                        <button style="cursor:pointer" type="submit" class="btn btn-dark">Add to Favorites</button>
                    </div>
                </form>    
            </p>
        </div>

        <div class="row" style="margin-bottom: 20px">
        <div class="card" style="background-color: rgba(255,255,255,.7)">
            <label class="h4" style="font-weight: bold; font-size: 30px; margin: 5px;">Details:</label>
            <p style="font-size: 20px; margin: 5px;">
                {{ $constellation->details }}
            </p>
        </div>
        </div>
        <div class="row" style="margin-bottom: 20px">
        <div class="card" style="background-color: rgba(255,255,255,.7)">
            <label class="h4" style="font-weight: bold; font-size: 30px; margin: 5px;">Origin / Mythological Connections:</label>
            <p style="font-size: 20px; margin: 5px;">
                {{ $constellation->myth }}
            </p>      
        </div>
        </div>
    </div>

<x-footer />