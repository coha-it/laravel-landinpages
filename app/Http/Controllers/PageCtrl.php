<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCtrl extends Controller
{
    function comingSoon () {
        return view('pages.coming-soon');
    }
    function home () {
        return view('pages.home', ['type' => 'register']);
    }
    function imprint () {
        return view('pages.imprint');
    }
    function contact () {
        return view('contact', ['type' => 'contact']);
    }
    function register () {
        return view('contact', ['type' => 'register']);
    }
    function thanks () {
        return view('pages.thanks');
    }
    function test () {
        return view('pages.test', ['name' => 'Alex']);
    }
}
