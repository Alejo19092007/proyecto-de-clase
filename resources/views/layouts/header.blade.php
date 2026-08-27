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
