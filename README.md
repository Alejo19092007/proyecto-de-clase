<p align="center">
  <img src="docs/img/autor.jpg" alt="Alejandro Jimenez" width="120" style="border-radius: 50%;">
</p>

<h1 align="center">NEXUS TECH</h1>
<p align="center">Ecommerce de tecnología con diseño futurista, construido en Laravel como proyecto de clase.</p>

---

## Sobre el proyecto

**NEXUS TECH** es una tienda en línea de productos tecnológicos (laptops, smartphones, audio, wearables, gaming, cámaras, tablets y componentes) con una interfaz oscura y futurista: degradados neón, animaciones al hacer scroll, efecto ken-burns en las imágenes y microinteracciones en las tarjetas de producto.

Es un proyecto académico enfocado en el manejo de rutas, controladores y vistas de Laravel (Blade), sin base de datos: el catálogo vive en una clase de datos estática y es fácilmente migrable a un modelo Eloquent más adelante.

## Autor

**Alejandro Jimenez**
📧 alejoji1909@gmail.com

## Tecnologías

- [Laravel](https://laravel.com) 12
- PHP 8.2+
- Blade (motor de plantillas)
- CSS puro (sin frameworks) — [`public/styles.css`](public/styles.css)
- JavaScript vanilla para animaciones — [`public/app.js`](public/app.js)
- Google Fonts: Orbitron + Rajdhani

## Rutas principales

| Método | Ruta              | Descripción                          |
|--------|-------------------|---------------------------------------|
| GET    | `/`                | Landing del ecommerce                 |
| GET    | `/product`         | Catálogo de productos (con filtro por categoría) |
| GET    | `/product/create`  | Formulario para publicar un producto  |
| GET    | `/product/{id}`    | Detalle de un producto                |

## Instalación y uso local

```bash
# instalar dependencias
composer install

# copiar variables de entorno y generar clave de app
cp .env.example .env
php artisan key:generate

# levantar el servidor de desarrollo
php artisan serve
```

Luego abre [http://127.0.0.1:8000](http://127.0.0.1:8000) en el navegador.

## Estructura relevante

```
app/Http/Controllers/HomeController.php     → landing
app/Http/Controllers/ProductController.php  → catálogo, detalle y formulario
app/Support/ProductCatalog.php              → catálogo de productos (datos estáticos)
resources/views/                            → vistas Blade (home, index, show, create)
resources/views/layouts/app.blade.php       → layout base (header, marquee, footer)
public/styles.css                           → estilos futuristas
public/app.js                               → animaciones (scroll-reveal, contadores)
```
