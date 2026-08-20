@extends('layouts.app')

@section('title', 'Catálogo')

@section('content')
    <section class="section">
        <div class="container">
            <div class="section-head reveal in-view">
                <div>
                    <span class="eyebrow">Catálogo completo</span>
                    <h2>Tecnología seleccionada</h2>
                </div>
            </div>

            <div class="chip-row reveal in-view">
                <a href="{{ route('product.index') }}" class="chip {{ ! $activeCategory ? 'active' : '' }}">Todos</a>
                @foreach ($categories as $category)
                    <a href="{{ route('product.index', ['category' => $category]) }}"
                       class="chip {{ $activeCategory === $category ? 'active' : '' }}">
                        {{ $category }}
                    </a>
                @endforeach
            </div>

            @if (count($products))
                <div class="product-grid" data-reveal-group>
                    @foreach ($products as $product)
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
                                    <span class="btn btn-ghost btn-sm">Ver detalle</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <h2>Sin resultados</h2>
                    <p class="text-dim">No hay productos en esta categoría todavía.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
