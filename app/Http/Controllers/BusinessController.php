<?php

namespace App\Http\Controllers;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $business = Business::find(1);
//        $business->name = 'Tiago';
//        $business->email = 'tiago@laravel.com.br';
//        $business->address = 'Rua Às, N 27';
//        $business->save();
        dd($business);
    }
}
