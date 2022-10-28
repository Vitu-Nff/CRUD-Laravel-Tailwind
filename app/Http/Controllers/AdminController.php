<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

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

    public function delete($productId = null)
    {
        if (!is_null($productId)) {
            //DB::table('products')->where('id', '=' , $productId)->delete();
            Log::info($productId);
        } else {
            return view('admin.index');
        }
    }


}
