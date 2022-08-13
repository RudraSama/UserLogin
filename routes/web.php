<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
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
    return view('pages.index');
})->name('home');
Route::post('/signup', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'destory']);
Route::get('/{user:id}/edit', [AdminController::class, 'edit']);
Route::get('/{user:id}/delete', [AdminController::class, 'delete']);
Route::patch('/{user:id}/update', [AdminController::class, 'update']);
