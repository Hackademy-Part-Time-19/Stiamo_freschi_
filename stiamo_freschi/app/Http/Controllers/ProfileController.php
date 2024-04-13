<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditProfile;
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

    public function goToEdit(){
        return view('modifica-profilo');
    
    }

    public function update(EditProfile $request){
        $user = Auth::user();
        $validateData = $request->validated();
        $user->update($validateData);

        return redirect()->back()->with('message', 'Profilo modificato con successo');
    }
}
