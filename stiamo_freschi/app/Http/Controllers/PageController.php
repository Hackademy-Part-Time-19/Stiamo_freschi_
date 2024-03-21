<?php

namespace App\Http\Controllers;

use App\Models\Category;



use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        return view('homepage', ['categories' => $categories]);
    }

    public function test()
    {
        return view('test');
    }
}