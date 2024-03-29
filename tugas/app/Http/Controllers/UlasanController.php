<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
class UlasanController extends Controller
{
    //
    public function index() {
        $ulasan = Ulasan::all();
        return view('admin.ulasan', compact('ulasan'));
    }

    public function ulasanSuccess() {
        return view('kirim_usulan');
    }

    public function addUlasan(Request $request) {


        $ulasan = new Ulasan();

        $ulasan->email = $request->email;
        $ulasan->name = $request->name;
        $ulasan->description = $request->description;
        


        $ulasan->save();

        return redirect(route('ulasan.terkirim'));

    }

    public function delete(Request $request) {

        $ulasan = Ulasan::find($request->id);
        $ulasan->delete();
        return redirect(route('ulasan.page'));
        
    }
}
