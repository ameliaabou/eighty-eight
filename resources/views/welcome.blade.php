<x-header />

<div class="container" style="height:100vh">
    <h2 style="text-align: center; font-size: 50px; color: white;">Welcome, {{ Auth::user()->name }}.</h2>
    <br>
    <p style="text-align: center; font-size: 30px; color: white;">
        In contemporary astronomy, 88 constellations are recognized by the International Astronomical Union (IAU). Each constellation is a region of the sky, bordered by arcs of right ascension and declination. Together they cover the celestial sphere, with their boundaries adopted officially by the International Astronomical Union in 1928 and published in 1930. <br>
        <br>
        The ancient Sumerians, and later the Greeks (as recorded by Ptolemy), established most of the northern constellations in international use today. The constellations along the ecliptic are called the zodiac. When explorers mapped the stars of the southern skies, European astronomers proposed new constellations for that region, as well as ones to fill gaps between the traditional constellations. In 1922, the International Astronomical Union adopted three-letter abbreviations for 89 constellations, the modern list of 88 plus Argo. After this, Eugène Joseph Delporte drew up boundaries for each of the 88 constellations so that every point in the sky belonged to one constellation.
    </p>
</div>

<x-footer />