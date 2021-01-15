<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class index extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function carHome() {
        $car = Car::all();
        return view('index', compact('car'));
    }
}
