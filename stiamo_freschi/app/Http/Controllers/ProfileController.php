<?php

namespace App\Http\Controllers;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index (){
        
        $myAnnouncements = auth()->user()->announcements()
        ->where('is_accepted', true)
        ->orderBy('updated_at', 'desc')
        ->get();

        return view('profile',['myAnnouncements' => $myAnnouncements]);
    }
}
