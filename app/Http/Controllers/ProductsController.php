<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    public function show($product = null) {
        if (!is_null($product)) {
            $item = Product::find($product);
            return view('products.show', compact('item'));
        } else {
            return Redirect::Route('home');
        }
    }
}
