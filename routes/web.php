<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LogInController;


Route::get('/newpage', function () {
    return inertia('Home', [
        'name' => 'William'
    ]);
})->name('home');

Route::get('/admi', function () {
    return inertia('Admin');
})->name('Admin')->middleware('auth');

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
// Route::get('admin', function () {
//     return view('admin');
// });
Route::get('login', [LogInController::class, 'showLoginForm'])->name('login');
Route::post('login', [LogInController::class, 'login'])->name('login.process');   
// todo: Implement authentication and authorization for admin routes
Route::get('users', [UsersController::class,'index'])->name('users');
Route::get('users/create', [UsersController::class,'create'])->name('users.create');