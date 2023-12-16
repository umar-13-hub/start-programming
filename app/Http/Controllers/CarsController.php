<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use Illuminate\Http\Request;

class CarsController
{
    /**
     * List cars
     */
    public function index()
    {
        $cars = Cars::all();
        return view('cars/index', [
            'cars' => $cars
        ]);
    }

    /**
     * Form create car
     */
    public function create()
    {
        return view('cars/create');
    }

    /**
     * Store request in table
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|min:2',
           'model'=> 'required|string|min:1'
        ]);
        $model = Cars::create([
            'name'=> $request->input('name'),
            'model'=> $request->input('model'),
            'price'=> $request->input('price'),
            'is_active'=> $request->input('is_active')
        ]);
        return redirect()->back();
    }

    /**
     * @param int $id
     * @param Request $request
     */
    public function update(int $id, $request)
    {
        $model = Cars::find($id);
        if ($request->method()==='POST') {
            $this->updateStore($id, $request);
        }
        return view('cars/update', [
            'cars' => $model
        ]);
    }

    public function updateStore(int $id,Request $request)
    {

        return Cars::where('id', '=', $id)
            ->update([
                'name' => $request->input('name'),
                'model' => $request->input('model'),
                'price' => $request->input('price')
            ]);
    }


    /**
     * @param int $id
     * Show the car
     */
    public function show(int $id)
    {
        return view('cars/show', [
            'cars' => Cars::find($id)
        ]);

    }

    /**
     * Delete car
     * @param int $id
     * @return void
     */
    public function delete(int $id)
    {
        $model = Cars::destroy($id);
        return redirect()->route('index');

    }
}
