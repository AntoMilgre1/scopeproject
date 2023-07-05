<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScopeController;

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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/registration', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/changepassword', function () {
    return view('changepassword');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::post('/submit',[ScopeController::class,'submit']);