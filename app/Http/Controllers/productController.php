<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        return "Listado de productos";
    } 
    
    public function create()
    {
        return "Formulario para crear un producto";
    }

    public function show($idProduct)
    {
        return "Detalle del producto: $idProduct"; 
    }
}

   
