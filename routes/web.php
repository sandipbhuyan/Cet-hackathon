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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login_test',function (){
    return view('auth.login_test');
});


Route::get('/machine-learning',function (){
    return view('subjects.machine-learning');
});

Route::get('/statistics',function (){
    return view('statistics');
});

Route::get('/rishab',function (){
    return view('profile.rishab');
})->name('rishab');

Route::get('/asutosh',function (){
    return view('profile.asutosh');
})->name('asutosh');

Route::get('/ayushman',function (){
    return view('profile.ayushman');
})->name('ayushman');

Route::get('/harshit',function (){
    return view('profile.harshit');
})->name('harshit');

Route::get('/prayash',function (){
    return view('profile.prayash');
})->name('prayash');

Route::get('/reddy',function (){
    return view('profile.reddy');
})->name('reddy');

Route::get('/rounak',function (){
    return view('profile.rounak');
})->name('rounak');
Route::get('/sai',function (){
    return view('profile.sai');
})->name('sai');