<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController
{
    /**
     * List cars
     */
    public function index()
    {
        return view('cars/list');
    }

    /**
     * Form create cars
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
           'model' => 'required|string|min:3'
        ]);
        $model = Cars::create([
            'name' => $request->input('name'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
        ]);
        return redirect()->back();
    }

    /**
     * @param int $id
     * @param Request $request
     */
    public function update (int $id, Request $request)
    {

    }

    /**
     * Show the cars
     * @param $id
     */
    public function show(int $id)
    {

    }

    /**
     * Delete cars
     * @param $id
     */
    public function delete(int $id)
    {

    }

}
