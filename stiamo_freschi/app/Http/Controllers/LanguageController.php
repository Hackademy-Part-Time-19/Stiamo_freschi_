<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\LanguageController;

class LanguageController extends Controller
{
    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
