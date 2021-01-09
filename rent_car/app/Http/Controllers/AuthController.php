<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');

    }
    public function postLogin(Request $REQUEST)
    {
dd ('LOGIN OK')
    }
    public function getRegister()
    {
        return view('register');
    }
    
    public function postRegister(request $REQUEST)
    {
        dd ('REGISTRASI BERHASIL')
    }
}
