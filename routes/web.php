<?php

//use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/quote', function () {
    return view('quote');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::fallback(function () {
    return view('404');
});