<?php

namespace App\Http\Controllers;

use App\Models\Category;



use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{

    protected $categoryTranslations;

    public function __construct()
    {
        $this->categoryTranslations = App::make('categoryTranslations');
    }


    public function home()
    {
        $categories = Category::all();
        $announcements = Announcement::orderBy('updated_at', 'desc')->where('is_accepted', true)->get();

        $currentTranslations = $this->categoryTranslations[App::getLocale()];

        $categoryTranslations = [
            'Sport' => $currentTranslations['Sport'],
            'Elettronica' => $currentTranslations['Elettronica'],
            'Musica' => $currentTranslations['Musica'],
            'Casa' => $currentTranslations['Casa'],
            'Giardino' => $currentTranslations['Giardino'],
            'Fai da te' => $currentTranslations['Fai da te'],
            'Abbigliamento' => $currentTranslations['Abbigliamento'],
            'Accessori' => $currentTranslations['Accessori'],
            'Gioielli' => $currentTranslations['Gioielli'],
        ];
    
            $translatedCategory = 'Nessuna categoria';
            
        return view('homepage', compact('categories', 'announcements','translatedCategory'));
    }



    public function announcementCreate()
    {
        return view('Announcements-create', ['categories' => Category::all()]);
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function test()
    {
        return view('test-profile');
    }
    public function passwordDimenticata()
    {
        return view('auth.passwords-email');
    }

    public function accettaCookies()
    {
        return redirect()->back()->withCookie('request_user_cookies', true, 60 * 60 * 24 * 30);
    }
    public function rifiutaCookies()
    {
        return redirect()->back()->withCookie('request_user_cookies', false, 60 * 60 * 24 * 30);
    }
}