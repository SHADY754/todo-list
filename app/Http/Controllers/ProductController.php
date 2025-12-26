<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return response()->json([
            'status' => true,
            'data' => $products
        ], 200);
    }

    public function show(Products $product)
    {
        return response()->json([
            'status' => true,
            'data' => $product
        ], 200);
    }
}
