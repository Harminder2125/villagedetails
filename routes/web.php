<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('frontend.homepage');
})->name('home');
Route::get('/panchayat', function () {
    return view('frontend.panchayat');
})->name('panchayat');
Route::get('/officers', function () {
    return view('frontend.officers');
})->name('officers');
Route::get('/buildings', function () {
    return view('frontend.buildings');
})->name('buildings');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
