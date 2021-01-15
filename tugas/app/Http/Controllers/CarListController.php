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

    public function carHome() {
        $car = Car::all();
        return view('/', compact('car'));
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


         $txt = "";

           if ($request->hasFile('file_img')) {
            
            $image = $request->file('file_img');
            $teaser_image = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img_car');
            $image->move($destinationPath, $teaser_image);
            
            $car = new Car();

            $car->name = $request->name_product;
            $car->price = $request->price;
            $car->description = $request->description;
            $car->isi_penumpang = $request->isi_penumpang;
            $car->pintu = $request->pintu;
            $car->status= $request->status;
            $car->no_polisi= $request->no_polisi;
            $car->tahun= $request->tahun;
            
            $car->img_path = $teaser_image;
            $car->save();
                       
                return redirect(route('carList.carPage'));
            
        } else {

    return redirect(route('carList.addCar', ['txt' => $txt]));
    }
    

    }

    public function delete(Request $request) {

        $car = Car::find($request->id);
        $car->delete();
        return redirect(route('carList.carPage'));
        
    }

    public function update($id, Request $request) {
        
        $txt = "";

        $car = Car::find($id);

        $car->name = $request->name_product;
        $car->price = $request->price;
        $car->description = $request->description;
        $car->isi_penumpang = $request->isi_penumpang;
        $car->pintu = $request->pintu;
        $car->status= $request->status;
        $car->no_polisi= $request->no_polisi;
        $car->tahun= $request->tahun;

        if($request->file('file_img') == "")
    	{
    		$car->img_path=$car->img_path;

    	}
    	else
    	{

            $image = $request->file('file_img');
            $teaser_image = $car->img_path;
            $destinationPath = public_path('/img_car');
            $image->move($destinationPath, $teaser_image);
	   	    $car->img_path = $teaser_image;
       }
       
    	$car->save(); 
       
        return redirect(route('carList.carPage'));

 }

 

}
