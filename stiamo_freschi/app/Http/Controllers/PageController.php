<?php

namespace App\Http\Controllers;

use App\Models\Category;



use App\Models\Announcement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('homepage', compact('categories', 'announcements'));
    }



    public function announcementCreate()
    {

        return view('Announcements-create', ['categories' => Category::all()]);
    }
    
    public function test()
    {
        return view('test');
    }
}

