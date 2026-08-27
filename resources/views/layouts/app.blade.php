<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inicio') · NEXUS TECH</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700;900&family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="bg-fx" aria-hidden="true"></div>

    @include('layouts.header')

    <main class="site-main">
        <div class="container">
            @if (session('success'))
                <div class="flash-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </main>

    @include('layouts.footer')

    <script src="{{ asset('app.js') }}" defer></script>
</body>
</html>
