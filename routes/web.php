<?php

Route::get('/', function () {
    return view('main');
});

Route::post('/register', [ 'uses' => 'Auth\RegisterController@create' ] )->name('register.create');

Route::get('test', function () {
    \App\User::create([
        'email' => 'test@mail.ru',
        'password' => 'pass',
    ]);
});


