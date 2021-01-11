<?php

namespace App\Http\Controllers;
use App\Models\Akunuser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
   
    public function register(Request $request) {

        // $photo = $request->file_img->file();
        // $request->file_img->move(public_path('img/upload'), $photo);

        $Akunuser = new Akunuser();

        $Akunuser->name = $request->name;
        $Akunuser->email = $request->email;
        $Akunuser->password = $request->password;
        $Akunuser->passwordconfirmation = $request->passwordconfirmation;
        
        // $produk->img_path = $photo;


        $Akunuser->save();


        return redirect(route('halamanlogin.login'));

    }
    public function halamanutama() {
        return view('index');
    }
    public function halamanregister() {
        return view('register');
    }
    public function halamanlogin() {
        return view('login');
    }
}

