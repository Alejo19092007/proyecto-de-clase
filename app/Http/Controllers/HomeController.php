<?php

namespace App\Http\Controllers;

use App\Support\ProductCatalog;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'featured' => ProductCatalog::featured(4),
            'categories' => ProductCatalog::categories(),
            'total' => count(ProductCatalog::all()),
        ]);
    }
}
