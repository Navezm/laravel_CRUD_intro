<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $dbCars = Car::all();
        return view('welcome', compact('dbCars'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $newEntry = new Car;
        $newEntry->name = $request->name;
        $newEntry->year = $request->year;
        $newEntry->save();
        return redirect()->back();
    }
}
