<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/about', function () {
    return view('about');
});

use App\Http\Controllers\BookController;
Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{id}', [BookController::class, 'show']);
