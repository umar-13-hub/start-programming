<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{

    public function index(Request $request)
    {
        $products = currency::all();
        return view('create-article', [
        'currency' => $products
            ]);
    }

    public function create()
    {
        return view('create-article');

    }

    public function store(Request $request)
    {
        $currency = Currency::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'price' => $request->input('price'),
            'is_active' => $request->input('is_active'),
        ]);
        return redirect()->back();
    }

}
