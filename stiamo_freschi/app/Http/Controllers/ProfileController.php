<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\EditProfile;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {

        $myAnnouncements = auth()->user()->announcements()
            ->where('is_accepted', true)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('profile', ['myAnnouncements' => $myAnnouncements]);
    }

    public function goToEdit()
    {
        return view('modifica-profilo');
    }

    public function update(EditProfile $request)
    {
        $user = Auth::user();
        $validateData = $request->validated();
        $user->update($validateData);

        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $file_name = $user->id . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile_images', $file_name);

            // Crea una nuova istanza di Image e salvala nel database
            $image = new Image(['path' => $file_name]);
            $image->save();

            // Controlla se l'utente ha già un'immagine associata
            if ($user->image) {
                // Ottieni l'immagine associata all'utente
                $old_image = $user->image;
            
                // Rimuovi l'associazione tra l'utente e l'immagine
                $user->image_id = null;
                $user->save();
                $old_image->delete();
            
            }
            


            // Aggiorna l'ID dell'immagine per l'utente
            $user->image_id = $image->id;
            $user->save();
        }

        return redirect()->back()->with('message', 'Profilo modificato con successo');
    }
}
