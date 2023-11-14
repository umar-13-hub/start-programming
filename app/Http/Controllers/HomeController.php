<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function cars(Request $request)

    {
        $cars = Items::create([
            'name' => $request->input('bmw'),
            'price' => $request->input('200000'),
            'year' => $request->input('2006'),
            'colour' => $request->input('white'),
            'speed' => $request->input('360'),
        ]);

    }

    public function create (Request $request)
    {
        $model = new Items();
        $model->name = $request->input('name');
        $model->price = $request->input('price');
        $model->year = $request->input('price');
        $model->colour = $request->input('colour');
        $model->speed = $request->input('speed');
        $model->save();
    }
}
