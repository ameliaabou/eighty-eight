<x-header />

    <div class="container">
        <h2 style="text-align: center; font-size: 50px; color: white;">The 88 Officially Recognized Constellations</h2>
        <hr>
        <div class="row">
            @foreach ($constellations as $constellation)
                <div class="col" style="margin-bottom: 20px">
                    <div class="card" style="width: 302px;">
                        <a href="/constellation/{{ $constellation->id }}"><img src="/images/{{ $constellation->image_name }}.jpg" width="300" height="200"></a>
                        <label class="h4" style="text-align: center;">{{ $constellation->alias }}</label>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<x-footer />