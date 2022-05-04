<!-- View stored in resources/views/greeting.blade.php -->
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;700&display=swap" rel="stylesheet">
    <link href=".">
</head>
{{-- style='background-image: url("/images/background-1.png") background-size: auto;' --}}
<body style="font-family: 'Manrope', sans-serif; background-image: url(/images/background-1.png)">
    <!-- Header Block -->
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom" style="background-color: rgba(255,255,255,.7)">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">The Great 88</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/constellations" class="nav-link">Constellations</a></li>
            <li class="nav-item"><a href="/star-charts" class="nav-link">Star Charts</a></li>
            <li class="nav-item"><a href="/constellation-game" class="nav-link">Play Game</a></li>
            <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="/register" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>