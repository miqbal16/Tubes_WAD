<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function data()
    {
        $products = \DB::table('products')->get();
        return view('admin.product.data', compact('products'));
    }

}
