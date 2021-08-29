<?php



Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home');







