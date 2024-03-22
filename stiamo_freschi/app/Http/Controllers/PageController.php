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
        return view('homepage', ['categories' => $categories, 'announcements' => Announcement::all()]);
    }



    public function announcementCreate()
    {
        return view('Announcements-create', ['categories' => Category::all()]);
    }   
}

