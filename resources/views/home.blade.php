@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <section class="hero">
        <div class="container hero-grid">
            <div class="reveal in-view">
                <span class="eyebrow">// Tecnología del mañana, hoy</span>
                <h1>El futuro se <span class="grad">compra</span> en NEXUS TECH</h1>
                <p class="lead">
                    Laptops, wearables, audio y componentes de próxima generación,
                    seleccionados para creadores, gamers y makers que no aceptan promedios.
                </p>
                <div class="hero-actions">
                    <a href="{{ route('product.index') }}" class="btn btn-primary">Explorar catálogo</a>
                    <a href="{{ route('product.create') }}" class="btn btn-ghost">Vender un producto</a>
                </div>

                <div class="hero-stats">
                    <div class="stat">
                        <strong><span data-count="{{ $total }}">0</span>+</strong>
                        <span>Productos en catálogo</span>
                    </div>
                    <div class="stat">
                        <strong><span data-count="{{ count($categories) }}">0</span></strong>
                        <span>Categorías</span>
                    </div>
                    <div class="stat">
                        <strong><span data-count="24" data-suffix="/7">0</span></strong>
                        <span>Envío express</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual reveal in-view">
                <img src="{{ $featured[0]['image'] }}" alt="{{ $featured[0]['name'] }}">
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <span class="eyebrow">Selección</span>
                    <h2>Destacados de la semana</h2>
                </div>
                <a href="{{ route('product.index') }}" class="btn btn-ghost btn-sm">Ver todo el catálogo</a>
            </div>

            <div class="product-grid" data-reveal-group>
                @foreach ($featured as $product)
                    <a href="{{ route('product.show', $product['id']) }}" class="card reveal">
                        <div class="card-media">
                            <span class="card-cat">{{ $product['category'] }}</span>
                            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                        </div>
                        <div class="card-body">
                            <h3>{{ $product['name'] }}</h3>
                            <p>{{ $product['short'] }}</p>
                            <div class="card-footer">
                                <span class="price">${{ number_format($product['price'], 2) }}</span>
                                <span class="btn btn-ghost btn-sm">Ver más</span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-head reveal">
                <div>
                    <span class="eyebrow">Explora</span>
                    <h2>Por categoría</h2>
                </div>
            </div>
            <div class="chip-row reveal">
                @foreach ($categories as $category)
                    <a href="{{ route('product.index', ['category' => $category]) }}" class="chip">{{ $category }}</a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
