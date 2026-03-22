<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('todos', [TodoController::class,'index'])->name('todos');

Route::get('/newtest', function () {
    return view('welcome');
});
