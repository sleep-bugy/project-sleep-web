<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function switchLanguage($lang)
    {
        // Validate the language
        $validLanguages = ['en', 'id', 'es', 'de', 'fr', 'it', 'pt', 'ru', 'zh'];

        if (in_array($lang, $validLanguages)) {
            Session::put('language', $lang);
            App::setLocale($lang);
        }

        return redirect()->back();
    }
}