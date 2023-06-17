<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterContoller;


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

Route::get('/', [PegawaiController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/daftar', function () {
    return view('daftar');
});

// Daftar form
Route::post('/daftar', [PegawaiController::class, 'daftar']);
//  edit
Route::get('/edit/{id}', [PegawaiController::class ,'edit']);
// Delete
Route::get('/delete/{id}', [PegawaiController::class ,'delete']);
// Update data
Route::post('/update/{id}', [PegawaiController::class,'update']);
// Login
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
// Register
Route::get('/register', [RegisterContoller::class, 'index']);
Route::post('/register', [RegisterContoller::class, 'store']);
// Logout
Route::get('/logout', [LoginController::class, 'logout']);