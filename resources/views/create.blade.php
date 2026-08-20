@extends('layouts.app')

@section('title', 'Vender un producto')

@section('content')
    <section class="section">
        <div class="container">
            <span class="eyebrow">Vender en NEXUS TECH</span>
            <h2 style="margin: 10px 0 8px;">Publica tu producto</h2>
            <p class="text-dim" style="max-width: 60ch; margin-bottom: 30px;">
                Completa la ficha técnica de tu producto tal como aparecerá en el catálogo.
            </p>

            <form class="form-card reveal in-view" method="GET" action="{{ route('product.create') }}">
                <div class="form-grid">
                    <div class="full">
                        <label for="name">Nombre del producto</label>
                        <input type="text" id="name" name="name" placeholder="Ej. NovaBook Pro 16" required>
                    </div>

                    <div>
                        <label for="category">Categoría</label>
                        <select id="category" name="category" required>
                            <option value="" disabled selected>Selecciona una categoría</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category }}">{{ $category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="price">Precio (USD)</label>
                        <input type="number" id="price" name="price" min="0" step="0.01" placeholder="0.00" required>
                    </div>

                    <div>
                        <label for="stock">Stock disponible</label>
                        <input type="number" id="stock" name="stock" min="0" placeholder="0" required>
                    </div>

                    <div>
                        <label for="image">URL de la imagen</label>
                        <input type="url" id="image" name="image" placeholder="https://..." required>
                    </div>

                    <div class="full">
                        <label for="short">Descripción corta</label>
                        <input type="text" id="short" name="short" maxlength="200" placeholder="Una línea que resuma el producto" required>
                    </div>

                    <div class="full">
                        <label for="description">Descripción completa</label>
                        <textarea id="description" name="description" placeholder="Detalles, especificaciones y beneficios del producto" required></textarea>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Publicar producto</button>
                </div>
            </form>
        </div>
    </section>
@endsection
