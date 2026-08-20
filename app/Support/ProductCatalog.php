<?php

namespace App\Support;

class ProductCatalog
{
    /**
     * Catálogo base. En una siguiente iteración esto se reemplaza
     * por un modelo Eloquent + migración sin tocar los controladores.
     */
    protected static array $products = [
        [
            'id' => 1,
            'name' => 'NovaBook Pro 16',
            'category' => 'Laptops',
            'price' => 2499.99,
            'stock' => 12,
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Laptop insignia con procesador de última generación y pantalla OLED 4K.',
            'description' => 'La NovaBook Pro 16 combina un chasis de aluminio aeroespacial con un procesador de 12 núcleos, 32GB de RAM y una pantalla OLED 4K de 16". Diseñada para creadores y desarrolladores que exigen máximo rendimiento sin sacrificar portabilidad.',
            'specs' => ['CPU 12-core · 4.8GHz', '32GB RAM DDR5', '1TB SSD NVMe', 'Pantalla OLED 4K · 16"', 'Batería 20h'],
        ],
        [
            'id' => 2,
            'name' => 'Quantum Phone X',
            'category' => 'Smartphones',
            'price' => 1299.00,
            'stock' => 30,
            'image' => 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Smartphone flagship con cámara triple de 200MP y carga ultra rápida.',
            'description' => 'El Quantum Phone X integra un sensor principal de 200MP, chip neuronal de última generación y pantalla AMOLED LTPO a 144Hz. Resistencia IP68 y carga inalámbrica de 65W.',
            'specs' => ['Pantalla AMOLED 144Hz', 'Cámara 200MP', '256GB almacenamiento', '5G / WiFi 7', 'Carga 65W'],
        ],
        [
            'id' => 3,
            'name' => 'AuraBuds Elite',
            'category' => 'Audio',
            'price' => 249.99,
            'stock' => 60,
            'image' => 'https://images.unsplash.com/photo-1590658268037-6bf12165a8df?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Audífonos inalámbricos con cancelación de ruido adaptativa.',
            'description' => 'Sonido espacial, cancelación de ruido activa adaptativa y hasta 32 horas de batería con estuche de carga. Resistentes al sudor y al agua (IPX4).',
            'specs' => ['ANC adaptativo', 'Audio espacial', '32h de batería total', 'IPX4', 'Carga inalámbrica'],
        ],
        [
            'id' => 4,
            'name' => 'ChronoFit Vortex',
            'category' => 'Wearables',
            'price' => 399.50,
            'stock' => 45,
            'image' => 'https://images.unsplash.com/photo-1544117519-31a4b719223d?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Smartwatch con monitoreo de salud avanzado y GPS dual.',
            'description' => 'Pantalla AMOLED siempre activa, GPS de doble frecuencia, sensor de oxígeno en sangre y hasta 10 días de autonomía. Compatible con iOS y Android.',
            'specs' => ['AMOLED always-on', 'GPS dual-band', 'SpO2 + ECG', '10 días de batería', '5ATM resistencia al agua'],
        ],
        [
            'id' => 5,
            'name' => 'SpectraDeck Mechanical',
            'category' => 'Componentes',
            'price' => 179.00,
            'stock' => 25,
            'image' => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Teclado mecánico hot-swap con retroiluminación RGB por tecla.',
            'description' => 'Switches hot-swappable, cuerpo de aluminio CNC, retroiluminación RGB individual por tecla y conectividad tri-modo (cable, 2.4GHz, Bluetooth).',
            'specs' => ['Switches hot-swap', 'RGB por tecla', 'Tri-modo inalámbrico', 'Cuerpo de aluminio CNC', 'Software de macros'],
        ],
        [
            'id' => 6,
            'name' => 'VoidMouse Pulse',
            'category' => 'Componentes',
            'price' => 89.99,
            'stock' => 40,
            'image' => 'https://images.unsplash.com/photo-1527814050087-3793815479db?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Mouse gamer ultraligero con sensor óptico de 32.000 DPI.',
            'description' => 'Chasis de 58 gramos, sensor óptico de 32.000 DPI, switches ópticos de 80 millones de clics y polling rate de 8.000Hz.',
            'specs' => ['32.000 DPI', '58g de peso', 'Switches ópticos', 'Polling 8.000Hz', 'Batería 70h'],
        ],
        [
            'id' => 7,
            'name' => 'HoloView VR One',
            'category' => 'Wearables',
            'price' => 799.00,
            'stock' => 15,
            'image' => 'https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Visor de realidad mixta con paso de video 4K por ojo.',
            'description' => 'Realidad mixta con passthrough a color 4K por ojo, seguimiento ocular y de manos sin controles, y chip dedicado de renderizado espacial.',
            'specs' => ['4K por ojo', 'Passthrough a color', 'Eye + hand tracking', 'Audio espacial integrado', '2h de autonomía'],
        ],
        [
            'id' => 8,
            'name' => 'PulseHub Monitor 34"',
            'category' => 'Componentes',
            'price' => 649.00,
            'stock' => 18,
            'image' => 'https://images.unsplash.com/photo-1616763355603-9755a640a287?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Monitor ultrawide curvo 165Hz con calibración HDR de fábrica',
            'description' => 'Panel QD-OLED de 34" curvo, 165Hz, HDR calibrado de fábrica y USB-C con 96W de carga para tu laptop en un solo cable.',
            'specs' => ['QD-OLED 34" curvo', '165Hz / 0.03ms', 'HDR calibrado', 'USB-C 96W', 'Altura ajustable'],
        ],
        [
            'id' => 9,
            'name' => 'SkyDrift Aero 4K',
            'category' => 'Componentes',
            'price' => 1099.00,
            'stock' => 10,
            'image' => 'https://images.unsplash.com/photo-1473968512647-3e447244af8f?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Dron 4K plegable con evasión de obstáculos en 360°.',
            'description' => 'Cámara 4K estabilizada en gimbal de 3 ejes, sensores de evasión de obstáculos en 360° y 45 minutos de vuelo por batería.',
            'specs' => ['Cámara 4K/60fps', 'Gimbal 3 ejes', 'Evasión 360°', '45min de vuelo', 'Alcance 15km'],
        ],
        [
            'id' => 10,
            'name' => 'ArcadeCore S1',
            'category' => 'Gaming',
            'price' => 599.00,
            'stock' => 14,
            'image' => 'https://images.unsplash.com/photo-1486401899868-0e435ed85128?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Consola de nueva generación con trazado de rayos en tiempo real.',
            'description' => 'GPU dedicada con ray-tracing en tiempo real, SSD ultrarrápido de 2TB y soporte para juegos en 4K/120fps. El centro de tu sala de juegos futurista.',
            'specs' => ['Ray-tracing en tiempo real', 'SSD NVMe 2TB', '4K a 120fps', 'Audio 3D', 'Modo silencioso'],
        ],
        [
            'id' => 11,
            'name' => 'NightPad Vortex',
            'category' => 'Gaming',
            'price' => 79.99,
            'stock' => 55,
            'image' => 'https://images.unsplash.com/photo-1607853202273-797f1c22a38e?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Control inalámbrico con gatillos hápticos adaptativos.',
            'description' => 'Gatillos hápticos adaptativos, joysticks con sensores de efecto Hall (sin drift) y 40 horas de batería. Compatible con PC, consola y móvil.',
            'specs' => ['Gatillos hápticos', 'Joysticks Hall-effect', '40h de batería', 'Tri-plataforma', 'Vibración de precisión'],
        ],
        [
            'id' => 12,
            'name' => 'RTX Fusion 4090 Ti',
            'category' => 'Componentes',
            'price' => 1899.00,
            'stock' => 8,
            'image' => 'https://images.unsplash.com/photo-1591405351990-4726e331f141?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Tarjeta gráfica de gama alta para 4K extremo y creación 3D.',
            'description' => '24GB de memoria GDDR6X, arquitectura de nueva generación con núcleos dedicados a IA y ray-tracing, y sistema de refrigeración de triple ventilador.',
            'specs' => ['24GB GDDR6X', 'Ray-tracing dedicado', 'Núcleos IA', 'Triple ventilador', 'PCIe 5.0'],
        ],
        [
            'id' => 13,
            'name' => 'Obscura Z Mirrorless',
            'category' => 'Cámaras',
            'price' => 2199.00,
            'stock' => 9,
            'image' => 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Cámara mirrorless full-frame con video 8K y AI-autofocus.',
            'description' => 'Sensor full-frame de 61MP, grabación de video interna en 8K, autofocus con seguimiento por IA y estabilización de imagen de 8 pasos.',
            'specs' => ['Sensor full-frame 61MP', 'Video interno 8K', 'Autofocus con IA', 'Estabilización 8 pasos', 'Doble slot de tarjeta'],
        ],
        [
            'id' => 14,
            'name' => 'AeroTab Slate 12',
            'category' => 'Tablets',
            'price' => 899.00,
            'stock' => 20,
            'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Tablet profesional con lápiz de baja latencia y pantalla mini-LED.',
            'description' => 'Pantalla mini-LED de 12.9" con 1000 nits de brillo, chip de nueva generación para edición 4K en movimiento y lápiz óptico de 2ms de latencia.',
            'specs' => ['Mini-LED 12.9"', '1000 nits', 'Lápiz 2ms de latencia', 'Edición 4K', '12h de batería'],
        ],
        [
            'id' => 15,
            'name' => 'SonicWave Studio',
            'category' => 'Audio',
            'price' => 349.00,
            'stock' => 22,
            'image' => 'https://images.unsplash.com/photo-1546435770-a3e426bf472b?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Altavoz inteligente de estudio con sonido envolvente 360°.',
            'description' => 'Sonido envolvente 360° con calibración automática por IA según la acústica del cuarto, control por voz y conectividad multi-room.',
            'specs' => ['Sonido 360°', 'Calibración por IA', 'Control por voz', 'Multi-room', 'Acabado en aluminio'],
        ],
        [
            'id' => 16,
            'name' => 'PowerCore Nomad 20K',
            'category' => 'Componentes',
            'price' => 129.00,
            'stock' => 50,
            'image' => 'https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1000&q=80',
            'short' => 'Batería portátil de carga ultrarrápida con pantalla de estado.',
            'description' => '20.000mAh con carga bidireccional de 100W, pantalla OLED de estado en tiempo real y carcasa de aluminio resistente a impactos.',
            'specs' => ['20.000mAh', 'Carga bidireccional 100W', 'Pantalla OLED de estado', 'Carcasa de aluminio', '3 puertos USB-C'],
        ],
    ];

    public static function all(): array
    {
        return static::$products;
    }

    public static function find(int $id): ?array
    {
        foreach (static::$products as $product) {
            if ($product['id'] === $id) {
                return $product;
            }
        }

        return null;
    }

    public static function categories(): array
    {
        return collect(static::$products)
            ->pluck('category')
            ->unique()
            ->values()
            ->all();
    }

    public static function featured(int $limit = 4): array
    {
        return array_slice(static::$products, 0, $limit);
    }

    public static function related(array $product, int $limit = 3): array
    {
        return collect(static::$products)
            ->where('category', $product['category'])
            ->where('id', '!=', $product['id'])
            ->take($limit)
            ->values()
            ->all();
    }
}
