@extends('layouts.app')

@section('title', 'Catálogo')

@section('content')
    <section class="section">
        <div class="section-head reveal in-view">
            <div>
                <span class="eyebrow">Catálogo completo</span>
                <h2>Tecnología seleccionada</h2>
            </div>
        </div>

        <div class="product-grid" data-reveal-group>
            @foreach ($listaDeProductos as $producto)
                <a href="{{ route('product.show', $producto->id) }}" class="card reveal">
                    <div class="card-media">
                        <span class="card-cat">{{ $producto->category->name }}</span>
                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=1000&q=80"
                             alt="{{ $producto->name }}">
                    </div>
                    <div class="card-body">
                        <h3>{{ $producto->name }}</h3>
                        <p>{{ Str::limit($producto->description, 90) }}</p>
                        <div class="card-footer">
                            <span class="price">${{ number_format($producto->price, 2) }}</span>
                            <span class="btn btn-ghost btn-sm">Ver detalle</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
