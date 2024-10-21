<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        ['name' => 'Mario Rossi', 'email' => 'mario.rossi@example.com'],
        ['name' => 'Luca Verdi', 'email' => 'luca.verdi@example.com'],
        ['name' => 'Giulia Bianchi', 'email' => 'giulia.bianchi@example.com']
    ];
    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');