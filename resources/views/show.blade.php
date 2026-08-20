@extends('layouts.app')

@section('title', $product['name'])

@section('content')
    <section class="section">
        <div class="container">
            <a href="{{ route('product.index') }}" class="btn btn-ghost btn-sm" style="margin-bottom: 32px;">&larr; Volver al catálogo</a>

            <div class="detail-grid">
                <div class="detail-media reveal in-view">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                </div>

                <div class="detail-info reveal in-view">
                    <span class="eyebrow">{{ $product['category'] }}</span>
                    <h1>{{ $product['name'] }}</h1>
                    <p class="text-dim">{{ $product['description'] }}</p>

                    <div class="detail-price">${{ number_format($product['price'], 2) }}</div>

                    @if (! empty($product['specs']))
                        <ul class="spec-list">
                            @foreach ($product['specs'] as $spec)
                                <li>{{ $spec }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <p class="stock-note">{{ $product['stock'] }} unidades disponibles</p>
                </div>
            </div>

            @if (count($related))
                <div class="section-head reveal" style="margin-top: 70px;">
                    <div>
                        <span class="eyebrow">También te puede interesar</span>
                        <h2>Más en {{ $product['category'] }}</h2>
                    </div>
                </div>

                <div class="product-grid" data-reveal-group>
                    @foreach ($related as $item)
                        <a href="{{ route('product.show', $item['id']) }}" class="card reveal">
                            <div class="card-media">
                                <span class="card-cat">{{ $item['category'] }}</span>
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
                            </div>
                            <div class="card-body">
                                <h3>{{ $item['name'] }}</h3>
                                <p>{{ $item['short'] }}</p>
                                <div class="card-footer">
                                    <span class="price">${{ number_format($item['price'], 2) }}</span>
                                    <span class="btn btn-ghost btn-sm">Ver detalle</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
