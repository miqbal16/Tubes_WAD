<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function index() {
        $order = Product::all();
        return view('admin.order', compact('order'));
    }

    public function prosesOrder($id) {
        $order = Product::find($id);

        if($order->stock == 0) {
            return redirect(route('order.page'));    
        }

        return view('admin.proses_order', compact('order'));
    }

    public function buy(Request $request) {
        
        $order = new Order();
        $produk = Product::find($request->product_id);

        $order->buyer_name = $request->buyer_name;
        $order->buyer_contact = $request->buyer_contact;
        $order->product_id = $produk->id;
        $order->amount = $produk->price;

        $produk->stock = $produk->stock - $request->quantity;

            
        $produk->save();
        $order->save();

        return redirect(route('order.page'));

    }

    public function history() {
        $order = Order::all();
        $produk = Product::all();
        return view('admin.history', compact('order'), compact('produk'));
    }

}
