<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
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
