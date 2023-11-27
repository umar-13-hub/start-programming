<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $model = News::all();
        return view('home', [
            'news' => $model
        ]);
    }
    public function create(Request $request)
    {
        $news = News::create([
            'title' => $request->input('title'),
            'body' => $request->input('text'),
            'is_active' => $request->input('is_active'),
        ]);
    }

}
