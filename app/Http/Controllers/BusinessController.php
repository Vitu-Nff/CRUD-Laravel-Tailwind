<?php

namespace App\Http\Controllers;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {

        $businesses = Business::all();
       // dd($businesses);

        $business = Business::find(1);
       // dd($business);

        $businessWhere = Business::where('name', 'Jenkins Group')->get();

        $businessWhereFirst = Business::where('name', 'Jenkins Group')->first();

        dd($businessWhereFirst, $businessWhere, $business, $businesses);

    }
}
