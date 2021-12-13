<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/hCard', function () {
    return view('hCard');
});

Route::get('/hCalendar', function () {
    return view('hCalendar');
});

Route::get('/geo', function () {
    return view('geo');
});

Route::get('/Product', function () {
    return view('Product');
});

Route::get('/Recipe', function () {
    return view('Recipe');
});

Route::get('/CreativeWork', function () {
    return view('CreativeWork');
});

Route::get('/book', function () {
    return view('book');
});

Route::get('/Movie', function () {
    return view('Movie');
});

Route::get('/Thing', function () {
    return view('Thing');
});

Route::get('/TVSeries', function () {
    return view('TVSeries');
});

Route::get('/MusicRecording', function () {
    return view('MusicRecording');
});

Route::get('/AudioObject', function () {
    return view('AudioObject');
});

Route::get('/ImageObject', function () {
    return view('ImageObject');
});

Route::get('/VideoObject', function () {
    return view('VideoObject');
});

Route::get('/Organization', function () {
    return view('Organization');
});

Route::get('/Event', function () {
    return view('Event');
});

Route::get('/Place', function () {
    return view('Place');
});

Route::get('/LocalBusiness', function () {
    return view('LocalBusiness');
});

Route::get('/Restaurant', function () {
    return view('Restaurant');
});

Route::get('/Offer', function () {
    return view('Offer');
});

Route::get('/Review', function () {
    return view('Review');
});

Route::get('/AggregateRating', function () {
    return view('AggregateRating');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/submit', 'App\Http\Controllers\UsersController@submit')->name('login-form');