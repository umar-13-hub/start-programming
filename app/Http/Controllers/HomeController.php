<?php

namespace App\Http\Controllers;


use App\Models\Cars;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $model = Cars::all();
        return view('home', [
            'cars' => $model
        ]);
    }

    public function create(Request $request)

    {
        $cars = Cars::create([
            'name' => $request->input('bmw'),
            'price' => $request->input('200000'),
            'year' => $request->input('2006'),
            'colour' => $request->input('white'),
            'speed' => $request->input('320'),
        ]);

    }
}
