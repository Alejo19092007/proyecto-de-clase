<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $products = ProductCatalog::all();

        if ($category) {
            $products = array_values(array_filter(
                $products,
                fn ($product) => $product['category'] === $category
            ));
        }

        return view('product.index', [
            'products' => $products,
            'categories' => ProductCatalog::categories(),
            'activeCategory' => $category,
        ]);
    }

    public function create()
    {
        return view('product.create', [
            'categories' => ProductCatalog::categories(),
        ]);
    }

    public function show(int $idProduct)
    {
        $product = ProductCatalog::find($idProduct);

        abort_unless($product, 404);

        return view('product.show', [
            'product' => $product,
            'related' => ProductCatalog::related($product),
        ]);
    }
}
