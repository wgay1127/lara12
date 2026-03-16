<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('test', [TestController::class,'index'])->name('test');

Route::get('/newtest', function () {
    return view('welcome');
});
