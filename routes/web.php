<?php

Route::get('/', function () {
    return view('main');
})->name('main');

Route::post('/register', [ 'uses' => 'Auth\RegisterController@create' ] )->name('register.create');
Route::get('/register/activate/{email}/{code}', [ 'uses' => 'Auth\RegisterController@activate' ] )->name('register.activate');


Route::group([ 'prefix'=>'user'], function()
{
    Route::get('/', [ 'uses' => 'User\UserController@main' ] )->name('user.main');
});


Route::post('/login', [ 'uses' => 'Auth\LoginController@login' ] )->name('login');
Route::get('/logout', [ 'uses' => 'Auth\LoginController@logout' ] )->name('logout');



Route::get('test', function () {

//    \App\User::where('id',20)->delete();
    dd(\Illuminate\Support\Facades\Auth::user());
});
