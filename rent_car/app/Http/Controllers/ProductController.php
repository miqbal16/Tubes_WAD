<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function productPage() {
        $product = Product::all();
        return view('admin.product', compact('product'));
    }

    public function insertProductpage() {
        return view('admin.insert_product');
    }

    public function updateProductPage($id) {
        $product = Product::find($id);
        return view('admin.update_product', compact('product'));
    }

    public function storeProduct(Request $request) {

        // $photo = $request->file_img->file();
        // $request->file_img->move(public_path('img/upload'), $photo);

        $produk = new Product();

        $produk->name = $request->name_product;
        $produk->price = $request->price;
        $produk->description = $request->description;
        $produk->isi_penumpang = $request->isi_penumpang;
        $produk->pintu = $request->pintu;
        $produk->status= $request->status;
        $produk->no_polisi= $request->no_polisi;
        $produk->tahun= $request->tahun;
        // $produk->img_path = $photo;


        $produk->save();


        return redirect(route('product.productPage'));

    }

    public function delete(Request $request) {

        $produk = Product::find($request->id);
        $produk->delete();
        return redirect(route('product.productPage'));
        
    }

    public function update($id, Request $request) {
        $produk = Product::find($id);
        $produk->name = $request->input('name_product');
        $produk->price = $request->input('price');
        $produk->description = $request->input('description');
        $produk->isi_penumpang = $request->input('isi_penumpang');
        $produk->pintu = $request->input('pintu');
        $produk->status= $request->input('status');
        $produk->no_polisi= $request->input('no_polisi');
        $produk->tahun= $request->input('tahun');
        $produk->img_path= $request->input('file_img');

        $produk->save();

        return redirect(route('product.productPage'));

    }


}
