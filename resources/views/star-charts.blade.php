<x-header />

    <div class="container">
        <div style="text-align: center; font-weight: bold;">
            <h2 style="text-align: center; font-size: 50px; color: white;">Monthly Star Charts</h2>
            <h3 style="color: white;">(Northern Hemisphere)</h3>            
        </div>
        <div class="row" style="color: black; font-size: 20px; margin-top: 20px">
            <div class="card" style="background-color: rgba(255,255,255,.3)">
                <h3>What is a star chart?</h3>
                <p>
                    A star chart or star map, also called a sky chart or sky map, is a map of the night sky. Astronomers divide these into grids to use them more easily. They are used to identify and locate constellations and astronomical objects such as stars, nebulae, and galaxies. They have been used for human navigation since time immemorial. Note that a star chart differs from an astronomical catalog, which is a listing or tabulation of astronomical objects for a particular purpose. Tools utilizing a star chart include the astrolabe and planisphere.
                </p>
                <h3>How do I use one?</h3>
                <p>
                    Since the sky is above our heads, your star chart is designed to be held overhead when you read it. The point directly overhead is called the Zenith and can be found in the center of the chart. The outer edge of a circular map represents the horizon. To use the map, make sure you are facing the right direction. Turn the map in your hands such that ‘N’ on the map is oriented towards the north. You’ll see that East and West in the map are the exact opposite of what we have here on Earth, which is because Earth maps are designed to be put on the ground whereas your star chart is to be held up in the sky.
                </p>
                <p>
                    A good way to start to read a star chart is to identify the bigger, brighter stars and constellations. You can try starting your search with the Big Dipper- the group of seven bright stars in the constellation Ursa Major. Once you locate it in the night sky, try spotting it on your star chart. When you’ve found it, orientate the chart so that it matches your view of the night sky. From there, the Big Dipper can be used as your anchor to come back to if you get lost, and it’s a great jumping-off point to see other stars. Remember, the chart only shows naked eye objects but if you suffer from light pollution you may not be able to see everything on it. Keep in mind too that you’ll need your night vision intact to see the sky chart effectively, so only do so with a red flashlight.
                </p>
            </div>
        </div>
        <br><br>
        <div>
            @foreach ($starcharts as $starchart)
                {{-- TODO: do this implicitly --}}
                    <div class="row" style="margin-bottom: 20px">
                        <div class="card" style="background-color: rgba(255,255,255,.6)">
                        <div class="col-md" style="text-align: center;">
                            <h2>{{ $starchart->month }}</h2>
                            <img src="/star_charts/{{ $starchart->image_name }}.png" width="400" height="400" style="display: block; margin-left: auto; margin-right: auto;">
                            <br>
                            <div>
                                <a href="/star_charts/{{ $starchart->download_bw }}.pdf" download>Download (B&W)</a>
                                &nbsp;|&nbsp;
                                <a href="/star_charts/{{ $starchart->download_c }}.pdf" download>Download (Color)</a>
                            </div>
                        </div>
                        <div class="col-md">
                            <h4>What's 'up' in {{ $starchart->month }}?</h4>
                            <p>
                                {{ $starchart->details }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<x-footer />