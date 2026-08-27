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

    <header class="site-header">
        <div class="container header-inner">
            <a href="{{ route('home') }}" class="brand">NEXUS<span>TECH</span></a>

            <nav class="main-nav">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a>
                <a href="{{ route('product.index') }}" class="{{ request()->routeIs('product.index') ? 'active' : '' }}">Catálogo</a>
                <a href="{{ route('product.create') }}" class="{{ request()->routeIs('product.create') ? 'active' : '' }}">Vender</a>
            </nav>
        </div>
    </header>

    <div class="marquee" aria-hidden="true">
        <div class="marquee-track">
            @for ($i = 0; $i < 2; $i++)
                <span>🚀 <strong>Envío express</strong> en 24h</span>
                <span>🛡️ <strong>Garantía extendida</strong> de 2 años</span>
                <span>🔒 <strong>Pago 100% seguro</strong></span>
                <span>⚡ <strong>Nuevos lanzamientos</strong> cada semana</span>
                <span>🌐 <strong>Envíos</strong> a todo el mundo</span>
            @endfor
        </div>
    </div>

    <main class="site-main">
        <div class="container">
            @if (session('success'))
                <div class="flash-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <span class="brand small">NEXUS<span>TECH</span></span>
            <p>Ecommerce de tecnología del futuro, hoy. &copy; {{ date('Y') }}</p>
        </div>
    </footer>

    <script src="{{ asset('app.js') }}" defer></script>
</body>
</html>
