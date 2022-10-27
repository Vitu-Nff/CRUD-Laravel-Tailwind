<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($product = null) {
        if (!is_null($product)) {
            return view('products.show');
        } else {
            return redirect()->route('home');
        }
    }
}
