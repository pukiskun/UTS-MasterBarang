<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    @php
        $currentRouteName = Route::currentRouteName();
    @endphp
    <nav class="navbar navbar-expand-md navbar-dark custom-gradient">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-archive-fill me-2"></i>Gudang
                Asik</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-md-none text-white-50">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('home') }}"
                            class="nav-link @if ($currentRouteName == 'home') active @endif">Home</a></li>
                    <li class="nav-item"><a href="{{ route('items.index') }}"
                            class="nav-link @if ($currentRouteName == 'items.index') active @endif">Storage</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @vite('resources/js/app.js')
</body>


</html>
