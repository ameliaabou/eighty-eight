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
            <img src="{{ asset('images/logo.png') }}" alt='Application Logo' width='36px'>
            <span class="fs-4">&nbsp;&nbsp; | &nbsp;&nbsp;eighty-eight</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/constellations" class="nav-link">Constellations</a></li>
            <li class="nav-item"><a href="/star-charts" class="nav-link">Star Charts</a></li>
            <li class="nav-item"><a href="/constellation-game" class="nav-link">Play Game</a></li>
            <li class="nav-item"><a href="/favorites" class="nav-link">Favorites</a></li>
            <li><form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="nav-item" :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
            </button>
            </form></li>
        </ul>
    </header>