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
    return view('welcome');
})->name('welcome');

Route::get('about', function () {
    return view('about'); 
})->name('about');

// Route::get('gallery', function () {
//     return view('gallery'); 
// })->name('gallery');

Route::get('media', function () {
    return view('media'); 
})->name('media');

Route::get('news', function () {
    return view('news'); 
})->name('news');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
