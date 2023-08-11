<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\CommentController;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(Authenticate::class);

Route::get('/profil', function () {
    return view('profil');
})->middleware(Authenticate::class);

Route::get('/dashboard', function () {
    return view('profil');
})->middleware(Authenticate::class);

Route::resource('posts', PostController::class);

Route::post('/posts/{post}/comments', [CommentController::class,'store'])->name('comments.store');