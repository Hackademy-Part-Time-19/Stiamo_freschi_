<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('homepage');
    }

    public function test(){
        return view('test');
    }

    public function announcementCreate(){
        return view('Announcements-create');
    }   
}
