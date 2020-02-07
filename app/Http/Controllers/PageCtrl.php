<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCtrl extends Controller
{
    function home () {
        return view('home', ['type' => 'register']);
    }
    function imprint () {
        return view('imprint');
    }
    function contact () {
        return view('contact', ['type' => 'contact']);
    }
    function register () {
        return view('contact', ['type' => 'register']);
    }
    function thanks () {
        return view('thanks');
    }
}
