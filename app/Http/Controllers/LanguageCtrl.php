<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;

class LanguageCtrl extends Controller
{
    function switch($locale) {
        if (in_array($locale, config('app.locales'))) {
            request()->session()->put('locale', $locale);
        }
        return redirect()->back();
    }
}
