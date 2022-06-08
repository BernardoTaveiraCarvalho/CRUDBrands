<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car = Car::orderBy('id','asc')->paginate(10);
        return view('pages.cars.index',['car'=>$car ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brand = Brand::all();
        return view('pages.cars.create',['brand'=>$brand]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'registration' => 'required',
            'year_of_manufacture' => 'required',
            'color' =>'required',
            'brand_id' =>'required',
        ]);

        Car::create([
            'registration' => $request->registration,
            'year_of_manufacture' => $request->year_of_manufacture,
            'color' => $request->color,
            'brand_id'=>$request->brand_id,
        ]);
        /*Player::create($request->all());*/
        return redirect('cars')->with('status','Item created!');
    }


    public function show(Car $car)
    {
        return view('pages.cars.show',['car'=>$car]);
    }

    public function edit(Car $car)
    {
        $brand = Brand::all();
        return view('pages.cars.edit',['car'=>$car,'brand'=>$brand]);
    }


    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        return redirect('cars')->with('status','Item edited successfully!');
    }


    public function destroy(Car $car)
    {
        try {
            $car = Car::findOrFail($car->id);
            $car->delete();
            return redirect('cars')->with('status','Item deleted successfully!');;
        } catch(ModelNotFoundException $e){
            return redirect('cars')->with('status','Item not deleted successfully!');;
        }
    }
}
