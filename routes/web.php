<?php

Route::get('/', function () {
    return view('main');
});

Route::post('/register', [ 'uses' => 'Auth\RegisterController@create' ] )->name('register.create');
Route::get('/register/activate/{email}/{code}', [ 'uses' => 'Auth\RegisterController@activate' ] )->name('register.activate');



Route::get('test', function () {

});
