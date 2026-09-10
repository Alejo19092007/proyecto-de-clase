<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $listaDeProductos = Product::all();

        return view('product.index', compact('listaDeProductos'));
    }

    public function create()
    {
        //id //name //precio //descripcion //categoria
        return view('product.create');
    }

    public function show($idProduct)
    {
        //id //name //precio //descripcion //categoria
        return view('product.show');
    }
}
