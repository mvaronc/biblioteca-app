<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
})->name('home')->middleware('guest');



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

//Route::post('logout', App\Livewire\Actions\Logout::class)->name('logout');
Route::resource('books', App\Http\Controllers\BookController::class)->names('books');


require __DIR__.'/settings.php';
