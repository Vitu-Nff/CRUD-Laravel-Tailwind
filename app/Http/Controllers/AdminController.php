<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.index',compact('products'));
    }

    public function edit($productId = null)
    {
        if (!is_null($productId)) {
            return view('admin.edit');
        } else {
            return redirect()->route('admin.index');
        }
    }
}
