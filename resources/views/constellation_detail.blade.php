<x-header />

    <div class="container">
        <div style="font-weight: bold; color: white;">{{ Auth::user()->name }} {{ Auth::user()->id }}</div>
        <h2 style="text-align: center; font-weight: bold; color: white;">
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
            </p>
        </div>

        <div class="card" style="background-color: rgba(255,255,255,.7)">
            <label class="h4" style="font-weight: bold; margin: 5px;">Details:</label>
            <p style="font-size: 20px; margin: 5px;">
                {{ $constellation->details }}
            </p>
            <label class="h4" style="font-weight: bold; margin: 5px;">Mythological Connections:</label>
            <p style="font-size: 20px; margin: 5px;">
                {{ $constellation->myth }}
            </p>            
        </div>
    </div>

<x-footer />