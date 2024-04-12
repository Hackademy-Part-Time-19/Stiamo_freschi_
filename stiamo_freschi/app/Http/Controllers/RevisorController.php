<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Mail\MakeMailPippo;
use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;



class RevisorController extends Controller
{
 // se l'articolo è creato da un revisore, non deve poter accettare o rifiutare i suoi annunci
    public function index()
    {
      
        $logged_in_reviewer_id = Auth::id();

        $announcement_to_check = Announcement::where('is_accepted', null)
        ->where('user_id', '!=', $logged_in_reviewer_id)
        ->orderBy('created_at', 'desc')
        ->first();
   
        return view('dashboard-revisore', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement)
    {

        $announcement->setAccepted(true);
        return redirect()->back()->with('success', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('denied', 'Complimenti, hai rifiutato l\'annuncio');
    }

    public function becomeRevisor()
    {

        $user = Auth::user();
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user));
        return redirect()->back()->with('message', 'Complimenti! Hai richiesto di diventare revisore correttamente');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('presto:makeUserRevisor', ["email" => $user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
    }


}