<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    // Only on Local
    Route::get('test', 'PageCtrl@test')->middleware('local');

    // CMS
    Route::get(__('routes.imprint'),    'PageCtrl@imprint')->name('imprint'); // Imprints - Impressum
    Route::get(__('routes.privacy'),    'PageCtrl@privacy')->name('privacy'); // Imprints - Impressum

    // Language Switcher
    Route::get(__('routes.lang').'/{locale}', 'LanguageCtrl@switch')->name('lang_switch');

    if (env('APP_UNDER_CONSTRUCTION'))
    {
        Route::get('/', 'PageCtrl@comingSoon');
    } else {
        Route::get('/',  'PageCtrl@home')->name('home');

        // view('pages.coming-soon')

        // Route::get('/kontakt',      'PageCtrl@contact')->name('contact'); // Contact - Kontakt
        // Route::get('/contact',      'PageCtrl@contact');
        // Route::get('/anmelden',     'PageCtrl@register')->name('register'); // Register - Anmelden
        // Route::get('/register',     'PageCtrl@register');
        // Route::get('/danke',        'PageCtrl@thanks')->name('thanks');

        // Contact form
        Route::post(__('routes.contact'),'ContactCtrl@store')->name('contact');

        // Route::get('/danke',        'PageCtrl@thanks');
        // Route::get('/thanks',       'PageCtrl@thanks');
        // Route::get('/thank-you',    'PageCtrl@thanks');
    }






