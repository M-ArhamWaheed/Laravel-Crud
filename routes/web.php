<?php

use App\Http\Controllers\AddUserController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('form');
})->name('form');

Route::controller(AddUserController::class)->group(function () {
    Route::post('/add', 'addUser')->name('submit');
    Route::get('/', 'fetchData')->name('home');
    Route::get('/view/{id}', 'view')->name('view');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::get('/update/{id}', 'getForUpdate')->name('getForUpdate');
    Route::post('/edit/{id}', 'update')->name('update');
});
