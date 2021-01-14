<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
class CarListController extends Controller
{
    //
    public function carList() {
        $car = Car::all();
        return view('admin.product', compact('car'));

    }

    public function adminPage(Request $request) {
        if ($request->admin == "admin@example.com") {
            return view('admin.home');
        }else {
            return view('/');
        }
    }


    public function carMenu1() {
        $car = Car::all();
        return view('/mobil_tanpa_supir', compact('car'));
    }

    public function carMenu2() {
        $car = Car::all();
        return view('/mobil_dengan_supir', compact('car'));
    }

    public function addCar() {
        return view('admin.insert_product');
    }

    public function updateCar($id) {
        $car = Car::find($id);
        return view('admin.update_product', compact('car'));
    }

    public function saveCar(Request $request) {

        // $photo = $request->file_img->file();
        // $request->file_img->move(public_path('img/upload'), $photo);

        // $car = new Car();

        // $car->name = $request->name_product;
        // $car->price = $request->price;
        // $car->description = $request->description;
        // $car->isi_penumpang = $request->isi_penumpang;
        // $car->pintu = $request->pintu;
        // $car->status= $request->status;
        // $car->no_polisi= $request->no_polisi;
        // $car->tahun= $request->tahun;
        // $car->img_path = $request->file_img;

        

        // $car->save();


         

           if ($request->hasFile('file_img')) {
            
            $image = $request->file('file_img');
            $teaser_image = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img_car');
            $image->move($destinationPath, $teaser_image);

            $myCar = Car::create([
                'name' => $request->get('name_product'),
                'price'  => $request->get('price'),
                'description'     => $request->get('description'),
                'isi_penumpang'   => $request->get('isi_penumpang'),
                'pintu'   => $request->get('pintu'),
                'status'   => $request->get('status'),
                'no_polisi'  => $request->get('no_polisi'),
                'tahun'   => $request->get('tahun'),
                   'img_path'       => $request->get('file_img') ?? null,
               ]);

                } else {

    return redirect(route('carList.addCar', ['txt' => $txt]));
    }
        

           return redirect(route('carList.carPage'));

    }

    public function delete(Request $request) {

        $car = Car::find($request->id);
        $car->delete();
        return redirect(route('carList.carPage'));
        
    }

    public function update($id, Request $request) {
        $car = Car::find($id);
        $car->name = $request->input('name_product');
        $car->price = $request->input('price');
        $car->description = $request->input('description');
        $car->isi_penumpang = $request->input('isi_penumpang');
        $car->pintu = $request->input('pintu');
        $car->status= $request->input('status');
        $car->no_polisi= $request->input('no_polisi');
        $car->tahun= $request->input('tahun');
        $car->img_path= $request->input('file_img');

        $car->save();

        

        return redirect(route('carList.carPage'));

    }

}
