<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Order;
use App\Models\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect(route('index.index'));
    }

    
        public function bayar(Request $req)
    {
       

        $car = Car::find($req->name_car);

        $name = $req->input('name');
        $email = $req->input('email');
        $id_car = $req->input('name_car');
        $keterangan = $req->input('keterangan');
        $mulai = $req->input('mulai');
        $kembali = $req->input('kembali');
        $no_hp = $req->input('no_hp');
        $name_car = $car->name;
        $status_car = $car->status;
        $no_polisi = $car->no_polisi;
        
        $date1 = strtotime($mulai);
        $date2 = strtotime($kembali);
        $rangeDay = $date2 - $date1;
        $day = round($rangeDay / (60 * 60 * 24));
        $harga = $car->price * $day;
        $tahun_kendaraan = $car->tahun;

            return view('home',[
                'name' => $name,
                'email' => $email,
                'id_car' => $id_car,
                'keterangan' => $keterangan,
                'mulai' => $mulai,
                'kembali' => $kembali,
                'no_hp' => $no_hp,
                'name_car' => $name_car,
                'status_car' => $status_car,
                'no_polisi' => $no_polisi,
                'harga' => $harga,
                'tahun_kendaraan' => $tahun_kendaraan
            ]);
        

        
    
    }
    
    public function saveDataOrder(Request $request) {
     

        $order = new Order();

        $order->name = $request->name;
        $order->email = $request->email;
        $order->id_car = $request->id_car;
        $order->alamat = $request->keterangan;
        $order->mulai = $request->mulai;
        $order->kembali = $request->kembali;
        $order->no_hp = $request->no_hp;
        $order->name_car = $request->name_car;
        $order->status_car = $request->status_car;
        $order->no_polisi = $request->no_polisi;
        $order->total = $request->harga;
        $order->pembayaran = $request->pembayaran;
        $order->status_pembayaran = "Belum Bayar";
        $order->tahun_kendaraan = $request->tahun_kendaraan; 
        $order->save();
        $price = $request->harga;
        if($request->pembayaran == "Bayar Tunai") {
            return view('bayar_ditempat', ["price" => $price]);
        }else {
            return view('virtual_number',["price" => $price]);
        }

    }


    public function ListOrder() {
        $order = Order::all();
        return view('admin.history', compact('order'));
    }

   

}
